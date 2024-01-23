<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_database_controller.proto

namespace DatabaseControllerGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>databaseControllerGrpc.BindOnServicePortResponseStruct</code>
 */
class BindOnServicePortResponseStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 port = 1;</code>
     */
    protected $port = 0;
    /**
     * Generated from protobuf field <code>string mysql_user = 2;</code>
     */
    protected $mysql_user = '';
    /**
     * Generated from protobuf field <code>string mysql_pass = 3;</code>
     */
    protected $mysql_pass = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $port
     *     @type string $mysql_user
     *     @type string $mysql_pass
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
     * Generated from protobuf field <code>string mysql_user = 2;</code>
     * @return string
     */
    public function getMysqlUser()
    {
        return $this->mysql_user;
    }

    /**
     * Generated from protobuf field <code>string mysql_user = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMysqlUser($var)
    {
        GPBUtil::checkString($var, True);
        $this->mysql_user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string mysql_pass = 3;</code>
     * @return string
     */
    public function getMysqlPass()
    {
        return $this->mysql_pass;
    }

    /**
     * Generated from protobuf field <code>string mysql_pass = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMysqlPass($var)
    {
        GPBUtil::checkString($var, True);
        $this->mysql_pass = $var;

        return $this;
    }

}
