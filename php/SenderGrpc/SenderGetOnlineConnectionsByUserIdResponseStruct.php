<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_sender.proto

namespace SenderGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * формат ответа для Sender.GetOnlineConnectionsByUserId
 *
 * Generated from protobuf message <code>senderGrpc.SenderGetOnlineConnectionsByUserIdResponseStruct</code>
 */
class SenderGetOnlineConnectionsByUserIdResponseStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .senderGrpc.ConnectionInfoStruct online_connection_list = 1;</code>
     */
    private $online_connection_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \SenderGrpc\ConnectionInfoStruct[]|\Google\Protobuf\Internal\RepeatedField $online_connection_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoSender::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .senderGrpc.ConnectionInfoStruct online_connection_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOnlineConnectionList()
    {
        return $this->online_connection_list;
    }

    /**
     * Generated from protobuf field <code>repeated .senderGrpc.ConnectionInfoStruct online_connection_list = 1;</code>
     * @param \SenderGrpc\ConnectionInfoStruct[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOnlineConnectionList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \SenderGrpc\ConnectionInfoStruct::class);
        $this->online_connection_list = $arr;

        return $this;
    }

}

