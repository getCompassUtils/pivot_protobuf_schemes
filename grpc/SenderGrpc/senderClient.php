<?php
// GENERATED CODE -- DO NOT EDIT!

namespace SenderGrpc;

/**
 * сервис, который описывает все метод go_sender
 */
class senderClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \SenderGrpc\SenderSetTokenRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSetToken(\SenderGrpc\SenderSetTokenRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSetToken',
        $argument,
        ['\SenderGrpc\SenderSetTokenResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderSendEventRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSendEvent(\SenderGrpc\SenderSendEventRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSendEvent',
        $argument,
        ['\SenderGrpc\SenderSendEventResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderSendEventToAllRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSendEventToAll(\SenderGrpc\SenderSendEventToAllRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSendEventToAll',
        $argument,
        ['\SenderGrpc\SenderSendEventToAllResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderGetOnlineConnectionsByUserIdRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderGetOnlineConnectionsByUserId(\SenderGrpc\SenderGetOnlineConnectionsByUserIdRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderGetOnlineConnectionsByUserId',
        $argument,
        ['\SenderGrpc\SenderGetOnlineConnectionsByUserIdResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderCloseConnectionsByUserIdRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderCloseConnectionsByUserId(\SenderGrpc\SenderCloseConnectionsByUserIdRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderCloseConnectionsByUserId',
        $argument,
        ['\SenderGrpc\SenderCloseConnectionsByUserIdResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderAddTaskPushNotificationRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderAddTaskPushNotification(\SenderGrpc\SenderAddTaskPushNotificationRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderAddTaskPushNotification',
        $argument,
        ['\SenderGrpc\SenderAddTaskPushNotificationResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderGetOnlineUsersRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderGetOnlineUsers(\SenderGrpc\SenderGetOnlineUsersRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderGetOnlineUsers',
        $argument,
        ['\SenderGrpc\SenderGetOnlineUsersResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderAddUsersToThreadRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderAddUsersToThread(\SenderGrpc\SenderAddUsersToThreadRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderAddUsersToThread',
        $argument,
        ['\SenderGrpc\SenderAddUsersToThreadResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderSendTypingEventRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSendTypingEvent(\SenderGrpc\SenderSendTypingEventRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSendTypingEvent',
        $argument,
        ['\SenderGrpc\SenderSendTypingEventResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderSendThreadTypingEventRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSendThreadTypingEvent(\SenderGrpc\SenderSendThreadTypingEventRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSendThreadTypingEvent',
        $argument,
        ['\SenderGrpc\SenderSendThreadTypingEventResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderSendVoIPRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSendVoIP(\SenderGrpc\SenderSendVoIPRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSendVoIP',
        $argument,
        ['\SenderGrpc\SenderSendVoIPResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderSendIncomingCallRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSendIncomingCall(\SenderGrpc\SenderSendIncomingCallRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSendIncomingCall',
        $argument,
        ['\SenderGrpc\SenderSendIncomingCallResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SystemStatusRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemStatus(\SenderGrpc\SystemStatusRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SystemStatus',
        $argument,
        ['\SenderGrpc\SystemStatusResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SystemTraceGoroutineRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemTraceGoroutine(\SenderGrpc\SystemTraceGoroutineRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SystemTraceGoroutine',
        $argument,
        ['\SenderGrpc\SystemTraceGoroutineResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SystemTraceMemoryRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemTraceMemory(\SenderGrpc\SystemTraceMemoryRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SystemTraceMemory',
        $argument,
        ['\SenderGrpc\SystemTraceMemoryResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SystemCpuProfileRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemCpuProfile(\SenderGrpc\SystemCpuProfileRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SystemCpuProfile',
        $argument,
        ['\SenderGrpc\SystemCpuProfileResponseStruct', 'decode'],
        $metadata, $options);
    }

}
