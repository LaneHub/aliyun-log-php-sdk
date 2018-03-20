<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */
namespace Aliyun\Log\Models\Request;

/**
 * 
 *
 * @author log service dev
 */
class Aliyun_Log_Models_DeleteConfigRequest extends Aliyun_Log_Models_Request {

    private $configName;
    /**
     * Aliyun_Log_Models_DeleteConfigRequest Constructor
     *
     */
    public function __construct($configName=null) {
        $this->configName = $configName;
    }

    public function getConfigName(){
        return $this->configName;
    }

    public function setConfigName($configName){
        $this->configName=$configName;
    }
    
}
