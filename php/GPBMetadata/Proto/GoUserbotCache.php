<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_userbot_cache.proto

namespace GPBMetadata\Proto;

class GoUserbotCache
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
proto/go_userbot_cache.protouserbotCacheGrpc"+
UserbotGetOneRequestStruct
token (	"�
UserbotGetOneResponseStruct

userbot_id (	
token (	
status (
company_url (	

secret_key (	
is_react_command (
userbot_user_id (
extra (	

company_id	 (
domino_entrypoint
 (	"*
UserbotClearRequestStruct
token (	"
UserbotClearResponseStruct2�
userbotCachen
UserbotGetOne,.userbotCacheGrpc.UserbotGetOneRequestStruct-.userbotCacheGrpc.UserbotGetOneResponseStruct" k
UserbotClear+.userbotCacheGrpc.UserbotClearRequestStruct,.userbotCacheGrpc.UserbotClearResponseStruct" BZuserbot_cache/bproto3'
        , true);

        static::$is_initialized = true;
    }
}

