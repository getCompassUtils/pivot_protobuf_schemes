<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_database_controller.proto

namespace GPBMetadata\Proto;

class GoDatabaseController
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�&
"proto/go_database_controller.protodatabaseControllerGrpc"
NullRequestStruct"
NullResponseStruct"4
GetStatusRequestStruct
port (
host (	":
GetStatusResponseStruct
status (	
message (	"1
GetCompanyPortRequestStruct

company_id ("b
GetCompanyPortResponseStruct
port (
host (	

mysql_user (	

mysql_pass (	"4
BindOnServicePortRequestStruct

company_id ("e
BindOnServicePortResponseStruct
port (
host (	

mysql_user (	

mysql_pass (	"H
BeginDataCopyingRequestStruct

company_id (
target_host (	"x
BeginDataCopyingResponseStruct
routine_key (	A
routine (20.databaseControllerGrpc.GetRoutineStatusResponse"4
BeginDataApplyingRequestStruct

company_id ("y
BeginDataApplyingResponseStruct
routine_key (	A
routine (20.databaseControllerGrpc.GetRoutineStatusResponse".
GetRoutineStatusRequest
routine_key (	"H
GetRoutineStatusResponse
status (
message (	
log (	"
GenerateMysqlConfigRequest"
GenerateMysqlConfigResponse"�
BindPortRequestStruct
port (
host (	

company_id (!
duplicate_data_dir_policy ($
non_existing_data_dir_policy ("p
BindPortResponseStruct
routine_key (	A
routine (20.databaseControllerGrpc.GetRoutineStatusResponse"5
UnbindPortRequestStruct
port (
host (	"�
AddPortRequestStruct
port (
host (	
status (
type (
locked_till (

created_at (

updated_at (

company_id (
extra	 (	
locked_by_company_id
 ("3
CreateMysqlBackupRequestStruct
	companyId ("�
CreateMysqlBackupResponseStruct
backup_name (	
routine_key (	A
routine (20.databaseControllerGrpc.GetRoutineStatusResponse"*
MigrateRequestStruct

company_id ("o
MigrateResponseStruct
routine_key (	A
routine (20.databaseControllerGrpc.GetRoutineStatusResponse"9
SetPortInvalidRequestStruct
port (
host (	"�
SyncPortStatusRequestStruct
port (
host (	
status (
locked_till (

company_id (
locked_by_company_id ("?
SyncPortStatusResponseStruct
status (
message (	"4
ResetPortRequestStruct
port (
host (	"[
"PrepareCompanyDataDirRequestStruct

company_id (!
duplicate_data_dir_policy ("+
InitSearchRequestStruct
space_id ("0
DropSearchTableRequestStruct
space_id (2�
databaseControllern
	GetStatus..databaseControllerGrpc.GetStatusRequestStruct/.databaseControllerGrpc.GetStatusResponseStruct" }
GetCompanyPort3.databaseControllerGrpc.GetCompanyPortRequestStruct4.databaseControllerGrpc.GetCompanyPortResponseStruct" �
BindOnServicePort6.databaseControllerGrpc.BindOnServicePortRequestStruct7.databaseControllerGrpc.BindOnServicePortResponseStruct" �
BeginDataCopying5.databaseControllerGrpc.BeginDataCopyingRequestStruct6.databaseControllerGrpc.BeginDataCopyingResponseStruct" �
BeginDataApplying6.databaseControllerGrpc.BeginDataApplyingRequestStruct7.databaseControllerGrpc.BeginDataApplyingResponseStruct" w
GetRoutineStatus/.databaseControllerGrpc.GetRoutineStatusRequest0.databaseControllerGrpc.GetRoutineStatusResponse" �
GenerateMysqlConfig2.databaseControllerGrpc.GenerateMysqlConfigRequest3.databaseControllerGrpc.GenerateMysqlConfigResponse" k
BindPort-.databaseControllerGrpc.BindPortRequestStruct..databaseControllerGrpc.BindPortResponseStruct" k

UnbindPort/.databaseControllerGrpc.UnbindPortRequestStruct*.databaseControllerGrpc.NullResponseStruct" e
AddPort,.databaseControllerGrpc.AddPortRequestStruct*.databaseControllerGrpc.NullResponseStruct" �
CreateMysqlBackup6.databaseControllerGrpc.CreateMysqlBackupRequestStruct7.databaseControllerGrpc.CreateMysqlBackupResponseStruct" s
SetPortInvalid3.databaseControllerGrpc.SetPortInvalidRequestStruct*.databaseControllerGrpc.NullResponseStruct" s
SyncPortStatus3.databaseControllerGrpc.SyncPortStatusRequestStruct*.databaseControllerGrpc.NullResponseStruct" i
	ResetPort..databaseControllerGrpc.ResetPortRequestStruct*.databaseControllerGrpc.NullResponseStruct" j
	MigrateUp,.databaseControllerGrpc.MigrateRequestStruct-.databaseControllerGrpc.MigrateResponseStruct" s
MigrateLegacyClean,.databaseControllerGrpc.MigrateRequestStruct-.databaseControllerGrpc.MigrateResponseStruct" �
PrepareCompanyDataDir:.databaseControllerGrpc.PrepareCompanyDataDirRequestStruct*.databaseControllerGrpc.NullResponseStruct" k

InitSearch/.databaseControllerGrpc.InitSearchRequestStruct*.databaseControllerGrpc.NullResponseStruct" u
DropSearchTable4.databaseControllerGrpc.DropSearchTableRequestStruct*.databaseControllerGrpc.NullResponseStruct" k
UpdateDeployment).databaseControllerGrpc.NullRequestStruct*.databaseControllerGrpc.NullResponseStruct" BZ/database_controllerbproto3'
        , true);

        static::$is_initialized = true;
    }
}

