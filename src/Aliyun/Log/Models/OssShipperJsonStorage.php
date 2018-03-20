<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */
namespace Aliyun\Log\Models;

class Aliyun_Log_Models_OssShipperJsonStorage extends Aliyun_Log_Models_OssShipperStorage{

    public function to_json_object(){
        return array();
    }
}