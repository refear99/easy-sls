<?php namespace Refear99\EasySls\Requests;

use Refear99\EasySls\Models\ACL;

/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 *
 * @author log service dev
 */
class UpdateACLRequest extends Request
{

    /**
     * @var ACL
     */
    private $acl;


    /**
     * UpdateACLRequest Constructor
     *
     */
    public function __construct($acl)
    {
        $this->acl = $acl;
    }


    public function getAcl()
    {
        return $this->acl;
    }


    public function setAcl($acl)
    {
        $this->acl = $acl;
    }
}
