<?php

/**
 * Proxy classes for Mediasite External Data Access Service (Edas)
 * These proxy classes were generated based on the Mediasite 6.0 EDAS WSDL definition.
 *
 * PHP Version 5.3
 *
 * @copyright Copyright (c) 2012, Sonic Foundry
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version 6.0.2
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 * @subpackage Requests
 * @author Cori Schlegel <coris@sonicfoundry.com>
 *
 * This software is provided "AS IS" without a warranty of any kind.
 *
 */
/**
 * Require the other files that contain requisite class definitions
 */
require_once __DIR__ . '/edasproxy_containers.php';
require_once __DIR__ . '/edasproxy_enumerations.php';
require_once __DIR__ . '/edasproxy_containers.php';
require_once __DIR__ . '/edasproxy_responses.php';

/**
 * Base class for requests
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 * @subpackage Requests
 */
abstract class RequestMessage {

    /**
     * @var string $Ticket
     */
    public $Ticket;

    /**
     * @var string $ImpersonationUsername
     */
    public $ImpersonationUsername;

    /**
     *
     * @param string $Ticket
     * @param string $ImpersonationUsername
     */
    function __construct( $Ticket, $ImpersonationUsername = null ) {

        $this->Ticket = $Ticket;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct EncodingStreamDescription
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class EncodingStreamDescription {

    /**
     * @var string $Description
     */
    public $Description;

    /**
     * @var int $DeviceClass
     */
    public $DeviceClass;

    /**
     * @var int $Number
     */
    public $Number;

    /**
     * @var EncodingStreamType $StreamType
     */
    public $StreamType;

    /**
     *
     * @param string $Description
     * @param string $DeviceClass
     * @param string $Number
     * @param string $StreamType
     */
    function __construct( $Description, $DeviceClass, $Number, $StreamType ) {
        $this->Description = $Description;
        $this->DeviceClass = $DeviceClass;
        $this->Number = $Number;
        $this->StreamType = $StreamType;
    }

}

/**
 * Proxy class for struct EncodingSettingsFilter
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class EncodingSettingsFilter {

    /**
     * @var FilterType $FilterType
     */
    public $FilterType;

    /**
     * @var string $FilterValue
     */
    public $FilterValue;

    /**
     *
     * @param FilterType $FilterType
     * @param string $FilterValue
     */
    function __construct( $FilterType, $FilterValue ) {
        $this->FilterType = $FilterType;
        $this->FilterValue = $FilterValue;
    }

}

/**
 * Proxy class for struct CreateRoleRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreateRoleRequest extends RequestMessage {

    /**
     * @var CreateRoleDetails $RoleDetails
     */
    public $RoleDetails;

