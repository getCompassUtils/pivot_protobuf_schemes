<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_sender.proto

namespace SenderGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * формат ответа для Sender.SetToken
 *
 * Generated from protobuf message <code>senderGrpc.SenderSetTokenResponseStruct</code>
 */
class SenderSetTokenResponseStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 node = 1;</code>
     */
    protected $node = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $node
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoSender::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 node = 1;</code>
     * @return int|string
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * Generated from protobuf field <code>int64 node = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNode($var)
    {
        GPBUtil::checkInt64($var);
        $this->node = $var;

        return $this;
    }

}

