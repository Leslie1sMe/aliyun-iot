# aliyun-iot
2018最新sdk封装composer包


使用方法：引入项目文件

use \Leslie\AliyunIot\AliyunIot;

$iot = new AliyunIot('accessKey','accessSecret');

删除设备：

$iot->deleteDevice('deviceName','productKey');

获取设备状态

$iot->getDeviceStatus('deviceName','productKey');

...
