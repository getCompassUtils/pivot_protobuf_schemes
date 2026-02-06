<?php
// GENERATED CODE -- DO NOT EDIT!

namespace DatabaseControllerGrpc;

/**
 * сервис, который описывает все метод go_company
 */
class databaseControllerClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \DatabaseControllerGrpc\GetStatusRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\GetStatusResponseStruct
     */
    public function GetStatus(\DatabaseControllerGrpc\GetStatusRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/GetStatus',
        $argument,
        ['\DatabaseControllerGrpc\GetStatusResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\GetCompanyPortRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\GetCompanyPortResponseStruct
     */
    public function GetCompanyPort(\DatabaseControllerGrpc\GetCompanyPortRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/GetCompanyPort',
        $argument,
        ['\DatabaseControllerGrpc\GetCompanyPortResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\BindOnServicePortRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\BindOnServicePortResponseStruct
     */
    public function BindOnServicePort(\DatabaseControllerGrpc\BindOnServicePortRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/BindOnServicePort',
        $argument,
        ['\DatabaseControllerGrpc\BindOnServicePortResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\BeginDataCopyingRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\BeginDataCopyingResponseStruct
     */
    public function BeginDataCopying(\DatabaseControllerGrpc\BeginDataCopyingRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/BeginDataCopying',
        $argument,
        ['\DatabaseControllerGrpc\BeginDataCopyingResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\BackupActiveCompanyRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\BackupActiveCompanyResponseStruct
     */
    public function BackupActiveCompany(\DatabaseControllerGrpc\BackupActiveCompanyRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/BackupActiveCompany',
        $argument,
        ['\DatabaseControllerGrpc\BackupActiveCompanyResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\BackupInactiveCompanyRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\BackupInactiveCompanyResponseStruct
     */
    public function BackupInactiveCompany(\DatabaseControllerGrpc\BackupInactiveCompanyRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/BackupInactiveCompany',
        $argument,
        ['\DatabaseControllerGrpc\BackupInactiveCompanyResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\UploadBackupToStorageRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\UploadBackupToStorageResponseStruct
     */
    public function UploadBackupToStorage(\DatabaseControllerGrpc\UploadBackupToStorageRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/UploadBackupToStorage',
        $argument,
        ['\DatabaseControllerGrpc\UploadBackupToStorageResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\BeginDataApplyingRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\BeginDataApplyingResponseStruct
     */
    public function BeginDataApplying(\DatabaseControllerGrpc\BeginDataApplyingRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/BeginDataApplying',
        $argument,
        ['\DatabaseControllerGrpc\BeginDataApplyingResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\GetRoutineStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\GetRoutineStatusResponse
     */
    public function GetRoutineStatus(\DatabaseControllerGrpc\GetRoutineStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/GetRoutineStatus',
        $argument,
        ['\DatabaseControllerGrpc\GetRoutineStatusResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\GenerateMysqlConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\GenerateMysqlConfigResponse
     */
    public function GenerateMysqlConfig(\DatabaseControllerGrpc\GenerateMysqlConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/GenerateMysqlConfig',
        $argument,
        ['\DatabaseControllerGrpc\GenerateMysqlConfigResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\BindPortRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\BindPortResponseStruct
     */
    public function BindPort(\DatabaseControllerGrpc\BindPortRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/BindPort',
        $argument,
        ['\DatabaseControllerGrpc\BindPortResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\UnbindPortRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\NullResponseStruct
     */
    public function UnbindPort(\DatabaseControllerGrpc\UnbindPortRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/UnbindPort',
        $argument,
        ['\DatabaseControllerGrpc\NullResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\AddPortRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\NullResponseStruct
     */
    public function AddPort(\DatabaseControllerGrpc\AddPortRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/AddPort',
        $argument,
        ['\DatabaseControllerGrpc\NullResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\CreateMysqlBackupRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\CreateMysqlBackupResponseStruct
     */
    public function CreateMysqlBackup(\DatabaseControllerGrpc\CreateMysqlBackupRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/CreateMysqlBackup',
        $argument,
        ['\DatabaseControllerGrpc\CreateMysqlBackupResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\SetPortInvalidRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\NullResponseStruct
     */
    public function SetPortInvalid(\DatabaseControllerGrpc\SetPortInvalidRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/SetPortInvalid',
        $argument,
        ['\DatabaseControllerGrpc\NullResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\SyncPortStatusRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\NullResponseStruct
     */
    public function SyncPortStatus(\DatabaseControllerGrpc\SyncPortStatusRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/SyncPortStatus',
        $argument,
        ['\DatabaseControllerGrpc\NullResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\ResetPortRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\NullResponseStruct
     */
    public function ResetPort(\DatabaseControllerGrpc\ResetPortRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/ResetPort',
        $argument,
        ['\DatabaseControllerGrpc\NullResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\MigrateRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\MigrateResponseStruct
     */
    public function MigrateUp(\DatabaseControllerGrpc\MigrateRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/MigrateUp',
        $argument,
        ['\DatabaseControllerGrpc\MigrateResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\MigrateRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\MigrateResponseStruct
     */
    public function MigrateLegacyClean(\DatabaseControllerGrpc\MigrateRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/MigrateLegacyClean',
        $argument,
        ['\DatabaseControllerGrpc\MigrateResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\PrepareCompanyDataDirRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\NullResponseStruct
     */
    public function PrepareCompanyDataDir(\DatabaseControllerGrpc\PrepareCompanyDataDirRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/PrepareCompanyDataDir',
        $argument,
        ['\DatabaseControllerGrpc\NullResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\InitSearchRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\NullResponseStruct
     */
    public function InitSearch(\DatabaseControllerGrpc\InitSearchRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/InitSearch',
        $argument,
        ['\DatabaseControllerGrpc\NullResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\DropSearchTableRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\NullResponseStruct
     */
    public function DropSearchTable(\DatabaseControllerGrpc\DropSearchTableRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/DropSearchTable',
        $argument,
        ['\DatabaseControllerGrpc\NullResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \DatabaseControllerGrpc\NullRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \DatabaseControllerGrpc\NullResponseStruct
     */
    public function UpdateDeployment(\DatabaseControllerGrpc\NullRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/databaseControllerGrpc.databaseController/UpdateDeployment',
        $argument,
        ['\DatabaseControllerGrpc\NullResponseStruct', 'decode'],
        $metadata, $options);
    }

}
