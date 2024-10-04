<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_pivot_sender.proto

namespace PivotSenderGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pivotSenderGrpc.ConnectionInfoStruct</code>
 */
class ConnectionInfoStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 sender_node_id = 1;</code>
     */
    protected $sender_node_id = 0;
    /**
     * Generated from protobuf field <code>int64 connection_id = 2;</code>
     */
    protected $connection_id = 0;
    /**
     * Generated from protobuf field <code>int64 user_id = 3;</code>
     */
    protected $user_id = 0;
    /**
     * Generated from protobuf field <code>string ip_address = 4;</code>
     */
    protected $ip_address = '';
    /**
     * Generated from protobuf field <code>int64 connected_at = 5;</code>
     */
    protected $connected_at = 0;
    /**
     * Generated from protobuf field <code>string user_agent = 6;</code>
     */
    protected $user_agent = '';
    /**
     * Generated from protobuf field <code>string platform = 7;</code>
     */
    protected $platform = '';
    /**
     * Generated from protobuf field <code>int64 is_focused = 8;</code>
     */
    protected $is_focused = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $sender_node_id
     *     @type int|string $connection_id
     *     @type int|string $user_id
     *     @type string $ip_address
     *     @type int|string $connected_at
     *     @type string $user_agent
     *     @type string $platform
     *     @type int|string $is_focused
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoPivotSender::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 sender_node_id = 1;</code>
     * @return int|string
     */
    public function getSenderNodeId()
    {
        return $this->sender_node_id;
    }

    /**
     * Generated from protobuf field <code>int64 sender_node_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSenderNodeId($var)
    {
        GPBUtil::checkInt64($var);
        $this->sender_node_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 connection_id = 2;</code>
     * @return int|string
     */
    public function getConnectionId()
    {
        return $this->connection_id;
    }

    /**
     * Generated from protobuf field <code>int64 connection_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setConnectionId($var)
    {
        GPBUtil::checkInt64($var);
        $this->connection_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 user_id = 3;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>int64 user_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkInt64($var);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ip_address = 4;</code>
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * Generated from protobuf field <code>string ip_address = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setIpAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 connected_at = 5;</code>
     * @return int|string
     */
    public function getConnectedAt()
    {
        return $this->connected_at;
    }

    /**
     * Generated from protobuf field <code>int64 connected_at = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setConnectedAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->connected_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string user_agent = 6;</code>
     * @return string
     */
    public function getUserAgent()
    {
        return $this->user_agent;
    }

    /**
     * Generated from protobuf field <code>string user_agent = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setUserAgent($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_agent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string platform = 7;</code>
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Generated from protobuf field <code>string platform = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPlatform($var)
    {
        GPBUtil::checkString($var, True);
        $this->platform = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 is_focused = 8;</code>
     * @return int|string
     */
    public function getIsFocused()
    {
        return $this->is_focused;
    }

    /**
     * Generated from protobuf field <code>int64 is_focused = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIsFocused($var)
    {
        GPBUtil::checkInt64($var);
        $this->is_focused = $var;

        return $this;
    }

}

