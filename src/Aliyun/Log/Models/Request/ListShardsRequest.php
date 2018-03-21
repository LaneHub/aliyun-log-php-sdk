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
class Aliyun_Log_Models_ListShardsRequest extends Aliyun_Log_Models_Request {

    private $logstore;

    /**
     * Aliyun_Log_Models_ListShardsRequest Constructor
     *
     */
    public function __construct($project,$logstore) {
        parent::__construct ( $project );
        $this->logstore = $logstore;
    }

    public function getLogstore(){
      return $this->logstore;
    }

    public function setLogstore($logstore){
      $this->logstore = $logstore;
    }
    
    
}
