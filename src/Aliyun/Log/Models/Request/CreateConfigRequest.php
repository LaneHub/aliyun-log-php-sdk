<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */
namespace Aliyun\Log\Models\Request;
use Aliyun\Log\Models\Request\Aliyun_Log_Models_Request;
/**
 * 
 *
 * @author log service dev
 */
class Aliyun_Log_Models_CreateConfigRequest extends Aliyun_Log_Models_Request {

    private $config;

    /**
     * Aliyun_Log_Models_CreateConfigRequest Constructor
     *
     */
    public function __construct($config) {
        $this->config = $config;
    }

    public function getConfig(){
        return $this->config;
        
    }

    public function setConfig($config){
        $this->config = $config;
    }
    
}
