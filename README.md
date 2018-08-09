# aliyun-iot
2018最新sdk封装composer包


使用方法：引入项目文件

use \Leslie\AliyunIot\AliyunIot;

$iot = new AliyunIot('accessKey','accessSecret');

删除设备：

$iot->deleteDevice('deviceName','productKey');

获取设备状态:

$iot->getDeviceStatus('deviceName','productKey');

产品注册:

$iot->createProduct('name','desc','catId');

设备列表:

$iot->iotList('pageSize','currentPage','productKey');

更新产品:

$iot->updateProduct('productKey','productName','productDesc');

注册设备:

$iot->registerDevice('deviceName','productKey');

批量检查设备:

$iot->batchCheckDeviceNames('deviceName','productKey');

批量注册设备:

$iot->batchRegisterDevice('count','productKey);

发布topic:

$iot->pub('topicFullName','qos','messageContent','productKey');

RRPC:

$iot->rrpc('requestBase64Byte', 'deviceName','productKey', 'timeout');

更新设备影子:

$iot->updateDeviceShadow('shadowMessage', 'deviceName', 'productKey');

获取设备影子:

$iot->getDeviceShadow('productKey', 'deviceName')