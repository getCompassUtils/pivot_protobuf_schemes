<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_activity.proto

namespace ActivityGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * формат запроса для user.getActivityList
 *
 * Generated from protobuf message <code>activityGrpc.UserGetActivityListRequestStruct</code>
 */
class UserGetActivityListRequestStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>map<string, int64> user_id_list = 1;</code>
     */
    private $user_id_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $user_id_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoActivity::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>map<string, int64> user_id_list = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getUserIdList()
    {
        return $this->user_id_list;
    }

    /**
     * Generated from protobuf field <code>map<string, int64> user_id_list = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setUserIdList($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::INT64);
        $this->user_id_list = $arr;

        return $this;
    }

}