    /**
     *
     * @param string $Ticket
     * @param CreateRoleDetails $RoleDetails
     */
    function __construct( $Ticket, $RoleDetails, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->RoleDetails = $RoleDetails;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct CreateRoleDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreateRoleDetails {

    /**
     * @var string $Description
     */
    public $Description;

    /**
     * @var string $DirectoryEntry
     */
    public $DirectoryEntry;

    /**
     * @var string $Name
     */
    public $Name;

    /**
     *
     * @param string $DirectoryEntry
     * @param string $Name
     * @param string $Description
     */
    function __construct( $DirectoryEntry, $Name, $Description = null ) {
        $this->Description = $Description;
        $this->DirectoryEntry = $DirectoryEntry;
        $this->Name = $Name;
    }

}

/**
 * Proxy class for struct UpdateRoleRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class UpdateRoleRequest extends RequestMessage {

    /**
     * @var UpdateRoleDetails $RoleDetails
     */
    public $RoleDetails;

    /**
     *
     * @param string $Ticket
     * @param UpdateRoleDetails $RoleDetails
     * @param string $ImpersonationUsername
     */
    function __construct( $Ticket, $RoleDetails, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->RoleDetails = $RoleDetails;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct UpdateRoleDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class UpdateRoleDetails {

    /**
     * @var string $Id
     */
    public $Id;

    /**
     * @var string $Description
     */
    public $Description;

    /**
     * @var boolean $DescriptionIsSet
     */
    public $DescriptionIsSet;

    /**
     * @var string $DirectoryEntry
     */
    public $DirectoryEntry;

    /**
     * @var boolean $DirectoryEntryIsSet
     */
    public $DirectoryEntryIsSet;

    /**
     * @var string $Name
     */
    public $Name;

    /**
     * @var boolean $NameIsSet
     */
    public $NameIsSet;

    /**
     * BUild details for a role update
     *
     * @param string $Id
     * @param string $Description
     * @param bool $DescriptionIsSet if set to false or not set, $Description will be ignored
     * @param string $DirectoryEntry
     * @param bool $DirectoryEntryIsSet if set to false or not set, $DirectoryEntry will be ignored
     * @param string $Name
     * @param bool $NameIsSet if set to false or not set, $Name will be ignored
     */
    function __construct( $Id, $Description = null, $DescriptionIsSet = false, $DirectoryEntry = null,
            $DirectoryEntryIsSet = false, $Name = null, $NameIsSet = false ) {
        $this->Id = $Id;
        $this->Description = $Description;
        $this->DescriptionIsSet = $DescriptionIsSet;
        $this->DirectoryEntry = $DirectoryEntry;
        $this->DirectoryEntryIsSet = $DirectoryEntryIsSet;
        $this->Name = $Name;
        $this->NameIsSet = $NameIsSet;
    }

}

/**
 * Proxy class for struct QueryTotalViewsRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryTotalViewsRequest extends RequestMessage {

    /**
     * @var array $IdList of string
     */
    public $IdList;

    /**
     * @var QueryOptions $Options
     */
    public $Options;

    /**
     * @var AnalyticsRequestType $RequestType
     */
    public $RequestType;

    /**
     *
     * @param string $Ticket
     * @param array $IdList of strings
     * @param AnalyticsRequestType $RequestType
     * @param QueryOptions $Options
     * @param string $ImpersonationUsername
     */
    function __construct( $Ticket, $IdList, $RequestType, $Options = null, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->IdList = $IdList;
        $this->RequestType = $RequestType;
        $this->Options = $Options;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QueryOptions
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryOptions {

    /**
     * @var int $BatchSize
     */
    public $BatchSize;

    /**
     * @var string $QueryId
     */
    public $QueryId;

    /**
     * @var int $StartIndex
     */
    public $StartIndex;

    /**
     *
     * @param int $BatchSize
     * @param string $QueryId
     * @param int $StartIndex
     */
    function __construct( $BatchSize, $QueryId, $StartIndex ) {

        $this->BatchSize = $BatchSize;
        $this->QueryId = $QueryId;
        $this->StartIndex = $StartIndex;
    }

}

/**
 * Proxy class for struct QueryAnalyticsByIdRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryAnalyticsByIdRequest extends RequestMessage {

    /**
     * @var string $Id
     */
    public $Id;

    /**
     * @var QueryOptions $Options
     */
    public $Options;

    /**
     * @var AnalyticsRequestType $RequestType
     */
    public $RequestType;

    /**
     *
     * @param string $Ticket
     * @param string $Id
     * @param AnalyticsRequestType $RequestType
     * @param QueryOptions $Options
     * @param string $ImpersonationUsername
     */
    function __construct( $Ticket, $Id, $RequestType, $Options = null, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->Id = $Id;
        $this->RequestType = $RequestType;
        $this->Options = $Options;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QueryTotalViewsByIdRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryTotalViewsByIdRequest extends QueryAnalyticsByIdRequest {

    /**
     * @var AnalyticsRequestType $ChildType
     */
    public $ChildType;

    /**
     *
     * @param string $Ticket
     * @param string $Id
     * @param string  $RequestType {@link AnalyticsRequestType}
     * @param $ChildType {@link AnalyticsRequestType}
     * @param QueryOptions $Options,
     * @param string $ImpersonationUsername
     */
    function __construct( $Ticket, $Id, $RequestType, $ChildType, QueryOptions $Options = null, $ImpersonationUsername ) {
        $this->Ticket = $Ticket;
        $this->RequestType = $RequestType;
        $this->ChildType = $ChildType;
        $this->Id = $Id;
        $this->Options = $Options;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QueryPresentationUsageRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryPresentationUsageRequest extends RequestMessage {

    /**
     * @var array $ClientIdList of string
     */
    public $ClientIdList;

    /**
     * @var AnalyticsRequestType $ClientType
     */
    public $ClientType;

    /**
     * @var QueryOptions $Options
     */
    public $Options;

    /**
     * @var string $PresentationId
     */
    public $PresentationId;

    /**
     *
     * @param array $ClientIdList array of string ids
     * @param AnalyticsRequestType $ClientType
     * @param string $PresentationId
     * @param QueryOptions $Options
     */
    function __construct( $Ticket, $ClientIdList, $ClientType, $PresentationId, $Options = null,
            $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->ClientIdList = $ClientIdList;
        $this->ClientType = $ClientType;
        $this->Options = $Options;
        $this->PresentationId = $PresentationId;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QueryServerUsageRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryServerUsageRequest extends RequestMessage {

}

/**
 * Proxy class for struct QueryActiveConnectionsRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryActiveConnectionsRequest extends RequestMessage {

}

/**
 * Proxy class for struct QueryActivePresentationsRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryActivePresentationsRequest extends RequestMessage {

    /**
     * @var QueryOptions $Options
     */
    public $Options;

    /**
     * @var array $PresentationIdList of string
     */
    public $PresentationIdList;

    /**
     *
     * @param array $PresentationIdList array of string ids
     * @param QueryOptions $Options
     */
    function __construct( $Ticket, $PresentationIdList, $Options, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->PresentationIdList = $PresentationIdList;
        $this->Options = $Options;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QueryActivePresentationConnectionsRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryActivePresentationConnectionsRequest extends RequestMessage {

    /**
     * @var QueryOptions $Options
     */
    public $Options;

    /**
     * @var string $PresentationId
     */
    public $PresentationId;

    /**
     *
     * @param string $Ticket
     * @param string $PresentationId
     * @param QueryOptions $Options
     * @param string $ImpersonationUsername
     */
    function __construct( $Ticket, $PresentationId, $Options = null, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->PresentationId = $PresentationId;
        $this->Options = $Options;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct CreateAuthTicketRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreateAuthTicketRequest extends RequestMessage {

    /**
     * @var CreateAuthTicketSettings $TicketSettings
     */
    public $TicketSettings;

    /**
     *
     * @param CreateAuthTicketSettings $TicketSettings
     */
    function __construct( $Ticket, $TicketSettings ) {
        $this->Ticket = $Ticket;
        $this->TicketSettings = $TicketSettings;
    }

}

/**
 * Proxy class for struct CreateAuthTicketSettings
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreateAuthTicketSettings {

    /**
     * @var string $ClientIpAddress
     */
    public $ClientIpAddress;

    /**
     * @var int $MinutesToLive
     */
    public $MinutesToLive;

    /**
     * @var string $ResourceId
     */
    public $ResourceId;

    /**
     * @var string $Username
     */
    public $Username;

    /**
     *
     * @param string $ClientIpAddress
     * @param int $MinutesToLive
     * @param string $ResourceId
     * @param string $Username
     */
    function __construct( $ClientIpAddress, $MinutesToLive, $ResourceId, $Username ) {
        $this->ClientIpAddress = $ClientIpAddress;
        $this->MinutesToLive = $MinutesToLive;
        $this->ResourceId = $ResourceId;
        $this->Username = $Username;
    }

}

/**
 * Proxy class for struct CreateSubFolderRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreateSubFolderRequest extends RequestMessage {

    /**
     * @var string $Description
     */
    public $Description;

    /**
     * @var string $Id
     */
    public $Id;

    /**
     * @var string $Name
     */
    public $Name;

    /**
     * @var string $ParentFolderId
     */
    public $ParentFolderId;

    /**
     * @var array $PermissionList array of {@link ResourcePermissionEntry}
     */
    public $PermissionList;

    /**
     *
     * @param string $Ticket
     * @param string $Name
     * @param array $PermissionList array of {@link ResourcePermissionEntry}
     * @param string $Description
     * @param string $ParentFolderId
     * @param string $Id
     * @param string $ImpersonationUsername
     */
    function __construct( $Ticket, $Name, $PermissionList, $Description = null, $ParentFolderId = null,
            $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->Description = $Description;
        $this->Name = $Name;
        $this->ParentFolderId = $ParentFolderId;
        $this->PermissionList = $PermissionList;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct ResourcePermissionEntry
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class ResourcePermissionEntry {

    /**
     * @var array $PermissionMask of {@link ResourcePermissionMask}
     */
    public $PermissionMask;

    /**
     * @var string $RoleId
     */
    public $RoleId;

    /**
     *
     * @param array $PermissionMask array of {@link ResourcePermissionMask} values or single ResourcePermissionMask value
     * @param string $RoleId Must be in MediasiteId format - full GUID including hyphens
     */
    function __construct( $PermissionMask, $RoleId ) {
        $this->PermissionMask = $PermissionMask;
        $this->RoleId = $RoleId;
    }

}

/**
 * Proxy class for struct CreateIdentityTicketRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreateIdentityTicketRequest extends RequestMessage {

    /**
     * @var CreateIdentityTicketSettings $Settings
     */
    public $Settings;

    /**
     *
     * @param string $Ticket
     * @param CreateIdentityTicketSettings $Settings
     */
    function __construct( $Ticket, $Settings, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->Settings = $Settings;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct CreateIdentityTicketSettings
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreateIdentityTicketSettings {

    /**
     * @var string $ClientIpAddress
     */
    public $ClientIpAddress;

    /**
     * @var int $MinutesToLive
     */
    public $MinutesToLive;

    /**
     * @var string $Username
     */
    public $Username;

    /**
     *
     * @param string $ClientIpAddress
     * @param int $MinutesToLive
     * @param string $Username
     */
    function __construct( $ClientIpAddress, $MinutesToLive, $Username ) {
        $this->ClientIpAddress = $ClientIpAddress;
        $this->MinutesToLive = $MinutesToLive;
        $this->Username = $Username;
    }

}

/**
 * Proxy class for struct CreatePresentationFromTemplateRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreatePresentationFromTemplateRequest extends RequestMessage {

    /**
     * @var CreatePresentationFromTemplateDetails $CreationDetails
     */
    public $CreationDetails;

    /**
     *
     * @param string $Ticket
     * @param CreatePresentationFromTemplateDetails $CreationDetails
     */
    function __construct( $Ticket, $CreationDetails, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->CreationDetails = $CreationDetails;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct CreatePresentationFromTemplateDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreatePresentationFromTemplateDetails extends BaseCreatePresentationFromTemplateDetails {

    /**
     * @var string $PresentationTemplateId
     */
    public $PresentationTemplateId;

    /**
     *
     * @param string $PresentationTemplateId Template to use for new Presentation
     * @param string $Title Title of created Presentation
     * @param string $RecordDateTime date-time formatted string for record date. If not provided defaults to today
     * @param PresentationDataStatusDetails $DataStatus Status for created Presentation defaults to {@link PresentationDataStatusDetails::Scheduled}
     * @param string $CdnPublishingPoint
     * @param string $Description
     * @param int $Duration Created Presentation's duration. Defaults to 0
     * @param string $FolderId Folder to create new Presentation in. If not provided Presentation will be created in the root folder
     * @param type $MaxConnections Max Connections allowed for new Presentation. Defaults to -1 (unlimited)
     * @param string $ModeratorEmail
     * @param string $PresentationId
     */
    function __construct( $PresentationTemplateId, $Title, $RecordDateTime = null,
            $DataStatus = PresentationDataStatusDetails::Scheduled, $CdnPublishingPoint = null, $Description = null,
            $Duration = 0, $FolderId = null, $MaxConnections = -1, $ModeratorEmail = null, $PresentationId = null ) {
        $this->PresentationTemplateId = $PresentationTemplateId;
        $this->RecordDateTime = isset($RecordDateTime) ? $RecordDateTime : date('Y-m-d');
        $this->Title = $Title;
        $this->DataStatus = $DataStatus;
        $this->CdnPublishingPoint = $CdnPublishingPoint;
        $this->Description = $Description;
        $this->Duration = $Duration;
        $this->FolderId = $FolderId;
        $this->MaxConnections = $MaxConnections;
        $this->ModeratorEmail = $ModeratorEmail;
        $this->PresentationId = $PresentationId;
    }

}

/**
 * Proxy class for struct BaseCreatePresentationFromTemplateDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class BaseCreatePresentationFromTemplateDetails {

    /**
     * @var string $CdnPublishingPoint
     */
    public $CdnPublishingPoint;

    /**
     * @var PresentationDataStatusDetails $DataStatus
     */
    public $DataStatus;

    /**
     * @var string $Description
     */
    public $Description;

    /**
     * @var int $Duration
     */
    public $Duration;

    /**
     * @var string $FolderId
     */
    public $FolderId;

    /**
     * @var int $MaxConnections
     */
    public $MaxConnections;

    /**
     * @var string $ModeratorEmail
     */
    public $ModeratorEmail;

    /**
     * @var string $PresentationId
     */
    public $PresentationId;

    /**
     * @var string $RecordDateTime date-time formatted string
     */
    public $RecordDateTime;

    /**
     * @var string $Title
     */
    public $Title;

    /**
     * @var array $Presenters of {@link CreatePresenterDetails}
     */
    public $Presenters;

    /**
     *@var string $PlayerId
     */

    /**
     *
     * @param string $Title Title of created Presentation
     * @param string $RecordDateTime date-time formatted string for record date. If not provided defaults to today
     * @param PresentationDataStatusDetails $DataStatus Status for created Presentation defaults to {@link PresentationDataStatusDetails::Scheduled}
     * @param string $CdnPublishingPoint
     * @param string $Description
     * @param int $Duration Created Presentation's duration. Defaults to 0
     * @param string $FolderId Folder to create new Presentation in. If not provided Presentation will be created in the root folder
     * @param type $MaxConnections Max Connections allowed for new Presentation. Defaults to -1 (unlimited)
     * @param string $ModeratorEmail
     * @param string $PresentationId
     * @param array $Presenters Presenters to override Schedule/Template resenter list with
     * @param string $PlayerId Player Id to overrider Schedule/Template Player with
     */
    function __construct( $Title, $RecordDateTime = null, $DataStatus = PresentationDataStatusDetails::Scheduled,
            $CdnPublishingPoint = null, $Description = null, $Duration = 0, $FolderId = null, $MaxConnections = -1,
            $ModeratorEmail = null, $PresentationId = null, $Presenters = null, $PlayerId = null ) {
        $this->CdnPublishingPoint = $CdnPublishingPoint;
        $this->DataStatus = $DataStatus;
        $this->Description = $Description;
        $this->Duration = $Duration;
        $this->FolderId = $FolderId;
        $this->MaxConnections = $MaxConnections;
        $this->ModeratorEmail = $ModeratorEmail;
        $this->PresentationId = $PresentationId;
        $this->RecordDateTime = isset($RecordDateTime) ? $RecordDateTime : date('Y-m-d');
        $this->Title = $Title;
        $this->Presenters = $Presenters;
        $this->PlayerId = $PlayerId;
    }

}

/**
 * Proxy class for struct CreatePresentationFromScheduleRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreatePresentationFromScheduleRequest extends RequestMessage {

    /**
     * @var CreatePresentationFromScheduleDetails $CreationDetails
     */
    public $CreationDetails;

    /**
     *
     * @param string $Ticket
     * @param CreatePresentationFromScheduleDetails $CreationDetails
     */
    function __construct( $Ticket, $CreationDetails, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->CreationDetails = $CreationDetails;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct CreatePresentationFromScheduleDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreatePresentationFromScheduleDetails extends BaseCreatePresentationFromTemplateDetails {

    /**
     * @var int $RecurrenceId
     */
    public $RecurrenceId;

    /**
     * @var string $ScheduleId
     */
    public $ScheduleId;

    /**
     *
     * @param string $ScheduleId
     * @param string $Title Title of created Presentation
     * @param int $RecurrenceId this value must exist in the database - use QuerySchedulesByCriteria to obtain a valid value
     * @param string $RecordDateTime date-time formatted string for record date. If not provided defaults to today
     * @param PresentationDataStatusDetails $DataStatus Status for created Presentation defaults to {@link PresentationDataStatusDetails::Scheduled}
     * @param string $CdnPublishingPoint
     * @param string $Description
     * @param int $Duration Created Presentation's duration. Defaults to 0
     * @param string $FolderId Folder to create new Presentation in. If not provided Presentation will be created in the root folder
     * @param type $MaxConnections Max Connections allowed for new Presentation. Defaults to -1 (unlimited)
     * @param string $ModeratorEmail
     * @param string $PresentationId
     */
    function __construct( $ScheduleId, $Title, $RecurrenceId, $RecordDateTime = null,
            $DataStatus = PresentationDataStatusDetails::Scheduled, $CdnPublishingPoint = null, $Description = null,
            $Duration = 0, $FolderId = null, $MaxConnections = -1, $ModeratorEmail = null, $PresentationId = null ) {
        $this->RecurrenceId = $RecurrenceId;
        $this->ScheduleId = $ScheduleId;
        $this->CdnPublishingPoint = $CdnPublishingPoint;
        $this->DataStatus = $DataStatus;
        $this->Description = $Description;
        $this->Duration = $Duration;
        $this->FolderId = $FolderId;
        $this->MaxConnections = $MaxConnections;
        $this->ModeratorEmail = $ModeratorEmail;
        $this->PresentationId = $PresentationId;
        $this->RecordDateTime = isset($RecordDateTime) ? $RecordDateTime : date('Y-m-d');
        $this->Title = $Title;
    }

}

/**
 * Proxy class for struct CreatePresentationLikeRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreatePresentationLikeRequest extends RequestMessage {

    /**
     * @var CreatePresentationLikeDetails $CreationDetails
     */
    public $CreationDetails;

    /**
     *
     * @param string $Ticket
     * @param CreatePresentationLikeDetails $CreationDetails
     */
    function __construct( $Ticket, $CreationDetails, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->CreationDetails = $CreationDetails;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct CreatePresentationLikeDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreatePresentationLikeDetails {

    /**
     * @var string $CreateLikePresentationId
     */
    public $CreateLikePresentationId;

    /**
     * @var string $Description
     */
    public $Description;

    /**
     * @var int $Duration
     */
    public $Duration;

    /**
     * @var string $RecordDateTime date-time formatted string
     */
    public $RecordDateTime;

    /**
     * @var int $TimeZoneId
     */
    public $TimeZoneId;

    /**
     * @var string $Title
     */
    public $Title;

    /**
     *
     * @param string $CreateLikePresentationId
     * @param string $Title
     * @param string $Description
     * @param int $Duration
     * @param string $RecordDateTime date-time formatted string
     * @param int $TimeZoneId
     */
    function __construct( $CreateLikePresentationId, $Title, $Description = null, $Duration = 0, $RecordDateTime = null,
            $TimeZoneId = -1 ) {
        $this->CreateLikePresentationId = $CreateLikePresentationId;
        $this->Description = $Description;
        $this->Duration = $Duration;
        $this->RecordDateTime = isset($RecordDateTime) ? $RecordDateTime : date('Y-m-d');
        $this->TimeZoneId = $TimeZoneId;
        $this->Title = $Title;
    }

}

/**
 * Proxy class for struct CreatePresentationPollRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreatePresentationPollRequest extends RequestMessage {

    /**
     * @var CreatePresentationPollDetails $CreateDetails
     */
    public $CreateDetails;

    /**
     *
     * @param string $Ticket
     * @param CreatePresentationPollDetails $CreateDetails
     */
    function __construct( $Ticket, $CreateDetails, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->CreateDetails = $CreateDetails;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct CreatePresentationPollDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreatePresentationPollDetails {

    /**
     * @var int $Id ID of the poll
     */
    public $Id;

    /**
     * @var array $PollQuestions of {@link PollQuestionDetails}
     */
    public $PollQuestions;

    /**
     * @var string $PresentationRootId Mediasite ID of the presentation this poll is for
     */
    public $PresentationRootId;

    /**
     *
     * @param int $Id
     * @param array $PollQuestions of {@link PollQuestionDetails}
     * @param string $PresentationRootId
     */
    function __construct( $PollQuestions, $PresentationRootId, $Id = 0 ) {
        $this->Id = $Id;
        $this->PollQuestions = $PollQuestions;
        $this->PresentationRootId = $PresentationRootId;
    }

}

/**
 * Proxy class for struct PollQuestionDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class PollQuestionDetails {

    /**
     * @var array $Answers of {@link PollAnswerDetails} possible answers for the poll
     */
    public $Answers;

    /**
     * @var int $Id ID of the Poll Question among the questions for this poll
     */
    public $Id;

    /**
     * @var int $Options
     */
    public $Options;

    /**
     * @var int $Order order of the question in the poll
     */
    public $Order;

    /**
     * @var string $PresentationPollId ID of the poll
     */
    public $PresentationPollId;

    /**
     * @var string $QuestionText text of the question
     */
    public $QuestionText;

    /**
     * @var int $TotalRespondents
     */
    public $TotalRespondents;

    /**
     *
     * @param array $Answers of {@link PollAnswerDetails}
     * @param int $Id unused
     * @param string $PresentationPollId
     * @param string $QuestionText
     * @param int $Order
     * @param int $Options Bitmask of the following options
     *     None                         = 0,
     *     Result link disabled         = 1,
     *     Multiple Choice              = 2,
     *     Anonymous                    = 4,
     *     Allow multiple submiossions  = 8
     * @param int $TotalRespondents unused
     */
    function __construct( $Answers, $PresentationPollId, $QuestionText, $Order = 0, $Options = 0,
            $TotalRespondents = 0, $Id = 0 ) {
        $this->Answers = $Answers;
        $this->Id = $Id;
        $this->Options = $Options;
        $this->Order = $Order;
        $this->PresentationPollId = $PresentationPollId;
        $this->QuestionText = $QuestionText;
        $this->TotalRespondents = $TotalRespondents;
    }

}

/**
 * Proxy class for struct PollAnswerDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class PollAnswerDetails {

    /**
     * @var string $AnswerText Text of this answer
     */
    public $AnswerText;

    /**
     * @var int $Id ID of the answer among the answers for this question
     */
    public $Id;

    /**
     * @var int $PollQuestionId ID of the question this answer belongs to
     */
    public $PollQuestionId;

    /**
     * @var int $Result arbitrary result value
     */
    public $Result;

    /**
     *
     * @param string $AnswerText
     * @param int $Id
     * @param int $PollQuestionId
     * @param int $Result
     */
    function __construct( $AnswerText, $Id, $PollQuestionId, $Result ) {
        $this->AnswerText = $AnswerText;
        $this->Id = $Id;
        $this->PollQuestionId = $PollQuestionId;
        $this->Result = $Result;
    }

}

/**
 * Proxy class for struct CreateScheduleFromTemplateRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreateScheduleFromTemplateRequest extends RequestMessage {

    /**
     * @var CreateScheduleFromTemplateDetails $Schedule
     */
    public $Schedule;

    /**
     *
     * @param string $Ticket
     * @param CreateScheduleFromTemplateDetails $Schedule
     * @param string $ImpersonationUsername
     */
    function __construct( $Ticket, $Schedule, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->Schedule = $Schedule;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct CreateScheduleFromTemplateDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreateScheduleFromTemplateDetails {

    /**
     * @var string $TemplateId
     */
    public $TemplateId;

    /**
     * @var int $AdvanceCreationTime
     */
    public $AdvanceCreationTime;

    /**
     * @var int $AdvanceLoadTimeInSeconds
     */
    public $AdvanceLoadTimeInSeconds;

    /**
     * @var boolean $AutoStart
     */
    public $AutoStart;

    /**
     * @var boolean $AutoStop
     */
    public $AutoStop;

    /**
     * @var boolean $CreatePresentation
     */
    public $CreatePresentation;

    /**
     * @var string $Description
     */
    public $Description;

    /**
     * @var boolean $LoadPresentation
     */
    public $LoadPresentation;

    /**
     * @var string $Name
     */
    public $Name;

    /**
     * @var int $NextNumberInSchedule
     */
    public $NextNumberInSchedule;

    /**
     * @var boolean $NotifyPresenter
     */
    public $NotifyPresenter;

    /**
     * @var string $PublishingPoint
     */
    public $PublishingPoint;

    /**
     * @var string $ReceipientsEmailAddresses
     */
    public $ReceipientsEmailAddresses;

    /**
     * @var string $RecorderId
     */
    public $RecorderId;

    /**
     * @var array $RecurrenceList of {@link ScheduleRecurrenceDetails}
     */
    public $RecurrenceList;

    /**
     * @var string $SendersEmail
     */
    public $SendersEmail;

    /**
     * @var ScheduleTitleType $TitleType
     */
    public $TitleType;

    /**
     *
     * @param string $TemplateId
     * @param string $Name
     * @param array $RecurrenceList of {@link ScheduleRecurrenceDetails}
     * @param ScheduleTitleType $TitleType
     * @param int $AdvanceCreationTime
     * @param int $AdvanceLoadTimeInSeconds
     * @param bool $AutoStart
     * @param bool $AutoStop
     * @param bool $CreatePresentation
     * @param bool $LoadPresentation
     * @param int $NextNumberInSchedule
     * @param bool $NotifyPresenter
     * @param string $Description
     * @param string $PublishingPoint
     * @param string $ReceipientsEmailAddresses
     * @param string $RecorderId
     * @param string $SendersEmail
     */
    function __construct( $TemplateId, $Name, $RecurrenceList, $TitleType, $AdvanceCreationTime,
            $AdvanceLoadTimeInSeconds, $NextNumberInSchedule, $AutoStart, $AutoStop, $CreatePresentation,
            $LoadPresentation, $NotifyPresenter, $Description = null, $PublishingPoint = null,
            $ReceipientsEmailAddresses = null, $RecorderId = null, $SendersEmail = null ) {
        $this->AdvanceCreationTime = $AdvanceCreationTime;
        $this->AdvanceLoadTimeInSeconds = $AdvanceLoadTimeInSeconds;
        $this->AutoStart = $AutoStart;
        $this->AutoStop = $AutoStop;
        $this->CreatePresentation = $CreatePresentation;
        $this->Description = $Description;
        $this->LoadPresentation = $LoadPresentation;
        $this->Name = $Name;
        $this->NextNumberInSchedule = $NextNumberInSchedule;
        $this->NotifyPresenter = $NotifyPresenter;
        $this->PublishingPoint = $PublishingPoint;
        $this->ReceipientsEmailAddresses = $ReceipientsEmailAddresses;
        $this->RecorderId = $RecorderId;
        $this->RecurrenceList = $RecurrenceList;
        $this->SendersEmail = $SendersEmail;
        $this->TemplateId = $TemplateId;
        $this->TitleType = $TitleType;
    }

}

/**
 * Proxy class for struct ScheduleRecurrenceDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class ScheduleRecurrenceDetails {

    /**
     * @var int $DayOfTheMonth
     */
    public $DayOfTheMonth;

    /**
     * @var WeekDay $DaysOfTheWeek
     */
    public $DaysOfTheWeek;

    /**
     * @var string $EndRecordDateTime date-time formatted string
     */
    public $EndRecordDateTime;

    /**
     * @var array $ExcludeDateRangeList of {@link RecurrenceExcludeDateRangeDetails}
     */
    public $ExcludeDateRangeList;

    /**
     * @var boolean $ExcludeHolidays
     */
    public $ExcludeHolidays;

    /**
     * @var int $Id
     */
    public $Id;

    /**
     * @var MonthOfTheYear $MonthOfTheYear
     */
    public $MonthOfTheYear;

    /**
     * @var string $NextScheduleTime date-time formatted string
     */
    public $NextScheduleTime;

    /**
     * @var int $RecordDuration
     */
    public $RecordDuration;

    /**
     * @var int $RecurrenceFrequency
     */
    public $RecurrenceFrequency;

    /**
     * @var RecurrencePattern $RecurrencePattern
     */
    public $RecurrencePattern;

    /**
     * @var RecurrencePatternType $RecurrencePatternType
     */
    public $RecurrencePatternType;

    /**
     * @var string $StartRecordDateTime date-time formatted string
     */
    public $StartRecordDateTime;

    /**
     * @var boolean $WeekDayOnly
     */
    public $WeekDayOnly;

    /**
     * @var WeekOfTheMonth $WeekOfTheMonth
     */
    public $WeekOfTheMonth;

    /**
     *
     * @param int $Id
     * @param int $DayOfTheMonth
     * @param string $StartRecordDateTime date-time formatted string
     * @param string $EndRecordDateTime date-time formatted string must be after $StartRecordDateTime
     * @param array $ExcludeDateRangeList of {@link RecurrenceExcludeDateRangeDetails} can be an empty array, but must be supplied
     * @param bool $ExcludeHolidays
     * @param MonthOfTheYear $MonthOfTheYear
     * @param string $NextScheduleTime date-time formatted string
     * @param int $RecordDuration
     * @param int $RecurrenceFrequency
     * @param RecurrencePattern $RecurrencePattern
     * @param RecurrencePatternType $RecurrencePatternType
     * @param bool $WeekDayOnly
     * @param WeekOfTheMonth $WeekOfTheMonth
     * @param WeekDay $DaysOfTheWeek
     */
    function __construct( $Id, $DayOfTheMonth, $StartRecordDateTime, $EndRecordDateTime, $ExcludeDateRangeList,
            $ExcludeHolidays, $MonthOfTheYear, $NextScheduleTime, $RecordDuration, $RecurrenceFrequency,
            $RecurrencePattern, $RecurrencePatternType, $WeekDayOnly, $WeekOfTheMonth, $DaysOfTheWeek = null ) {
        $this->DayOfTheMonth = $DayOfTheMonth;
        $this->DaysOfTheWeek = $DaysOfTheWeek;
        $this->EndRecordDateTime = $EndRecordDateTime;
        $this->ExcludeDateRangeList = $ExcludeDateRangeList;
        $this->ExcludeHolidays = $ExcludeHolidays;
        $this->Id = $Id;
        $this->MonthOfTheYear = $MonthOfTheYear;
        $this->NextScheduleTime = $NextScheduleTime;
        $this->RecordDuration = $RecordDuration;
        $this->RecurrenceFrequency = $RecurrenceFrequency;
        $this->RecurrencePattern = $RecurrencePattern;
        $this->RecurrencePatternType = $RecurrencePatternType;
        $this->StartRecordDateTime = $StartRecordDateTime;
        $this->WeekDayOnly = $WeekDayOnly;
        $this->WeekOfTheMonth = $WeekOfTheMonth;
    }

}

/**
 * Proxy class for struct RecurrenceExcludeDateRangeDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class RecurrenceExcludeDateRangeDetails {

    /**
     * @var string $End date-time formatted string
     */
    public $End;

    /**
     * @var int $ExcludeId
     */
    public $ExcludeId;

    /**
     * @var string $Start date-time formatted string
     */
    public $Start;

    /**
     *
     * @param string $End date-time formatted string
     * @param int $ExcludeId
     * @param string $Start date-time formatted string
     */
    function __construct( $End, $ExcludeId, $Start ) {
        $this->End = $End;
        $this->ExcludeId = $ExcludeId;
        $this->Start = $Start;
    }

}

/**
 * Proxy class for struct GetVersionRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class GetVersionRequest extends RequestMessage {

    /**
     *
     * @param string $Ticket
     */
    function __construct( $Ticket, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct LoginRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class LoginRequest {

    /**
     * @var string $ApplicationName
     */
    public $ApplicationName;

    /**
     * @var string $Password
     */
    public $Password;

    /**
     * @var string $Username
     */
    public $Username;

    /**
     * @var string $ImpersonationUsername
     */
    public $ImpersonationUsername;

    /**
     *
     * @param string $Username
     * @param string $Password
     * @param string $ApplicationName
     * @param string @ImpersonationUsername
     */
    function __construct( $Username, $Password, $ApplicationName = null, $ImpersonationUsername = null ) {
        $this->Username = $Username;
        $this->Password = $Password;
        $this->ApplicationName = $ApplicationName;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct LogoutRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class LogoutRequest extends RequestMessage {

    /**
     *
     * @param string $Ticket
     */
    function __construct( $Ticket, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QueryAuthTicketPropertiesRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryAuthTicketPropertiesRequest extends RequestMessage {

    /**
     * @var string $AuthTicketId
     */
    public $AuthTicketId;

    /**
     * @var int $MinutesToLive
     */
    public $MinutesToLive;

    /**
     * @var boolean $RenewTicket
     */
    public $RenewTicket;

    /**
     *
     * @param string $Ticket
     * @param string $AuthTicketId
     * @param int $MinutesToLive
     * @param bool $RenewTicket
     */
    function __construct( $Ticket, $AuthTicketId, $MinutesToLive, $RenewTicket, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->AuthTicketId = $AuthTicketId;
        $this->MinutesToLive = $MinutesToLive;
        $this->RenewTicket = $RenewTicket;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QueryCatalogSharesRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryCatalogSharesRequest extends RequestMessage {

    /**
     * @var array $PermissionMask of {@link ResourcePermissionMask}
     */
    public $PermissionMask;

    /**
     *
     * @param string $Ticket
     * @param array $PermissionMask of {@link ResourcePermissionMask}
     * @param string $ImpersonationUsername
     */
    function __construct( $Ticket, $PermissionMask, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->PermissionMask = $PermissionMask;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QueryChapterPointsRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryChapterPointsRequest extends RequestMessage {

    /**
     * @var int $Count
     */
    public $Count;

    /**
     * @var string $PresentationId
     */
    public $PresentationId;

    /**
     * @var int $StartIndex
     */
    public $StartIndex;

    /**
     *
     * @param string $Ticket
     * @param int $Count
     * @param string $PresentationId
     * @param int $StartIndex
     * @param string $ImpersonationUsername
     */
    function __construct( $Ticket, $Count, $PresentationId, $StartIndex, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->Count = $Count;
        $this->PresentationId = $PresentationId;
        $this->StartIndex = $StartIndex;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QueryClientIpAddressRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryClientIpAddressRequest extends RequestMessage {

    /**
     * @var boolean $ResolveDnsName
     */
    public $ResolveDnsName;

    /**
     *
     * @param string $Ticket
     * @param bool $ResolveDnsName
     * @param string $ImpersonationUsername
     */
    function __construct( $Ticket, $ResolveDnsName, $ImpersonationUsername ) {
        $this->Ticket = $Ticket;
        $this->ResolveDnsName = $ResolveDnsName;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QueryContentServersByCriteriaRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryContentServersByCriteriaRequest extends RequestMessage {

    /**
     * @var ContentServerQueryCriteria $Criteria
     */
    public $Criteria;

    /**
     *
     * @param string $Ticket
     * @param ContentServerQueryCriteria $Criteria
     */
    function __construct( $Ticket, $Criteria, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->Criteria = $Criteria;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct ContentServerQueryCriteria
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class ContentServerQueryCriteria {

    /**
     * @var bool $IncludeStorageSettings
     */
    public $IncludeStorageSettings;

    /**
     * @var string $PresentationId
     */
    public $PresentationId;

    /**
     * @var ContentServerQueryBy $QueryBy
     */
    public $QueryBy;

    /**
     * @var ContentServerTypeDetails $ServerType
     */
    public $ServerType;

    /**
     *
     * @param bool $IncludeStorageSettings
     * @param string $PresentationId
     * @param ContentServerQueryBy $QueryBy
     * @param ContentServerTypeDetails $ServerType
     */
    function __construct( $IncludeStorageSettings, $PresentationId, $QueryBy, $ServerType ) {
        $this->IncludeStorageSettings = $IncludeStorageSettings;
        $this->PresentationId = $PresentationId;
        $this->QueryBy = $QueryBy;
        $this->ServerType = $ServerType;
    }

}

/**
 * Proxy class for struct QueryFoldersByIdRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryFoldersByIdRequest extends RequestMessage {

    /**
     * @var array $FolderIdList of string
     */
    public $FolderIdList;

    /**
     * @var ResourcePermissionMask $PermissionMask
     */
    public $PermissionMask;

    /**
     *
     * @param string $Ticket
     * @param array $FolderIdList array of string
     * @param ResourcePermissionMask $PermissionMask
     */
    function __construct( $Ticket, $FolderIdList, $PermissionMask, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->FolderIdList = $FolderIdList;
        $this->PermissionMask = $PermissionMask;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QueryFoldersWithPresentationsRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryFoldersWithPresentationsRequest extends RequestMessage {

    /**
     *
     * @param string $Ticket
     */
    function __construct( $Ticket, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QueryIdentityTicketPropertiesRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryIdentityTicketPropertiesRequest extends RequestMessage {

    /**
     * @var string $IdentityTicket
     */
    public $IdentityTicket;

    /**
     * @var int $MinutesToLive
     */
    public $MinutesToLive;

    /**
     * @var boolean $RenewTicket
     */
    public $RenewTicket;

    /**
     *
     * @param string $IdentityTicket
     * @param int $MinutesToLive
     * @param bool $RenewTicket
     */
    function __construct( $Ticket, $IdentityTicket, $MinutesToLive, $RenewTicket, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->IdentityTicket = $IdentityTicket;
        $this->MinutesToLive = $MinutesToLive;
        $this->RenewTicket = $RenewTicket;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QueryContentEncodingSettingsByIdRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryContentEncodingSettingsByIdRequest extends RequestMessage {

    /**
     * @var array $ContentEncodingSettingsIds array of strings
     */
    public $ContentEncodingSettingsIds;

    /**
     *
     * @param string $Ticket
     * @param array $ContentEncodingSettingsIds of {@link string}
     */
    function __construct( $Ticket, $ContentEncodingSettingsIds, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->ContentEncodingSettingsIds = $ContentEncodingSettingsIds;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QueryContentEncodingSettingsByCriteriaRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryContentEncodingSettingsByCriteriaRequest extends RequestMessage {

    /**
     * @var ContentEncodingSettingsQueryCriteria $Criteria
     */
    public $Criteria;

    /**
     *
     * @param string $Ticket
     * @param ContentEncodingSettingsQueryCriteria $Criteria
     */
    function __construct( $Ticket, $Criteria, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->Criteria = $Criteria;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct ContentEncodingSettingsQueryCriteria
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class ContentEncodingSettingsQueryCriteria {

    /**
     * @var array $ContentEncodingSettingsIdList of {@link string}
     */
    public $ContentEncodingSettingsIdList;

    /**
     * @var array $RecorderSupportedMimeTypes of {@link string}
     */
    public $RecorderSupportedMimeTypes;

    /**
     *
     * @param array $ContentEncodingSettingsIdList of {@link string}
     * @param array $RecorderSupportedMimeTypes of {@link string}
     */
    function __construct( $ContentEncodingSettingsIdList, $RecorderSupportedMimeTypes = null ) {
        $this->ContentEncodingSettingsIdList = $ContentEncodingSettingsIdList;
        $this->RecorderSupportedMimeTypes = $RecorderSupportedMimeTypes;
    }

}

/**
 * Generated data proxy class for struct QueryPlayersRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryPlayersRequest extends RequestMessage {

}

/**
 * Proxy class for struct QueryPresentationsByIdRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryPresentationsByIdRequest extends RequestMessage {

    /**
     * @var array $PresentationIdList strings
     */
    public $PresentationIdList;

    /**
     *
     * @param string $Ticket
     * @param array $PresentationIdList of {@link string}
     */
    function __construct( $Ticket, $PresentationIdList, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->PresentationIdList = $PresentationIdList;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QueryPresentationsByCriteriaRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryPresentationsByCriteriaRequest extends RequestMessage {

    /**
     * @var QueryOptions $Options
     */
    public $Options;

    /**
     * @var PresentationQueryCriteria $QueryCriteria
     */
    public $QueryCriteria;

    /**
     *
     * @param string $Ticket
     * @param QueryOptions $Options
     * @param PresentationQueryCriteria $QueryCriteria
     */
    function __construct( $Ticket, $QueryCriteria, $Options = null, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->Options = $Options;
        $this->QueryCriteria = $QueryCriteria;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct PresentationQueryCriteria
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class PresentationQueryCriteria {

    /**
     * @var string $StartDate date-time formatted string
     */
    public $StartDate;

    /**
     * @var string $EndDate date-time formatted string
     */
    public $EndDate;

    /**
     * @var ResourcePermissionMask $PermissionMask
     */
    public $PermissionMask;

    /**
     * @var string $TitleRegEx
     */
    public $TitleRegEx;

    /**
     * @var boolean $IsInRecycleBin
     */
    public $IsInRecycleBin;

    /**
     * @var int $MinimumDeviceClass
     */
    public $MinimumDeviceClass;

    /**
     * @var array $StatusFilterList of {@link PresentationDataStatusDetails}
     */
    public $StatusFilterList;

    /**
     * @var array $FolderIdFilter of {@link string}
     */
    public $FolderIdFilter;

    /**
     * @var string $PrimaryOnDemandMimeType
     */
    public $PrimaryOnDemandMimeType;

    /**
     * @var ResourcePermissionMask $RootPermissionMask
     */
    public $RootPermissionMask;

    /**
     *
     * @param string $StartDate must be a valid date or date-time string
     * @param string $EndDate   must be a valid date or date-time string
     * @param ResourcePermissionMask $PermissionMask
     * @param bool $IsInRecycleBin
     * @param int $MinimumDeviceClass
     * @param string $TitleRegEx
     * @param array $StatusFilterList of {@link PresentationDataStatusDetails}
     * @param array $FolderIdFilter of {@link string}
     * @param string $PrimaryOnDemandMimeType
     * @param ResourcePermissionMask $RootPermissionMask
     */
    function __construct( $StartDate, $EndDate, $PermissionMask, $IsInRecycleBin, $MinimumDeviceClass = null,
            $TitleRegEx = null, $StatusFilterList = null, $FolderIdFilter = null, $PrimaryOnDemandMimeType = null,
            $RootPermissionMask = null ) {
        $this->StartDate = $StartDate;
        $this->EndDate = $EndDate;
        $this->PermissionMask = $PermissionMask;
        $this->IsInRecycleBin = $IsInRecycleBin;
        $this->MinimumDeviceClass = $MinimumDeviceClass;
        $this->TitleRegEx = $TitleRegEx;
        $this->StatusFilterList = $StatusFilterList;
        $this->FolderIdFilter = $FolderIdFilter;
        $this->PrimaryOnDemandMimeType = $PrimaryOnDemandMimeType;
        $this->RootPermissionMask = $RootPermissionMask;
    }

}

/**
 * Proxy class for struct QueryPresentationTemplatesByCriteriaRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryPresentationTemplatesByCriteriaRequest extends RequestMessage {

    /**
     * @var PresentationTemplateQueryCriteria $Criteria
     */
    public $Criteria;

    /**
     * @var QueryOptions $Options
     */
    public $Options;

    /**
     *
     * @param string $Ticket
     * @param PresentationTemplateQueryCriteria $Criteria
     * @param QueryOptions $Options
     */
    function __construct( $Ticket, $Criteria, $Options = null, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->Criteria = $Criteria;
        $this->Options = $Options;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct PresentationTemplateQueryCriteria
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class PresentationTemplateQueryCriteria {

    /**
     * @var boolean $IncludeContentDetails
     */
    public $IncludeContentDetails;

    /**
     * @var int $MinimumDeviceClass
     */
    public $MinimumDeviceClass;

    /**
     * @var array $PresentationTemplateIdList of {@link string}
     */
    public $PresentationTemplateIdList;

    /**
     * @var array $RecorderSupportedMimeTypes of {@link string}
     */
    public $RecorderSupportedMimeTypes;

    /**
     *
     * @param bool $IncludeContentDetails
     * @param int $MinimumDeviceClass
     * @param array $PresentationTemplateIdList of {@link string}
     * @param array $RecorderSupportedMimeTypes of {@link string}
     */
    function __construct( $IncludeContentDetails, $MinimumDeviceClass = null, $PresentationTemplateIdList = null,
            $RecorderSupportedMimeTypes = null ) {
        $this->IncludeContentDetails = $IncludeContentDetails;
        $this->MinimumDeviceClass = $MinimumDeviceClass;
        $this->PresentationTemplateIdList = $PresentationTemplateIdList;
        $this->RecorderSupportedMimeTypes = $RecorderSupportedMimeTypes;
    }

}

/**
 * Proxy class for struct QueryPresentersByCriteriaRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryPresentersByCriteriaRequest extends RequestMessage {

    /**
     * @var PresenterQueryCriteria $Criteria
     */
    public $Criteria;

    /**
     *
     * @param string $Ticket
     * @param PresenterQueryCriteria $Criteria
     */
    function __construct( $Ticket, $Criteria, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->Criteria = $Criteria;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct PresenterQueryCriteria
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class PresenterQueryCriteria {

    /**
     * @var string $EmailAddress
     */
    public $EmailAddress;

    /**
     * @var string $FirstName
     */
    public $FirstName;

    /**
     * @var string $Id
     */
    public $Id;

    /**
     * @var string $LastName
     */
    public $LastName;

    /**
     *
     * @param string $EmailAddress
     * @param string $FirstName
     * @param string $Id
     * @param string $LastName
     */
    function __construct( $EmailAddress = null, $FirstName = null, $Id = null, $LastName = null ) {
        $this->EmailAddress = $EmailAddress;
        $this->FirstName = $FirstName;
        $this->Id = $Id;
        $this->LastName = $LastName;
    }

}

/**
 * Proxy class for struct QueryPresentersByIdRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryPresentersByIdRequest extends RequestMessage {

    /**
     * @var array $PresenterIdList strings
     */
    public $PresenterIdList;

    /**
     *
     * @param string $Ticket
     * @param array $PresenterIdList strings
     */
    function __construct( $Ticket, $PresenterIdList, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->PresenterIdList = $PresenterIdList;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QueryResourcePermissionListRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryResourcePermissionListRequest extends RequestMessage {

    /**
     * @var ResourceIdentifier $Resource
     */
    public $Resource;

    /**
     *
     * @param string $Ticket
     * @param ResourceIdentifier $Resource
     */
    function __construct( $Ticket, $Resource, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->Resource = $Resource;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct ResourceIdentifier
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class ResourceIdentifier {

    /**
     * @var string $Id
     */
    public $Id;

    /**
     * @var ResourceType $Type
     */
    public $Type;

    /**
     *
     * @param string $Id
     * @param ResourceType $Type
     */
    function __construct( $Id, $Type ) {
        $this->Id = $Id;
        $this->Type = $Type;
    }

}

/**
 * Generated data proxy class for struct QueryResourcePermissionsRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryResourcePermissionsRequest extends RequestMessage {

    /**
     * @var array $ResourceList of {@link ResourceIdentifier}
     */
    public $ResourceList;

    /**
     *
     * @param string $Ticket
     * @param array $ResourceList of {@link ResourceIdentifier}
     */
    function __construct( $Ticket, $ResourceList, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->ResourceList = $ResourceList;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QuerySchedulesByCriteriaRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QuerySchedulesByCriteriaRequest extends RequestMessage {

    /**
     * @var PresentationScheduleQueryCriteria $Criteria
     */
    public $Criteria;

    /**
     * @var QueryOptions $Options
     */
    public $Options;

    /**
     *
     * @param string $Ticket
     * @param PresentationScheduleQueryCriteria $Criteria
     * @param QueryOptions $Options
     */
    function __construct( $Ticket, $Criteria, $Options = null, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->Criteria = $Criteria;
        $this->Options = $Options;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct PresentationScheduleQueryCriteria
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class PresentationScheduleQueryCriteria {

    /**
     * @var boolean $IgnoreInactiveSchedules
     */
    public $IgnoreInactiveSchedules;

    /**
     * @var string $LastSyncDateTimeUtc date-time formatted string
     */
    public $LastSyncDateTimeUtc;

    /**
     * @var int $MinimumDeviceClass
     */
    public $MinimumDeviceClass;

    /**
     * @var QueryScheduleBy $QueryScheduleBy
     */
    public $QueryScheduleBy;

    /**
     * @var string $RecorderPhysicalAddress
     */
    public $RecorderPhysicalAddress;

    /**
     * @var string $ScheduleId
     */
    public $ScheduleId;

    /**
     * @var int $ServiceId
     */
    public $ServiceId;

    /**
     *
     * @param bool $IgnoreInactiveSchedules
     * @param string $LastSyncDateTimeUtc date-time formatted string
     * @param int $MinimumDeviceClass
     * @param QueryScheduleBy $QueryScheduleBy
     * @param string $RecorderPhysicalAddress
     * @param string $ScheduleId
     * @param int $ServiceId
     */
    function __construct( $IgnoreInactiveSchedules, $LastSyncDateTimeUtc, $QueryScheduleBy, $ServiceId,
            $MinimumDeviceClass = null, $RecorderPhysicalAddress = null, $ScheduleId = null ) {
        $this->IgnoreInactiveSchedules = $IgnoreInactiveSchedules;
        $this->LastSyncDateTimeUtc = $LastSyncDateTimeUtc;
        $this->MinimumDeviceClass = $MinimumDeviceClass;
        $this->QueryScheduleBy = $QueryScheduleBy;
        $this->RecorderPhysicalAddress = $RecorderPhysicalAddress;
        $this->ScheduleId = $ScheduleId;
        $this->ServiceId = $ServiceId;
    }

}

/**
 * Proxy class for struct QuerySitePropertiesRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QuerySitePropertiesRequest extends RequestMessage {

    /**
     *
     * @param string $Ticket
     */
    function __construct( $Ticket, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QuerySlidesRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QuerySlidesRequest extends RequestMessage {

    /**
     * @var int $Count
     */
    public $Count;

    /**
     * @var string $PresentationId
     */
    public $PresentationId;

    /**
     * @var int $StartIndex
     */
    public $StartIndex;

    /**
     *
     * @param string $Ticket
     * @param int $Count
     * @param string $PresentationId
     * @param int $StartIndex
     */
    function __construct( $Ticket, $Count, $PresentationId, $StartIndex, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->Count = $Count;
        $this->PresentationId = $PresentationId;
        $this->StartIndex = $StartIndex;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QuerySubFolderDetailsRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QuerySubFolderDetailsRequest extends RequestMessage {

    /**
     * @var boolean $IncludeAllSubFolders
     */
    public $IncludeAllSubFolders;

    /**
     * @var array $ParentFolderIdList strings
     */
    public $ParentFolderIdList;

    /**
     * @var ResourcePermissionMask $PermissionMask
     */
    public $PermissionMask;

    /**
     *
     * @param string $Ticket
     * @param bool $IncludeAllSubFolders
     * @param array $ParentFolderIdList strings
     * @param ResourcePermissionMask $PermissionMask
     */
    function __construct( $Ticket, $IncludeAllSubFolders, $ParentFolderIdList, $PermissionMask,
            $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->IncludeAllSubFolders = $IncludeAllSubFolders;
        $this->ParentFolderIdList = $ParentFolderIdList;
        $this->PermissionMask = $PermissionMask;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QueryTimeZonesByCriteriaRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryTimeZonesByCriteriaRequest extends RequestMessage {

    /**
     * @var TimeZoneQueryCriteria $Criteria
     */
    public $Criteria;

    /**
     *
     * @param string $ticket
     * @param TimeZoneQueryCriteria $Criteria
     */
    function __construct( $Ticket, $Criteria, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->Criteria = $Criteria;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Generated data proxy class for struct TimeZoneQueryCriteria
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class TimeZoneQueryCriteria {

    /**
     * @var array $TimeZoneIdList of {@link int}
     */
    public $TimeZoneIdList;

    /**
     *
     * @param type $TimeZoneIdList
     */
    function __construct( $TimeZoneIdList ) {
        $this->TimeZoneIdList = $TimeZoneIdList;
    }

}

/**
 * Proxy class for struct RemoveAuthTicketRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class RemoveAuthTicketRequest extends RequestMessage {

    /**
     * @var string $AuthTicketId
     */
    public $AuthTicketId;

    /**
     *
     * @param string $Ticket current request's authentication ticket
     * @param string $AuthTicketId auth ticket to remove
     */
    function __construct( $Ticket, $AuthTicketId, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->AuthTicketId = $AuthTicketId;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct RemoveIdentityTicketRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class RemoveIdentityTicketRequest extends RequestMessage {

    /**
     * @var string $IdentityTicket
     */
    public $IdentityTicket;

    /**
     *
     * @param string $Ticket the current request's authentication ticket
     * @param string $IdentityTicket Identity ticket to remove
     */
    function __construct( $Ticket, $IdentityTicket, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->IdentityTicket = $IdentityTicket;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Generated data proxy class for struct TestRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class TestRequest {

}

/**
 * Proxy class for struct SearchRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class SearchRequest extends RequestMessage {

    /**
     * @var array $Fields {@link SupportedSearchField}
     */
    public $Fields;

    /**
     * @var QueryOptions $Options
     */
    public $Options;

    /**
     * @var string $SearchText
     */
    public $SearchText;

    /**
     * @var array $Types {@link SupportedSearchType}
     */
    public $Types;

    /**
     *
     * @param string $Ticket
     * @param array $Fields {@link SupportedSearchField}
     * @param QueryOptions $Options
     * @param string $SearchText
     * @param array $Types {@link SupportedSearchType}
     */
    function __construct( $Ticket, $Fields, $SearchText, $Types, $Options = null, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->Fields = $Fields;
        $this->Options = $Options;
        $this->SearchText = $SearchText;
        $this->Types = $Types;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct UpdateScheduleRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class UpdateScheduleRequest extends RequestMessage {

    /**
     * @var UpdateScheduleDetails $Schedule
     */
    public $Schedule;

    /**
     *
     * @param string $Ticket
     * @param UpdateScheduleDetails $Schedule
     */
    function __construct( $Ticket, $Schedule, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->Schedule = $Schedule;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct UpdateScheduleDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class UpdateScheduleDetails {

    /**
     * @var array $AccessControlList of {@link ResourcePermissionEntry}
     */
    public $AccessControlList;

    /**
     * @var int $AdvanceCreationTime
     */
    public $AdvanceCreationTime;

    /**
     * @var int $AdvanceLoadTimeInSeconds
     */
    public $AdvanceLoadTimeInSeconds;

    /**
     * @var boolean $AutoStart
     */
    public $AutoStart;

    /**
     * @var boolean $AutoStop
     */
    public $AutoStop;

    /**
     * @var boolean $CreatePresentation
     */
    public $CreatePresentation;

    /**
     * @var string $Description
     */
    public $Description;

    /**
     * @var string $FolderId
     */
    public $FolderId;

    /**
     * @var string $Id
     */
    public $Id;

    /**
     * @var boolean $IsForumsEnabled
     */
    public $IsForumsEnabled;

    /**
     * @var boolean $IsLive
     */
    public $IsLive;

    /**
     * @var boolean $IsOnDemand
     */
    public $IsOnDemand;

    /**
     * @var boolean $IsPollsEnabled
     */
    public $IsPollsEnabled;

    /**
     * @var boolean $IsUploadAutomatic
     */
    public $IsUploadAutomatic;

    /**
     * @var boolean $LoadPresentation
     */
    public $LoadPresentation;

    /**
     * @var string $Name
     */
    public $Name;

    /**
     * @var int $NextNumberInSchedule
     */
    public $NextNumberInSchedule;

    /**
     * @var boolean $NotifyPresenter
     */
    public $NotifyPresenter;

    /**
     * @var string $PlayerId
     */
    public $PlayerId;

    /**
     * @var array $PresenterList of {@link CreatePresenterDetails}
     */
    public $PresenterList;

    /**
     * @var string $PublishingPoint
     */
    public $PublishingPoint;

    /**
     * @var string $ReceipientsEmailAddresses
     */
    public $ReceipientsEmailAddresses;

    /**
     * @var string $RecorderId
     */
    public $RecorderId;

    /**
     * @var array $RecurrenceList of {@link ScheduleRecurrenceDetails}
     */
    public $RecurrenceList;

    /**
     * @var string $SendersEmail
     */
    public $SendersEmail;

    /**
     * @var int $TimeZoneId
     */
    public $TimeZoneId;

    /**
     * @var ScheduleTitleType $TitleType
     */
    public $TitleType;

    /**
     *
     * @param string $Id
     * @param int $AdvanceCreationTime
     * @param int $AdvanceLoadTimeInSeconds
     * @param bool $AutoStart
     * @param bool $AutoStop
     * @param bool $CreatePresentation
     * @param bool $IsForumsEnabled
     * @param bool $IsLive
     * @param bool $IsOnDemand
     * @param bool $IsPollsEnabled
     * @param bool $IsUploadAutomatic
     * @param bool $LoadPresentation
     * @param int $NextNumberInSchedule
     * @param bool $NotifyPresenter
     * @param int $TimeZoneId
     * @param ScheduleTitleType $TitleType
     * @param string $FolderId
     * @param string $PlayerId
     * @param array $PresenterList of {@link CreatePresenterDetails} can be an empty array, but must be passed
     * @param array $AccessControlList of {@link ResourcePermissionEntry} can be an empty array, but must be passed
     * @param array $RecurrenceList of {@link ScheduleRecurrenceDetails}
     * @param string $Description
     * @param string $Name
     * @param string $PublishingPoint
     * @param string $ReceipientsEmailAddresses
     * @param string $RecorderId
     * @param string $SendersEmail
     */
    function __construct( $Id, $Name, $AdvanceCreationTime, $AdvanceLoadTimeInSeconds, $AutoStart, $AutoStop,
            $CreatePresentation, $IsForumsEnabled, $IsLive, $IsOnDemand, $IsPollsEnabled, $IsUploadAutomatic,
            $LoadPresentation, $NextNumberInSchedule, $NotifyPresenter, $TimeZoneId, $TitleType, $FolderId, $PlayerId,
            $AccessControlList, $RecurrenceList, $PresenterList = null, $Description = null, $PublishingPoint = null,
            $ReceipientsEmailAddresses = null, $RecorderId = null, $SendersEmail = null ) {
        $this->AccessControlList = $AccessControlList;
        $this->AdvanceCreationTime = $AdvanceCreationTime;
        $this->AdvanceLoadTimeInSeconds = $AdvanceLoadTimeInSeconds;
        $this->AutoStart = $AutoStart;
        $this->AutoStop = $AutoStop;
        $this->CreatePresentation = $CreatePresentation;
        $this->Description = $Description;
        $this->FolderId = $FolderId;
        $this->Id = $Id;
        $this->IsForumsEnabled = $IsForumsEnabled;
        $this->IsLive = $IsLive;
        $this->IsOnDemand = $IsOnDemand;
        $this->IsPollsEnabled = $IsPollsEnabled;
        $this->IsUploadAutomatic = $IsUploadAutomatic;
        $this->LoadPresentation = $LoadPresentation;
        $this->Name = $Name;
        $this->NextNumberInSchedule = $NextNumberInSchedule;
        $this->NotifyPresenter = $NotifyPresenter;
        $this->PlayerId = $PlayerId;
        $this->PresenterList = $PresenterList;
        $this->PublishingPoint = $PublishingPoint;
        $this->ReceipientsEmailAddresses = $ReceipientsEmailAddresses;
        $this->RecorderId = $RecorderId;
        $this->RecurrenceList = $RecurrenceList;
        $this->SendersEmail = $SendersEmail;
        $this->TimeZoneId = $TimeZoneId;
        $this->TitleType = $TitleType;
    }

}

/**
 * Proxy class for struct UpdatePresentationDetailsRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class UpdatePresentationDetailsRequest extends RequestMessage {

    /**
     * @var string $PresentationId
     */
    public $PresentationId;

    /**
     * @var PresentationUpdateDetails $Details
     */
    public $Details;

    /**
     *
     * @param string $Ticket
     * @param string $PresentationId
     * @param PresentationUpdateDetails $Details
     */
    function __construct( $Ticket, $PresentationId, $Details, $ImpersonationUsername ) {
        $this->Ticket = $Ticket;
        $this->PresentationId = $PresentationId;
        $this->Update = $Details;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct PresentationUpdateDetails
 *
 * Many of the properties of this class are not required on the service endpoint, but the boolean flags that represent
 * whether or not they are set are. To keep the properties and their boolean flags together we're not defaulting
 * any of the properties.
 *
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 */
class PresentationUpdateDetails {

    /**
     * @var string $AirDateTimeUtc date-time formatted string
     */
    public $AirDateTimeUtc;

    /**
     * @var boolean $AirDateTimeUtcIsSet
     */
    public $AirDateTimeUtcIsSet;

    /**
     * @var string $Description
     */
    public $Description;

    /**
     * @var boolean $DescriptionIsSet
     */
    public $DescriptionIsSet;

    /**
     * @var int $Duration
     */
    public $Duration;

    /**
     * @var boolean $DurationIsSet
     */
    public $DurationIsSet;

    /**
     * @var boolean $IsLive
     */
    public $IsLive;

    /**
     * @var boolean $IsLiveIsSet
     */
    public $IsLiveIsSet;

    /**
     * @var boolean $IsOnDemand
     */
    public $IsOnDemand;

    /**
     * @var boolean $IsOnDemandIsSet
     */
    public $IsOnDemandIsSet;

    /**
     * @var int $MediaLength
     */
    public $MediaLength;

    /**
     * @var boolean $MediaLengthIsSet
     */
    public $MediaLengthIsSet;

    /**
     * @var string $ParentFolderId
     */
    public $ParentFolderId;

    /**
     * @var boolean $ParentFolderIdIsSet
     */
    public $ParentFolderIdIsSet;

    /**
     * @var string $PlayerId
     */
    public $PlayerId;

    /**
     * @var boolean $PlayerIdIsSet
     */
    public $PlayerIdIsSet;

    /**
     * @var array $PresenterDetails of {@link CreatePresenterDetails}
     */
    public $PresenterDetails;

    /**
     * @var boolean $PresenterDetailsIsSet
     */
    public $PresenterDetailsIsSet;

    /**
     * @var PresentationDataStatusDetails $Status
     */
    public $Status;

    /**
     * @var boolean $StatusIsSet
     */
    public $StatusIsSet;

    /**
     * @var string $TimeZoneId
     */
    public $TimeZoneId;

    /**
     * @var boolean $TimeZoneIdIsSet
     */
    public $TimeZoneIdIsSet;

    /**
     * @var string $Title
     */
    public $Title;

    /**
     * @var boolean $TitleIsSet
     */
    public $TitleIsSet;

    /**
     *
     * @param string $AirDateTimeUtc date-time formatted string
     * @param bool $AirDateTimeUtcIsSet
     * @param string $Description may be null
     * @param bool $DescriptionIsSet
     * @param int $Duration
     * @param bool $DurationIsSet
     * @param bool $IsLive
     * @param bool $IsLiveIsSet
     * @param bool $IsOnDemand
     * @param bool $IsOnDemandIsSet
     * @param int $MediaLength
     * @param bool $MediaLengthIsSet
     * @param string $ParentFolderId may be null
     * @param bool $ParentFolderIdIsSet
     * @param string $PlayerId may be null
     * @param bool $PlayerIdIsSet
     * @param array $PresenterDetails of {@link CreatePresenterDetails} may be null
     * @param bool $PresenterDetailsIsSet
     * @param PresentationDataStatusDetails $Status
     * @param bool $StatusIsSet
     * @param int $TimeZoneId may be null
     * @param bool $TimeZoneIdIsSet
     * @param string $Title may be null
     * @param bool $TitleIsSet
     */
    function __construct( $AirDateTimeUtc, $AirDateTimeUtcIsSet, $Description, $DescriptionIsSet, $Duration,
            $DurationIsSet, $IsLive, $IsLiveIsSet, $IsOnDemand, $IsOnDemandIsSet, $MediaLength, $MediaLengthIsSet,
            $ParentFolderId, $ParentFolderIdIsSet, $PlayerId, $PlayerIdIsSet, $PresenterDetails, $PresenterDetailsIsSet,
            $Status, $StatusIsSet, $TimeZoneId, $TimeZoneIdIsSet, $Title, $TitleIsSet ) {
        $this->AirDateTimeUtc = $AirDateTimeUtc;
        $this->AirDateTimeUtcIsSet = $AirDateTimeUtcIsSet;
        $this->Description = $Description;
        $this->DescriptionIsSet = $DescriptionIsSet;
        $this->Duration = $Duration;
        $this->DurationIsSet = $DurationIsSet;
        $this->IsLive = $IsLive;
        $this->IsLiveIsSet = $IsLiveIsSet;
        $this->IsOnDemand = $IsOnDemand;
        $this->IsOnDemandIsSet = $IsOnDemandIsSet;
        $this->MediaLength = $MediaLength;
        $this->MediaLengthIsSet = $MediaLengthIsSet;
        $this->ParentFolderId = $ParentFolderId;
        $this->ParentFolderIdIsSet = $ParentFolderIdIsSet;
        $this->PlayerId = $PlayerId;
        $this->PlayerIdIsSet = $PlayerIdIsSet;
        $this->PresenterDetails = $PresenterDetails;
        $this->PresenterDetailsIsSet = $PresenterDetailsIsSet;
        $this->Status = $Status;
        $this->StatusIsSet = $StatusIsSet;
        $this->TimeZoneId = $TimeZoneId;
        $this->TimeZoneIdIsSet = $TimeZoneIdIsSet;
        $this->Title = $Title;
        $this->TitleIsSet = $TitleIsSet;
    }

}

/**
 * Proxy class for struct CreatePresenterDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreatePresenterDetails {

    /**
     * @var string $AdditionalInfo
     */
    public $AdditionalInfo;

    /**
     * @var string $BioUrl
     */
    public $BioUrl;

    /**
     * @var string $EmailAddress
     */
    public $EmailAddress;

    /**
     * @var string $FirstName
     */
    public $FirstName;

    /**
     * @var base64Binary $Image
     */
    public $Image;

    /**
     * @var string $ImageName
     */
    public $ImageName;

    /**
     * @var string $LastName
     */
    public $LastName;

    /**
     * @var string $MiddleName
     */
    public $MiddleName;

    /**
     * @var string $Prefix
     */
    public $Prefix;

    /**
     * @var string $Suffix
     */
    public $Suffix;

    /**
     *
     * @param string $AdditionalInfo
     * @param string $BioUrl
     * @param string $EmailAddress
     * @param string $FirstName
     * @param base64Binary $Image
     * @param string $ImageName
     * @param string $LastName
     * @param string $MiddleName
     * @param string $Prefix
     * @param string $Suffix
     */
    function __construct( $AdditionalInfo, $BioUrl, $EmailAddress, $FirstName, $Image, $ImageName, $LastName,
            $MiddleName, $Prefix, $Suffix ) {
        $this->AdditionalInfo = $AdditionalInfo;
        $this->BioUrl = $BioUrl;
        $this->EmailAddress = $EmailAddress;
        $this->FirstName = $FirstName;
        $this->Image = $Image;
        $this->ImageName = $ImageName;
        $this->LastName = $LastName;
        $this->MiddleName = $MiddleName;
        $this->Prefix = $Prefix;
        $this->Suffix = $Suffix;
    }

}

/**
 * Proxy class for struct QueryRolesByIdRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryRolesByIdRequest extends RequestMessage {

    /**
     * @var array $RoleIdList string
     */
    public $RoleIdList;

    /**
     *
     * @param string $Ticket
     * @param array $RoleIdList of {@link string}
     */
    function __construct( $Ticket, $RoleIdList, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->RoleIdList = $RoleIdList;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QueryRolesByCriteriaRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryRolesByCriteriaRequest extends RequestMessage {

    /**
     * @var RoleQueryCriteria $Criteria
     */
    public $Criteria;

    /**
     *
     * @param string $Ticket
     * @param RoleQueryCriteria $Criteria
     */
    function __construct( $Ticket, $Criteria, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->Criteria = $Criteria;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct RoleQueryCriteria
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class RoleQueryCriteria {

    /**
     * @var string $DirectoryEntry
     */
    public $DirectoryEntry;

    /**
     * @var string $Name
     */
    public $Name;

    /**
     * Build a RoleQueryCriteria
     *
     * Neither parameter is required, but if both are provided and do not represent the same Role, no results will be
     * returned
     *
     * @param string $DirectoryEntry
     * @param string $Name
     */
    function __construct( $DirectoryEntry = null, $Name = null ) {
        $this->DirectoryEntry = $DirectoryEntry;
        $this->Name = $Name;
    }

}

/*  Final 6.0.2 methods */

/**
 * Proxy class for struct DeleteRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class DeleteRequest extends RequestMessage {

    /**
     * @var string $Id
     */
    public $Id;

    /**
     *
     * @param string $Ticket
     * @param string $Id
     * @param string $ImpersonationUsername
     */
    function __construct( $Ticket, $Id, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->Id = $Id;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct QueryCatalogsByIdRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 */
class QueryCatalogsByIdRequest extends RequestMessage {

    /**
     * @var array $CatalogIdList
     */
    public $CatalogIdList;

    /**
     * @var array $PermissionMask of {@link ResourcePermissionMask }
     */
    public $PermissionMask;

    /**
     *
     * @param string $Ticket
     * @param array $CatalogIdList
     * @param array $PermissionMask of {@link ResourcePermissionMask}
     * @param string $ImpersonationUsername
     */
    function __construct( $Ticket, $CatalogIdList, $PermissionMask = null, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->CatalogIdList = $CatalogIdList;
        $this->PermissionMask = $PermissionMask;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct CreateCatalogFromFolderRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreateCatalogFromFolderRequest {

    /**
     * @var CreateCatalogFromFolderDetails $CreateDetails
     */
    public $CreateDetails;

    /**
     *
     * @param string $Ticket
     * @param CreateCatalogFromFolderDetails $CreateDetails
     * @param string $ImpersonationUsername
     */
    function __construct( $Ticket, CreateCatalogFromFolderDetails $CreateDetails, $ImpersonationUsername = null ) {
        $this->CreateDetails = $CreateDetails;
        $this->Ticket = $Ticket;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct CreateCatalogFromFolderDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreateCatalogFromFolderDetails {

    /**
     * @var string $Description
     */
    public $Description;

    /**
     * @var string $FolderId
     */
    public $FolderId;

    /**
     * @var boolean $IncludeSubFolders
     */
    public $IncludeSubFolders;

    /**
     * @var string $Name
     */
    public $Name;

    function __construct( $FolderId, $IncludeSubFolders, $Name, $Description = null ) {
        $this->Description = $Description;
        $this->FolderId = $FolderId;
        $this->IncludeSubFolders = $IncludeSubFolders;
        $this->Name = $Name;
    }

}

/**
 * Proxy class for struct CreatePlayerLikeRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreatePlayerLikeRequest extends RequestMessage {

    /**
     * @var CreatePlayerLikeDetails $CreateDetails
     */
    public $CreateDetails;

    /**
     *
     * @param string $Ticket
     * @param CreatePlayerLikeDetails $CreateDetails
     * @param string $ImpersonationUsername
     */
    function __construct( $Ticket, CreatePlayerLikeDetails $CreateDetails, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->CreateDetails = $CreateDetails;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct CreatePlayerLikeDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreatePlayerLikeDetails {

    /**
     * @var string $CreateLikePlayerId
     */
    public $CreateLikePlayerId;

    /**
     * @var string $Description
     */
    public $Description;

    /**
     * @var string $Name
     */
    public $Name;

    /**
     * @var string $ParentFolderId
     */
    public $ParentFolderId;

    /**
     *
     * @param string $CreateLikePlayerId
     * @param string $Name
     * @param string $Description
     * @param string $ParentFolderId
     */
    function __construct( $CreateLikePlayerId, $Name, $ParentFolderId, $Description = null ) {
        $this->CreateLikePlayerId = $CreateLikePlayerId;
        $this->Description = $Description;
        $this->Name = $Name;
        $this->ParentFolderId = $ParentFolderId;
    }

}

/**
 * Proxy class for struct UpdateResourcePermissionsRequest
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class UpdateResourcePermissionsRequest extends RequestMessage {

    /**
     * @var UpdateResourcePermissionsDetails $PermissionDetails
     */
    public $PermissionDetails;

    function __construct( $Ticket, UpdateResourcePermissionsDetails $PermissionDetails, $ImpersonationUsername = null ) {
        $this->Ticket = $Ticket;
        $this->PermissionDetails = $PermissionDetails;
        $this->ImpersonationUsername = $ImpersonationUsername;
    }

}

/**
 * Proxy class for struct UpdateResourcePermissionsDetails
 *
 * Details of Resource Permission changes to be made.
 * Since changing permissions on folders is not supported in Edas as of v6.0.2, PropagatePermissions and PropagateOwner
 *  are meaningless, so they are defaulted to false
 * Also, if InheritPermissions is true, MergePermissions must be false or EDAS will throw an error
 * 
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 */
class UpdateResourcePermissionsDetails {

    /**
     * @var array $Acl of {@link ResourcePermissionEntry}
     */
    public $Acl;

    /**
     * @var array $Ids of {@link ResourceIdentifier}
     */
    public $Ids;

    /**
     * @var boolean $InheritPermissions
     */
    public $InheritPermissions;

    /**
     * @var boolean $MergePermissions
     */
    public $MergePermissions;

    /**
     * @var string $Owner
     */
    public $Owner;

    /**
     * @var boolean $PropagateOwner
     */
    public $PropagateOwner;

    /**
     * @var boolean $PropagatePermissions
     */
    public $PropagatePermissions;

    /**
     *
     * @param array $Acl
     * @param array $Ids
     * @param bool $InheritPermissions
     * @param bool $MergePermissions
     * @param string $Owner
     * @param bool $PropagateOwner
     * @param bool $PropagatePermissions
     */
    function __construct( $Acl, $Ids, $InheritPermissions, $MergePermissions, $Owner, $PropagateOwner = false,
            $PropagatePermissions = false ) {
        $this->Acl = $Acl;
        $this->Ids = $Ids;
        $this->InheritPermissions = $InheritPermissions;
        $this->MergePermissions = $MergePermissions;
        $this->Owner = $Owner;
        $this->PropagateOwner = $PropagateOwner;
        $this->PropagatePermissions = $PropagatePermissions;
    }

}

