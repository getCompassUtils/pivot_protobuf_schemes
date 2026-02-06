<?php
// GENERATED CODE -- DO NOT EDIT!

namespace AuthGrpc;

/**
 * сервис, который описывает все grpc методы go_auth
 */
class authClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \AuthGrpc\ApiTokenAuthenticateRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \AuthGrpc\ApiTokenAuthenticateResponseStruct
     */
    public function ApikeyAuthenticate(\AuthGrpc\ApiTokenAuthenticateRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authGrpc.auth/ApikeyAuthenticate',
        $argument,
        ['\AuthGrpc\ApiTokenAuthenticateResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \AuthGrpc\ApikeyCreateRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \AuthGrpc\ApiKeyStruct
     */
    public function ApikeyCreate(\AuthGrpc\ApikeyCreateRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authGrpc.auth/ApikeyCreate',
        $argument,
        ['\AuthGrpc\ApiKeyStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \AuthGrpc\ApikeyGetRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \AuthGrpc\ApiKeyStruct
     */
    public function ApikeyGet(\AuthGrpc\ApikeyGetRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authGrpc.auth/ApikeyGet',
        $argument,
        ['\AuthGrpc\ApiKeyStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \AuthGrpc\ApikeyRefreshRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \AuthGrpc\ApiKeyStruct
     */
    public function ApikeyRefresh(\AuthGrpc\ApikeyRefreshRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authGrpc.auth/ApikeyRefresh',
        $argument,
        ['\AuthGrpc\ApiKeyStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \AuthGrpc\ApikeyEditRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \AuthGrpc\ApiKeyStruct
     */
    public function ApikeyEdit(\AuthGrpc\ApikeyEditRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authGrpc.auth/ApikeyEdit',
        $argument,
        ['\AuthGrpc\ApiKeyStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \AuthGrpc\ApikeyRemoveRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \AuthGrpc\ApikeyRemoveResponseStruct
     */
    public function ApikeyRemove(\AuthGrpc\ApikeyRemoveRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authGrpc.auth/ApikeyRemove',
        $argument,
        ['\AuthGrpc\ApikeyRemoveResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \AuthGrpc\ApikeyRemoveAllRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \AuthGrpc\ApikeyRemoveAllResponseStruct
     */
    public function ApikeyRemoveAll(\AuthGrpc\ApikeyRemoveAllRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authGrpc.auth/ApikeyRemoveAll',
        $argument,
        ['\AuthGrpc\ApikeyRemoveAllResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \AuthGrpc\ApikeyGetListRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \AuthGrpc\ApiKeyListStruct
     */
    public function ApikeyGetList(\AuthGrpc\ApikeyGetListRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authGrpc.auth/ApikeyGetList',
        $argument,
        ['\AuthGrpc\ApiKeyListStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \AuthGrpc\ApikeyGetTemplateListRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \AuthGrpc\ApiKeyTemplateListStruct
     */
    public function ApikeyGetTemplateList(\AuthGrpc\ApikeyGetTemplateListRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authGrpc.auth/ApikeyGetTemplateList',
        $argument,
        ['\AuthGrpc\ApiKeyTemplateListStruct', 'decode'],
        $metadata, $options);
    }

}
