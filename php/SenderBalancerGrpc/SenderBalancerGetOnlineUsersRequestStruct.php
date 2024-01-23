<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_sender_balancer.proto

namespace SenderBalancerGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * формат запроса для senderBalancer.SenderBalancerGetOnlineUsersRequestStruct
 *
 * Generated from protobuf message <code>senderBalancerGrpc.SenderBalancerGetOnlineUsersRequestStruct</code>
 */
class SenderBalancerGetOnlineUsersRequestStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated int64 user_list = 1;</code>
     */
    private $user_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $user_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoSenderBalancer::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated int64 user_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserList()
    {
        return $this->user_list;
    }

    /**
     * Generated from protobuf field <code>repeated int64 user_list = 1;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->user_list = $arr;

        return $this;
    }

}

