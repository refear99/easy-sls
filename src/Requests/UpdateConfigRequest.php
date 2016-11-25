<?php namespace Refear99\EasySls\Requests;

use Refear99\EasySls\Models\Config;

/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 *
 * @author log service dev
 */
class UpdateConfigRequest extends Request
{

    /**
     * @var Config
     */
    private $config;


    /**
     * UpdateConfigRequest Constructor
     *
     */
    public function __construct($config)
    {
        $this->config = $config;
    }


    public function getConfig()
    {
        return $this->config;
    }


    public function setConfig($config)
    {
        $this->config = $config;
    }

}
