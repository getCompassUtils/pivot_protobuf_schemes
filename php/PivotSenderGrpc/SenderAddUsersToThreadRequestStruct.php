<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_pivot_sender.proto

namespace PivotSenderGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * формат запроса для Sender.AddUsersToThread
 *
 * Generated from protobuf message <code>pivotSenderGrpc.SenderAddUsersToThreadRequestStruct</code>
 */
class SenderAddUsersToThreadRequestStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string thread_key = 1;</code>
     */
    protected $thread_key = '';
    /**
     * Generated from protobuf field <code>repeated int64 user_list = 2;</code>
     */
    private $user_list;
    /**
     * Generated from protobuf field <code>string routine_key = 3;</code>
     */
    protected $routine_key = '';
    /**
     * Generated from protobuf field <code>int64 company_id = 4;</code>
     */
    protected $company_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $thread_key
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $user_list
     *     @type string $routine_key
     *     @type int|string $company_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoPivotSender::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string thread_key = 1;</code>
     * @return string
     */
    public function getThreadKey()
    {
        return $this->thread_key;
    }

    /**
     * Generated from protobuf field <code>string thread_key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setThreadKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->thread_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int64 user_list = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserList()
    {
        return $this->user_list;
    }

    /**
     * Generated from protobuf field <code>repeated int64 user_list = 2;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->user_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string routine_key = 3;</code>
     * @return string
     */
    public function getRoutineKey()
    {
        return $this->routine_key;
    }

    /**
     * Generated from protobuf field <code>string routine_key = 3;</code>
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
     * Generated from protobuf field <code>int64 company_id = 4;</code>
     * @return int|string
     */
    public function getCompanyId()
    {
        return $this->company_id;
    }

    /**
     * Generated from protobuf field <code>int64 company_id = 4;</code>
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

