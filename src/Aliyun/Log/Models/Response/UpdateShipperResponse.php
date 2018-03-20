<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */
namespace Aliyun\Log\Models\Response;

class Aliyun_Log_Models_UpdateShipperResponse extends Aliyun_Log_Models_Response {

    /**
     * Aliyun_Log_Models_UpdateShipperResponse constructor
     *
     * @param array $resp
     *            GetLogs HTTP response body
     * @param array $header
     *            GetLogs HTTP response header
     */
    public function __construct($resp, $header) {
        parent::__construct ( $header );
    }
}