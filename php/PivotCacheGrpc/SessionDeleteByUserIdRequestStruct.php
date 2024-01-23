<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_pivot_cache.proto

namespace PivotCacheGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * формат запроса для session.deleteByUserId
 *
 * Generated from protobuf message <code>pivotCacheGrpc.SessionDeleteByUserIdRequestStruct</code>
 */
class SessionDeleteByUserIdRequestStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 user_id = 1;</code>
     */
    protected $user_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $user_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoPivotCache::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 user_id = 1;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>int64 user_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkInt64($var);
        $this->user_id = $var;

        return $this;
    }

}

