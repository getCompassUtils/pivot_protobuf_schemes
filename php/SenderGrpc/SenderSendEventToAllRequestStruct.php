<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_sender.proto

namespace SenderGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * формат запроса для Sender.SendEventToAll
 *
 * Generated from protobuf message <code>senderGrpc.SenderSendEventToAllRequestStruct</code>
 */
class SenderSendEventToAllRequestStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string event = 1;</code>
     */
    protected $event = '';
    /**
     * Generated from protobuf field <code>repeated .senderGrpc.EventVersionItem event_version_list = 2;</code>
     */
    private $event_version_list;
    /**
     * Generated from protobuf field <code>string push_data = 3;</code>
     */
    protected $push_data = '';
    /**
     * Generated from protobuf field <code>string ws_users = 4;</code>
     */
    protected $ws_users = '';
    /**
     * Generated from protobuf field <code>string uuid = 5;</code>
     */
    protected $uuid = '';
    /**
     * Generated from protobuf field <code>string routine_key = 6;</code>
     */
    protected $routine_key = '';
    /**
     * Generated from protobuf field <code>int64 is_need_push = 7;</code>
     */
    protected $is_need_push = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $event
     *     @type \SenderGrpc\EventVersionItem[]|\Google\Protobuf\Internal\RepeatedField $event_version_list
     *     @type string $push_data
     *     @type string $ws_users
     *     @type string $uuid
     *     @type string $routine_key
     *     @type int|string $is_need_push
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoSender::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string event = 1;</code>
     * @return string
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Generated from protobuf field <code>string event = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkString($var, True);
        $this->event = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .senderGrpc.EventVersionItem event_version_list = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEventVersionList()
    {
        return $this->event_version_list;
    }

    /**
     * Generated from protobuf field <code>repeated .senderGrpc.EventVersionItem event_version_list = 2;</code>
     * @param \SenderGrpc\EventVersionItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEventVersionList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \SenderGrpc\EventVersionItem::class);
        $this->event_version_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string push_data = 3;</code>
     * @return string
     */
    public function getPushData()
    {
        return $this->push_data;
    }

    /**
     * Generated from protobuf field <code>string push_data = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPushData($var)
    {
        GPBUtil::checkString($var, True);
        $this->push_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ws_users = 4;</code>
     * @return string
     */
    public function getWsUsers()
    {
        return $this->ws_users;
    }

    /**
     * Generated from protobuf field <code>string ws_users = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setWsUsers($var)
    {
        GPBUtil::checkString($var, True);
        $this->ws_users = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string uuid = 5;</code>
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Generated from protobuf field <code>string uuid = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setUuid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uuid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string routine_key = 6;</code>
     * @return string
     */
    public function getRoutineKey()
    {
        return $this->routine_key;
    }

    /**
     * Generated from protobuf field <code>string routine_key = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRoutineKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->routine_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 is_need_push = 7;</code>
     * @return int|string
     */
    public function getIsNeedPush()
    {
        return $this->is_need_push;
    }

    /**
     * Generated from protobuf field <code>int64 is_need_push = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIsNeedPush($var)
    {
        GPBUtil::checkInt64($var);
        $this->is_need_push = $var;

        return $this;
    }

}

