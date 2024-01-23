<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_sender.proto

namespace SenderGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * формат запроса для Sender.SendEvent
 *
 * Generated from protobuf message <code>senderGrpc.SenderSendEventRequestStruct</code>
 */
class SenderSendEventRequestStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .senderGrpc.EventUserStruct user_list = 1;</code>
     */
    private $user_list;
    /**
     * Generated from protobuf field <code>string event = 2;</code>
     */
    protected $event = '';
    /**
     * Generated from protobuf field <code>repeated .senderGrpc.EventVersionItem event_version_list = 3;</code>
     */
    private $event_version_list;
    /**
     * Generated from protobuf field <code>string push_data = 4;</code>
     */
    protected $push_data = '';
    /**
     * Generated from protobuf field <code>string ws_users = 5;</code>
     */
    protected $ws_users = '';
    /**
     * Generated from protobuf field <code>string uuid = 6;</code>
     */
    protected $uuid = '';
    /**
     * Generated from protobuf field <code>string routine_key = 7;</code>
     */
    protected $routine_key = '';
    /**
     * Generated from protobuf field <code>int64 company_id = 8;</code>
     */
    protected $company_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \SenderGrpc\EventUserStruct[]|\Google\Protobuf\Internal\RepeatedField $user_list
     *     @type string $event
     *     @type \SenderGrpc\EventVersionItem[]|\Google\Protobuf\Internal\RepeatedField $event_version_list
     *     @type string $push_data
     *     @type string $ws_users
     *     @type string $uuid
     *     @type string $routine_key
     *     @type int|string $company_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoSender::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .senderGrpc.EventUserStruct user_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserList()
    {
        return $this->user_list;
    }

    /**
     * Generated from protobuf field <code>repeated .senderGrpc.EventUserStruct user_list = 1;</code>
     * @param \SenderGrpc\EventUserStruct[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \SenderGrpc\EventUserStruct::class);
        $this->user_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string event = 2;</code>
     * @return string
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Generated from protobuf field <code>string event = 2;</code>
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
     * Generated from protobuf field <code>repeated .senderGrpc.EventVersionItem event_version_list = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEventVersionList()
    {
        return $this->event_version_list;
    }

    /**
     * Generated from protobuf field <code>repeated .senderGrpc.EventVersionItem event_version_list = 3;</code>
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
     * Generated from protobuf field <code>string push_data = 4;</code>
     * @return string
     */
    public function getPushData()
    {
        return $this->push_data;
    }

    /**
     * Generated from protobuf field <code>string push_data = 4;</code>
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
     * Generated from protobuf field <code>string ws_users = 5;</code>
     * @return string
     */
    public function getWsUsers()
    {
        return $this->ws_users;
    }

    /**
     * Generated from protobuf field <code>string ws_users = 5;</code>
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
     * Generated from protobuf field <code>string uuid = 6;</code>
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Generated from protobuf field <code>string uuid = 6;</code>
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
     * Generated from protobuf field <code>string routine_key = 7;</code>
     * @return string
     */
    public function getRoutineKey()
    {
        return $this->routine_key;
    }

    /**
     * Generated from protobuf field <code>string routine_key = 7;</code>
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
     * Generated from protobuf field <code>int64 company_id = 8;</code>
     * @return int|string
     */
    public function getCompanyId()
    {
        return $this->company_id;
    }

    /**
     * Generated from protobuf field <code>int64 company_id = 8;</code>
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

