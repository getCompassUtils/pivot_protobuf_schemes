<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_kuber.proto

namespace KuberGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * формат запроса для company.Delete
 *
 * Generated from protobuf message <code>kuberGrpc.CompanyDeleteRequestStruct</code>
 */
class CompanyDeleteRequestStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 company_stack_id = 1;</code>
     */
    protected $company_stack_id = 0;
    /**
     * Generated from protobuf field <code>string namespace = 2;</code>
     */
    protected $namespace = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $company_stack_id
     *     @type string $namespace
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoKuber::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 company_stack_id = 1;</code>
     * @return int|string
     */
    public function getCompanyStackId()
    {
        return $this->company_stack_id;
    }

    /**
     * Generated from protobuf field <code>int64 company_stack_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCompanyStackId($var)
    {
        GPBUtil::checkInt64($var);
        $this->company_stack_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string namespace = 2;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Generated from protobuf field <code>string namespace = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

}

