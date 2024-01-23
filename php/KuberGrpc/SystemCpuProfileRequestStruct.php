<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_kuber.proto

namespace KuberGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * формат запроса для system.cpuProfile
 *
 * Generated from protobuf message <code>kuberGrpc.SystemCpuProfileRequestStruct</code>
 */
class SystemCpuProfileRequestStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 time = 1;</code>
     */
    protected $time = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $time
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoKuber::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 time = 1;</code>
     * @return int|string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Generated from protobuf field <code>int64 time = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->time = $var;

        return $this;
    }

}

