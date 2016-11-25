<?php namespace Refear99\EasySls\Responses;

/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 *
 * The response of the DeleteLogStore API from log service.
 * @author log service dev
 */
class DeleteLogStoreResponse extends Response
{

    /**
     * DeleteLogStoreResponse constructor
     *
     * @param array $resp   DeleteLogStore HTTP response body
     * @param array $header DeleteLogStore HTTP response header
     */
    public function __construct($resp, $header)
    {
        parent::__construct($header);
    }

}
