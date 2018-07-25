<?php

require 'vendor/autoload.php';

use Leslie\AliyunIot\AliyunIot;

$aliyun = new AliyunIot('LTAImpZs17i58Qax', 'hhKFrebStLpEI9A0DiHOO29qM9ao6I');
print_r($aliyun->deleteDevice('test10', "a1Yv4HAfyjU"));