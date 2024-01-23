<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_database_controller.proto

namespace DatabaseControllerGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>databaseControllerGrpc.CreateVacantCompanyRequestStruct</code>
 */
class CreateVacantCompanyRequestStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 port = 1;</code>
     */
    protected $port = 0;
    /**
     * Generated from protobuf field <code>int64 company_id = 2;</code>
     */
    protected $company_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $port
     *     @type int|string $company_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoDatabaseController::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 port = 1;</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Generated from protobuf field <code>int32 port = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 company_id = 2;</code>
     * @return int|string
     */
    public function getCompanyId()
    {
        return $this->company_id;
    }

    /**
     * Generated from protobuf field <code>int64 company_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCompanyId($var)
    {
        GPBUtil::checkInt64($var);
        $this->company_id = $var;

        return $this;
    }

}

