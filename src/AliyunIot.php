<?php

namespace Leslie\AliyunIot;
include_once 'Iot/aliyun-php-sdk-core/Config.php';

use Leslie\Iot\Core\DefaultAcsClient;
use Leslie\Iot\Core\Profile\DefaultProfile;
use Leslie\Iot\Request\V20180120\DeleteDeviceRequest;
use Leslie\Iot\Request\V20180120\BatchCheckDeviceNamesRequest;
use Leslie\Iot\Request\V20180120\BatchRegisterDeviceRequest;
use Leslie\Iot\Request\V20180120\GetDeviceStatusRequest;
use Leslie\Iot\Request\V20180120\RegisterDeviceRequest;
use Leslie\Iot\Request\V20180120\PubRequest;


/**
 * Class AliyunIot
 * @package Leslie\AliyunIot
 */
class AliyunIot
{
    private $_accessKey = '';
    private $_accessSecret = '';
    private $_client = '';


    /**
     * AliyunIot constructor.
     * @param $accessKey
     * @param $accessSecret
     */
    public function __construct($accessKey, $accessSecret)
    {
        $this->_accessKey = $accessKey;
        $this->_accessSecret = $accessSecret;
        $iClientProfile = DefaultProfile::getProfile("cn-shanghai", $this->_accessKey, $this->_accessSecret);
        $this->_client = new DefaultAcsClient($iClientProfile);
    }


    /**
     *删除设备
     * stdClass Object
     * (
     * [ErrorMessage] =>
     * [RequestId] => E0917241-14B1-4175-85BA-0E5BF3FAC073
     * [Success] => 1
     * )
     */
    public function deleteDevice($deviceName, $productKey)
    {
        $request = new DeleteDeviceRequest();
        $request->setDeviceName($deviceName);
        $request->setProductKey($productKey);
        return $this->_client->getAcsResponse($request);
    }

    /**
     *获取设备状态
     * stdClass Object
     * (
     * [Data] => stdClass Object
     * (
     * [Status] => UNACTIVE
     * )
     * [RequestId] => 5EDA8C14-AE90-47ED-9231-F472B8CC9477
     * [Success] => 1
     * )
     */
    public function getDeviceStatus($deviceName, $productKey)
    {
        $request = new GetDeviceStatusRequest();
        $request->setDeviceName($deviceName);
        $request->setProductKey($productKey);
        return $this->_client->getAcsResponse($request);
    }

    /**
     * 注册设备
     * stdClass Object
     * (
     * [Data] => stdClass Object
     * (
     * [DeviceName] => devicetest10010
     * [ProductKey] => QS8EJP7bwGT
     * [DeviceSecret] => hwzEoYb0nKvu4FgXF0oKJZ0qCFXZng0m
     * [IotId] => hW2o1ufg1HMLOKAjbAIO00101f2a00
     * )
     *
     * [RequestId] => 8F38A03D-D6EF-40B0-8FD1-8D095B9C2463
     * [Success] => 1
     * )
     */
    public function registerDevice($deviceName, $productKey)
    {
        $request = new RegisterDeviceRequest();
        $request->setDeviceName($deviceName);
        $request->setProductKey($productKey);
        return $this->_client->getAcsResponse($request);
    }

    /**
     * 批量检查设备
     */
    public function batchCheckDeviceNames($deviceName, $productKey)
    {
        $request = new BatchCheckDeviceNamesRequest();
        $request->setDeviceName($deviceName);
        $request->setProductKey($productKey);
        return $this->_client->getAcsResponse($request);
    }

    /**
     * 批量注册设备
     * @param $count
     * @param $productKey
     * @return mixed|\SimpleXMLElement
     */
    public function batchRegisterDevice($count, $productKey)
    {
        $request = new BatchRegisterDeviceRequest();
        $request->setDeviceName($count);
        $request->setProductKey($productKey);
        return $this->_client->getAcsResponse($request);
    }

    /**
     * 发布Topic
     * @param $topicFullName
     * @param $qos
     * @param $messageContent
     * @param $productKey
     * @return mixed|\SimpleXMLElement
     */
    public function pub($topicFullName, $qos, $messageContent, $productKey)
    {
        $request = new PubRequest();
        $request->setTopicFullName($topicFullName);
        $request->setQos($qos);
        $request->setMessageContent($messageContent);
        $request->setProductKey($productKey);
        return $this->_client->getAcsResponse($request);
    }


}
