<?php

/**
 * Mediasite External Data Access (Edas) webservice client wrapper
 * These proxy classes were generated based on the Mediasite 6.0 EDAS WSDL definition.
 *
 * PHP Version 5.3
 *
 * @copyright Copyright (c) 2012, Sonic Foundry
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version 6.0.2
 * @package SonicFoundry.Mediasite.Edas.PHPClient
 * @author Cori Schlegel <coris@sonicfoundry.com>
 *
 * This software is provided "AS IS" without a warranty of any kind.
 *
 */
/**
 * The proxy will take care of requiring the items it needs
 */
require_once(__DIR__ . "/edasproxy.php");

/**
 * External Access Client takes care of communications with the EDAS SOAP endpoint defined in the constructor
 * @package SonicFoundry.Mediasite.Edas.PHPClient
 */
class ExternalAccessClient {

    /**
     *
     * @var string user ticket cached in the client instance
     */
    public $Ticket;

    /**
     *
     * @var string User to impersonate; must exist in the system
     */
    public $ImpersonationUsername;

    /**
     * Construct new Edas Access client.
     * Ticket will be cached for the request if provided.
     *
     * Aside from Login() and Logout(), all other methods rely on a ticket being supplied in the EdasAccessClient
     * constructor or in the method call or being created and cached by calling Login().
     * Once created and cached for a given request, multiple operations can be executed from within that context.
     *
     * @param string $serviceLocation url of the Edas service
     * @param string $ticket ticket must be provided if Login is not called during this request
     */
    function __construct( $serviceLocation, $ticket = null, $impersonationUsername = null ) {
        $edas_class_map = array(
            "EncodingStreamDescription" => "EncodingStreamDescription",
            "EncodingStreamType" => "EncodingStreamType",
            "EncodingSettingsFilter" => "EncodingSettingsFilter",
            "FilterType" => "FilterType",
            "CreateRoleRequest" => "CreateRoleRequest",
            "RequestMessage" => "RequestMessage",
            "CreateRoleDetails" => "CreateRoleDetails",
            "CreateRoleResponse" => "CreateRoleResponse",
            "DataServiceFault" => "DataServiceFault",
            "DataServiceFaultType" => "DataServiceFaultType",
            "UpdateRoleRequest" => "UpdateRoleRequest",
            "UpdateRoleDetails" => "UpdateRoleDetails",
            "UpdateRoleResponse" => "UpdateRoleResponse",
            "QueryTotalViewsRequest" => "QueryTotalViewsRequest",
            "QueryOptions" => "QueryOptions",
            "AnalyticsRequestType" => "AnalyticsRequestType",
            "QueryTotalViewsResponse" => "QueryTotalViewsResponse",
            "QueryResults" => "QueryResults",
            "IdNameTotalPair" => "IdNameTotalPair",
            "QueryAnalyticsByIdRequest" => "QueryAnalyticsByIdRequest",
            "QueryDatesWatchedResponse" => "QueryDatesWatchedResponse",
            "QueryPlatformUsageResponse" => "QueryPlatformUsageResponse",
            "PlatformUsage" => "PlatformUsage",
            "QueryTotalViewsByIdRequest" => "QueryTotalViewsByIdRequest",
            "QueryPresentationUsageRequest" => "QueryPresentationUsageRequest",
            "QueryPresentationUsageResponse" => "QueryPresentationUsageResponse",
            "PresentationUsage" => "PresentationUsage",
            "QueryServerUsageResponse" => "QueryServerUsageResponse",
            "ServerUsage" => "ServerUsage",
            "QueryActiveConnectionsRequest" => "QueryActiveConnectionsRequest",
            "QueryActiveConnectionsResponse" => "QueryActiveConnectionsResponse",
            "ActiveConnections" => "ActiveConnections",
            "QueryActivePresentationsRequest" => "QueryActivePresentationsRequest",
            "QueryActivePresentationsResponse" => "QueryActivePresentationsResponse",
            "QueryActivePresentationConnectionsRequest" => "QueryActivePresentationConnectionsRequest",
            "QueryActivePresentationConnectionsResponse" => "QueryActivePresentationConnectionsResponse",
            "ArrayOfActiveConnection" => "ArrayOfActiveConnection",
            "ActiveConnection" => "ActiveConnection",
            "IdNamePair" => "IdNamePair",
            "CreateAuthTicketRequest" => "CreateAuthTicketRequest",
            "CreateAuthTicketSettings" => "CreateAuthTicketSettings",
            "CreateAuthTicketResponse" => "CreateAuthTicketResponse",
            "CreateSubFolderRequest" => "CreateSubFolderRequest",
            "ResourcePermissionEntry" => "ResourcePermissionEntry",
            "ResourcePermissionMask" => "ResourcePermissionMask",
            "CreateSubFolderResponse" => "CreateSubFolderResponse",
            "CreateIdentityTicketRequest" => "CreateIdentityTicketRequest",
            "CreateIdentityTicketSettings" => "CreateIdentityTicketSettings",
            "CreateIdentityTicketResponse" => "CreateIdentityTicketResponse",
            "CreatePresentationFromTemplateRequest" => "CreatePresentationFromTemplateRequest",
            "CreatePresentationFromTemplateDetails" => "CreatePresentationFromTemplateDetails",
            "BaseCreatePresentationFromTemplateDetails" => "BaseCreatePresentationFromTemplateDetails",
            "PresentationDataStatusDetails" => "PresentationDataStatusDetails",
            "CreatePresentationFromTemplateResponse" => "CreatePresentationFromTemplateResponse",
            "PresentationDetails" => "PresentationDetails",
            "PresentationContentDetails" => "PresentationContentDetails",
            "PresentationContentTypeDetails" => "PresentationContentTypeDetails",
            "ContentServerDetails" => "ContentServerDetails",
            "ContentServerEndpoint" => "ContentServerEndpoint",
            "ContentServerEndpointType" => "ContentServerEndpointType",
            "ContentServerDistributionEndpoint" => "ContentServerDistributionEndpoint",
            "ContentServerStorageEndpoint" => "ContentServerStorageEndpoint",
            "ContentServerTypeDetails" => "ContentServerTypeDetails",
            "PresentationContentStatusDetails" => "PresentationContentStatusDetails",
            "ExternalLinkContentDetails" => "ExternalLinkContentDetails",
            "ExternalLinkDetails" => "ExternalLinkDetails",
            "SlideContentDetails" => "SlideContentDetails",
            "ChapterContentDetails" => "ChapterContentDetails",
            "CaptionContentDetails" => "CaptionContentDetails",
            "PresenterName" => "PresenterName",
            "CreatePresentationFromScheduleRequest" => "CreatePresentationFromScheduleRequest",
            "CreatePresentationFromScheduleDetails" => "CreatePresentationFromScheduleDetails",
            "CreatePresentationFromScheduleResponse" => "CreatePresentationFromScheduleResponse",
            "ScheduledPresentationAssociation" => "ScheduledPresentationAssociation",
            "CreatePresentationLikeRequest" => "CreatePresentationLikeRequest",
            "CreatePresentationLikeDetails" => "CreatePresentationLikeDetails",
            "CreatePresentationLikeResponse" => "CreatePresentationLikeResponse",
            "CreatePresentationPollRequest" => "CreatePresentationPollRequest",
            "CreatePresentationPollDetails" => "CreatePresentationPollDetails",
            "PollQuestionDetails" => "PollQuestionDetails",
            "PollAnswerDetails" => "PollAnswerDetails",
            "CreatePresentationPollResponse" => "CreatePresentationPollResponse",
            "CreateScheduleFromTemplateRequest" => "CreateScheduleFromTemplateRequest",
            "CreateScheduleFromTemplateDetails" => "CreateScheduleFromTemplateDetails",
            "ScheduleRecurrenceDetails" => "ScheduleRecurrenceDetails",
            "WeekDay" => "WeekDay",
            "RecurrenceExcludeDateRangeDetails" => "RecurrenceExcludeDateRangeDetails",
            "MonthOfTheYear" => "MonthOfTheYear",
            "RecurrencePattern" => "RecurrencePattern",
            "RecurrencePatternType" => "RecurrencePatternType",
            "WeekOfTheMonth" => "WeekOfTheMonth",
            "ScheduleTitleType" => "ScheduleTitleType",
            "CreateScheduleFromTemplateResponse" => "CreateScheduleFromTemplateResponse",
            "GetVersionRequest" => "GetVersionRequest",
            "GetVersionResponse" => "GetVersionResponse",
            "LoginRequest" => "LoginRequest",
            "LoginResponse" => "LoginResponse",
            "LogoutRequest" => "LogoutRequest",
            "LogoutResponse" => "LogoutResponse",
            "QueryAuthTicketPropertiesRequest" => "QueryAuthTicketPropertiesRequest",
            "QueryAuthTicketPropertiesResponse" => "QueryAuthTicketPropertiesResponse",
            "AuthTicketProperties" => "AuthTicketProperties",
            "QueryCatalogSharesRequest" => "QueryCatalogSharesRequest",
            "QueryCatalogSharesResponse" => "QueryCatalogSharesResponse",
            "CatalogShare" => "CatalogShare",
            "QueryChapterPointsRequest" => "QueryChapterPointsRequest",
            "QueryChapterPointsResponse" => "QueryChapterPointsResponse",
            "ChapterDetails" => "ChapterDetails",
            "QueryClientIpAddressRequest" => "QueryClientIpAddressRequest",
            "QueryClientIpAddressResponse" => "QueryClientIpAddressResponse",
            "QueryContentServersByCriteriaRequest" => "QueryContentServersByCriteriaRequest",
            "ContentServerQueryCriteria" => "ContentServerQueryCriteria",
            "ContentServerQueryBy" => "ContentServerQueryBy",
            "QueryContentServersByCriteriaResponse" => "QueryContentServersByCriteriaResponse",
            "QueryFoldersByIdRequest" => "QueryFoldersByIdRequest",
            "QueryFoldersByIdResponse" => "QueryFoldersByIdResponse",
            "FolderDetails" => "FolderDetails",
            "FolderTypeDetails" => "FolderTypeDetails",
            "QueryFoldersWithPresentationsRequest" => "QueryFoldersWithPresentationsRequest",
            "QueryFoldersWithPresentationsResponse" => "QueryFoldersWithPresentationsResponse",
            "QueryIdentityTicketPropertiesRequest" => "QueryIdentityTicketPropertiesRequest",
            "QueryIdentityTicketPropertiesResponse" => "QueryIdentityTicketPropertiesResponse",
            "IdentityTicketProperties" => "IdentityTicketProperties",
            "QueryContentEncodingSettingsByIdRequest" => "QueryContentEncodingSettingsByIdRequest",
            "QueryContentEncodingSettingsByIdResponse" => "QueryContentEncodingSettingsByIdResponse",
            "ContentEncodingSettingDetails" => "ContentEncodingSettingDetails",
            "QueryContentEncodingSettingsByCriteriaRequest" => "QueryContentEncodingSettingsByCriteriaRequest",
            "ContentEncodingSettingsQueryCriteria" => "ContentEncodingSettingsQueryCriteria",
            "QueryContentEncodingSettingsByCriteriaResponse" => "QueryContentEncodingSettingsByCriteriaResponse",
            "QueryPlayersRequest" => "QueryPlayersRequest",
            "QueryPlayersResponse" => "QueryPlayersResponse",
            "PlayerDetails" => "PlayerDetails",
            "QueryPresentationsByIdRequest" => "QueryPresentationsByIdRequest",
            "QueryPresentationsByIdResponse" => "QueryPresentationsByIdResponse",
            "QueryPresentationsByCriteriaRequest" => "QueryPresentationsByCriteriaRequest",
            "PresentationQueryCriteria" => "PresentationQueryCriteria",
            "QueryPresentationsByCriteriaResponse" => "QueryPresentationsByCriteriaResponse",
            "QueryPresentationTemplatesByCriteriaRequest" => "QueryPresentationTemplatesByCriteriaRequest",
            "PresentationTemplateQueryCriteria" => "PresentationTemplateQueryCriteria",
            "QueryPresentationTemplatesByCriteriaResponse" => "QueryPresentationTemplatesByCriteriaResponse",
            "PresentationTemplateDetails" => "PresentationTemplateDetails",
            "PresentationTemplateContentDetails" => "PresentationTemplateContentDetails",
            "QueryPresentersByCriteriaRequest" => "QueryPresentersByCriteriaRequest",
            "PresenterQueryCriteria" => "PresenterQueryCriteria",
            "QueryPresentersByCriteriaResponse" => "QueryPresentersByCriteriaResponse",
            "PresenterDetails" => "PresenterDetails",
            "QueryPresentersByIdRequest" => "QueryPresentersByIdRequest",
            "QueryPresentersByIdResponse" => "QueryPresentersByIdResponse",
            "QueryResourcePermissionListRequest" => "QueryResourcePermissionListRequest",
            "ResourceIdentifier" => "ResourceIdentifier",
            "ResourceType" => "ResourceType",
            "QueryResourcePermissionListResponse" => "QueryResourcePermissionListResponse",
            "ResourcePermissionDetails" => "ResourcePermissionDetails",
            "QueryResourcePermissionsRequest" => "QueryResourcePermissionsRequest",
            "QueryResourcePermissionsResponse" => "QueryResourcePermissionsResponse",
            "ResourcePermissions" => "ResourcePermissions",
            "QuerySchedulesByCriteriaRequest" => "QuerySchedulesByCriteriaRequest",
            "PresentationScheduleQueryCriteria" => "PresentationScheduleQueryCriteria",
            "QueryScheduleBy" => "QueryScheduleBy",
            "QuerySchedulesByCriteriaResponse" => "QuerySchedulesByCriteriaResponse",
            "ScheduleDetails" => "ScheduleDetails",
            "ScheduleContentDetails" => "ScheduleContentDetails",
            "QuerySitePropertiesRequest" => "QuerySitePropertiesRequest",
            "QuerySitePropertiesResponse" => "QuerySitePropertiesResponse",
            "SiteProperties" => "SiteProperties",
            "QuerySlidesRequest" => "QuerySlidesRequest",
            "QuerySlidesResponse" => "QuerySlidesResponse",
            "SlideDetails" => "SlideDetails",
            "QuerySubFolderDetailsRequest" => "QuerySubFolderDetailsRequest",
            "QuerySubFolderDetailsResponse" => "QuerySubFolderDetailsResponse",
            "QueryTimeZonesByCriteriaRequest" => "QueryTimeZonesByCriteriaRequest",
            "TimeZoneQueryCriteria" => "TimeZoneQueryCriteria",
            "QueryTimeZonesByCriteriaResponse" => "QueryTimeZonesByCriteriaResponse",
            "MediasiteTimeZone" => "MediasiteTimeZone",
            "RemoveAuthTicketRequest" => "RemoveAuthTicketRequest",
            "RemoveAuthTicketResponse" => "RemoveAuthTicketResponse",
            "RemoveIdentityTicketRequest" => "RemoveIdentityTicketRequest",
            "RemoveIdentityTicketResponse" => "RemoveIdentityTicketResponse",
            "TestRequest" => "TestRequest",
            "TestResponse" => "TestResponse",
            "SearchRequest" => "SearchRequest",
            "SupportedSearchField" => "SupportedSearchField",
            "SupportedSearchType" => "SupportedSearchType",
            "SearchResponse" => "SearchResponse",
            "SearchResponseDetails" => "SearchResponseDetails",
            "UpdateScheduleRequest" => "UpdateScheduleRequest",
            "UpdateScheduleDetails" => "UpdateScheduleDetails",
            "UpdateScheduleResponse" => "UpdateScheduleResponse",
            "UpdatePresentationDetailsRequest" => "UpdatePresentationDetailsRequest",
            "PresentationUpdateDetails" => "PresentationUpdateDetails",
            "CreatePresenterDetails" => "CreatePresenterDetails",
            "UpdatePresentationDetailsResponse" => "UpdatePresentationDetailsResponse",
            "QueryRolesByIdRequest" => "QueryRolesByIdRequest",
            "QueryRolesByIdResponse" => "QueryRolesByIdResponse",
            "MediasiteRoleDetails" => "MediasiteRoleDetails",
            "QueryRolesByCriteriaRequest" => "QueryRolesByCriteriaRequest",
            "RoleQueryCriteria" => "RoleQueryCriteria",
            "QueryRolesByCriteriaResponse" => "QueryRolesByCriteriaResponse",
            "CreateRole" => "CreateRole",
            "CreateRoleResponse" => "CreateRoleResponse",
            "UpdateRole" => "UpdateRole",
            "UpdateRoleResponse" => "UpdateRoleResponse",
            "QueryTotalViews" => "QueryTotalViews",
            "QueryTotalViewsResponse" => "QueryTotalViewsResponse",
            "QueryDatesWatched" => "QueryDatesWatched",
            "QueryDatesWatchedResponse" => "QueryDatesWatchedResponse",
            "QueryPlatformUsage" => "QueryPlatformUsage",
            "QueryPlatformUsageResponse" => "QueryPlatformUsageResponse",
            "QueryTotalViewsById" => "QueryTotalViewsById",
            "QueryTotalViewsByIdResponse" => "QueryTotalViewsByIdResponse",
            "QueryPresentationUsage" => "QueryPresentationUsage",
            "QueryPresentationUsageResponse" => "QueryPresentationUsageResponse",
            "QueryServerUsage" => "QueryServerUsage",
            "QueryServerUsageResponse" => "QueryServerUsageResponse",
            "QueryActiveConnections" => "QueryActiveConnections",
            "QueryActiveConnectionsResponse" => "QueryActiveConnectionsResponse",
            "QueryActivePresentations" => "QueryActivePresentations",
            "QueryActivePresentationsResponse" => "QueryActivePresentationsResponse",
            "QueryActivePresentationConnections" => "QueryActivePresentationConnections",
            "QueryActivePresentationConnectionsResponse" => "QueryActivePresentationConnectionsResponse",
            "CreateAuthTicket" => "CreateAuthTicket",
            "CreateAuthTicketResponse" => "CreateAuthTicketResponse",
            "CreateSubFolder" => "CreateSubFolder",
            "CreateSubFolderResponse" => "CreateSubFolderResponse",
            "CreateIdentityTicket" => "CreateIdentityTicket",
            "CreateIdentityTicketResponse" => "CreateIdentityTicketResponse",
            "CreatePresentationFromTemplate" => "CreatePresentationFromTemplate",
            "CreatePresentationFromTemplateResponse" => "CreatePresentationFromTemplateResponse",
            "CreatePresentationFromSchedule" => "CreatePresentationFromSchedule",
            "CreatePresentationFromScheduleResponse" => "CreatePresentationFromScheduleResponse",
            "CreatePresentationLike" => "CreatePresentationLike",
            "CreatePresentationLikeResponse" => "CreatePresentationLikeResponse",
            "CreatePresentationPoll" => "CreatePresentationPoll",
            "CreatePresentationPollResponse" => "CreatePresentationPollResponse",
            "CreateScheduleFromTemplate" => "CreateScheduleFromTemplate",
            "CreateScheduleFromTemplateResponse" => "CreateScheduleFromTemplateResponse",
            "GetVersion" => "GetVersion",
            "GetVersionResponse" => "GetVersionResponse",
            "Login" => "Login",
            "LoginResponse" => "LoginResponse",
            "Logout" => "Logout",
            "LogoutResponse" => "LogoutResponse",
            "QueryAuthTicketProperties" => "QueryAuthTicketProperties",
            "QueryAuthTicketPropertiesResponse" => "QueryAuthTicketPropertiesResponse",
            "QueryCatalogShares" => "QueryCatalogShares",
            "QueryCatalogSharesResponse" => "QueryCatalogSharesResponse",
            "QueryChapterPoints" => "QueryChapterPoints",
            "QueryChapterPointsResponse" => "QueryChapterPointsResponse",
            "QueryClientIpAddress" => "QueryClientIpAddress",
            "QueryClientIpAddressResponse" => "QueryClientIpAddressResponse",
            "QueryContentServersByCriteria" => "QueryContentServersByCriteria",
            "QueryContentServersByCriteriaResponse" => "QueryContentServersByCriteriaResponse",
            "QueryFoldersById" => "QueryFoldersById",
            "QueryFoldersByIdResponse" => "QueryFoldersByIdResponse",
            "QueryFoldersWithPresentations" => "QueryFoldersWithPresentations",
            "QueryFoldersWithPresentationsResponse" => "QueryFoldersWithPresentationsResponse",
            "QueryIdentityTicketProperties" => "QueryIdentityTicketProperties",
            "QueryIdentityTicketPropertiesResponse" => "QueryIdentityTicketPropertiesResponse",
            "QueryContentEncodingSettingsById" => "QueryContentEncodingSettingsById",
            "QueryContentEncodingSettingsByIdResponse" => "QueryContentEncodingSettingsByIdResponse",
            "QueryContentEncodingSettingsByCriteria" => "QueryContentEncodingSettingsByCriteria",
            "QueryContentEncodingSettingsByCriteriaResponse" => "QueryContentEncodingSettingsByCriteriaResponse",
            "QueryPlayers" => "QueryPlayers",
            "QueryPlayersResponse" => "QueryPlayersResponse",
            "QueryPresentationsById" => "QueryPresentationsById",
            "QueryPresentationsByIdResponse" => "QueryPresentationsByIdResponse",
            "QueryPresentationsByCriteria" => "QueryPresentationsByCriteria",
            "QueryPresentationsByCriteriaResponse" => "QueryPresentationsByCriteriaResponse",
            "QueryPresentationTemplatesByCriteria" => "QueryPresentationTemplatesByCriteria",
            "QueryPresentationTemplatesByCriteriaResponse" => "QueryPresentationTemplatesByCriteriaResponse",
            "QueryPresentersByCriteria" => "QueryPresentersByCriteria",
            "QueryPresentersByCriteriaResponse" => "QueryPresentersByCriteriaResponse",
            "QueryPresentersById" => "QueryPresentersById",
            "QueryPresentersByIdResponse" => "QueryPresentersByIdResponse",
            "QueryResourcePermissionList" => "QueryResourcePermissionList",
            "QueryResourcePermissionListResponse" => "QueryResourcePermissionListResponse",
            "QueryResourcePermissions" => "QueryResourcePermissions",
            "QueryResourcePermissionsResponse" => "QueryResourcePermissionsResponse",
            "QuerySchedulesByCriteria" => "QuerySchedulesByCriteria",
            "QuerySchedulesByCriteriaResponse" => "QuerySchedulesByCriteriaResponse",
            "QuerySiteProperties" => "QuerySiteProperties",
            "QuerySitePropertiesResponse" => "QuerySitePropertiesResponse",
            "QuerySlides" => "QuerySlides",
            "QuerySlidesResponse" => "QuerySlidesResponse",
            "QuerySubFolderDetails" => "QuerySubFolderDetails",
            "QuerySubFolderDetailsResponse" => "QuerySubFolderDetailsResponse",
            "QueryTimeZonesByCriteria" => "QueryTimeZonesByCriteria",
            "QueryTimeZonesByCriteriaResponse" => "QueryTimeZonesByCriteriaResponse",
            "RemoveAuthTicket" => "RemoveAuthTicket",
            "RemoveAuthTicketResponse" => "RemoveAuthTicketResponse",
            "RemoveIdentityTicket" => "RemoveIdentityTicket",
            "RemoveIdentityTicketResponse" => "RemoveIdentityTicketResponse",
            "Test" => "Test",
            "TestResponse" => "TestResponse",
            "Search" => "Search",
            "SearchResponse" => "SearchResponse",
            "UpdateSchedule" => "UpdateSchedule",
            "UpdateScheduleResponse" => "UpdateScheduleResponse",
            "UpdatePresentationDetails" => "UpdatePresentationDetails",
            "UpdatePresentationDetailsResponse" => "UpdatePresentationDetailsResponse",
            "QueryRolesById" => "QueryRolesById",
            "QueryRolesByIdResponse" => "QueryRolesByIdResponse",
            "QueryRolesByCriteria" => "QueryRolesByCriteria",
            "QueryRolesByCriteriaResponse" => "QueryRolesByCriteriaResponse"
        );

        try {
            if( strtoupper(substr($serviceLocation, -5)) != "?WSDL" ) {
                $serviceLocation .= "?WSDL";
            }
            $this->proxy = new SoapClient($serviceLocation, array( "classmap" => $edas_class_map, "exceptions" => true ));
        } catch( Exception $ex ) {
            throw($ex);
        }
        $this->Ticket = $ticket;
        if( isset($impersonationUsername) && $impersonationUsername != '' ) {
            $this->ImpersonationUsername = $impersonationUsername;
        }
    }

    /**
     * Creates a role with a given set of details
     *
     * @param CreateRoleDetails $RoleDetails
     * @param string $Ticket
     * @return CreateRoleResponse
     */
    public function CreateRole( CreateRoleDetails $RoleDetails, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new CreateRoleRequest($reqTicket, $RoleDetails, $ImpersonationUsername);
        $container = new CreateRole($req);
        return $this->proxy->CreateRole($container)->CreateRoleResult;
    }

    /**
     * Update a role
     *
     * @param UpdateRoleDetails $RoleDetails
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return UpdateRoleResponse
     */
    public function UpdateRole( UpdateRoleDetails $RoleDetails, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new UpdateRoleRequest($reqTicket, $RoleDetails, $ImpersonationUsername);
        $container = new UpdateRole($req);
        return $this->proxy->UpdateRole($container)->UpdateRoleResult;
    }

    /**
     * Queries total view count for a supplied array of string Ids and {@link AnalyticsRequestType}
     *
     * @param array $IdList array of Ids
     * @param AnalyticsRequestType $RequestType
     * @param QueryOptions $Options
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryTotalViewsResponse
     */
    public function QueryTotalViews( array $IdList, $RequestType, QueryOptions $Options = null, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryTotalViewsRequest($reqTicket, $IdList, $RequestType, $Options, $ImpersonationUsername);
        $container = new QueryTotalViews($req);
        return $this->proxy->QueryTotalViews($container)->QueryTotalViewsResult;
    }

    /**
     * Queries the dates a given presentation was watched
     *
     * @param string $Id
     * @param AnalyticsRequestType $RequestType
     * @param QueryOptions $Options
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryDatesWatchedResponse
     */
    public function QueryDatesWatched( $Id, $RequestType, QueryOptions $Options = null, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryAnalyticsByIdRequest($reqTicket, $Id, $RequestType, $Options, $ImpersonationUsername);
        $container = new QueryDatesWatched($req);
        return $this->proxy->QueryDatesWatched($container)->QueryDatesWatchedResult;
    }

    /**
     * Query platform configurations used to watch a given presentation
     *
     * @param string $Id
     * @param AnalyticsRequestType $RequestType
     * @param QueryOptions $Options
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryPlatformUsageResponse
     */
    public function QueryPlatformUsage( $Id, $RequestType, QueryOptions $Options = null, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryAnalyticsByIdRequest($reqTicket, $Id, $RequestType, $Options, $ImpersonationUsername);
        $container = new QueryPlatformUsage($req);
        return $this->proxy->QueryPlatformUsage($container)->QueryPlatformUsageResult;
    }

    /**
     * Queries the totals views of a particular Mediasite entity
     *
     * @param string $Id
     * @param AnalyticsRequestType $RequestType
     * @param AnalyticsRequestType $ChildType
     * @param QueryOptions $Options
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryTotalViewsResponse
     */
    public function QueryTotalViewsById( $Id, $RequestType, $ChildType, QueryOptions $Options = null, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryTotalViewsByIdRequest($reqTicket, $Id, $RequestType, $ChildType, $Options, $ImpersonationUsername);
        $container = new QueryTotalViewsById($req);
        return $this->proxy->QueryTotalViewsById($container)->QueryTotalViewsByIdResult;
    }

    /**
     * Queries Mediasite for presentaion usage for a given client type and identifier
     *
     * @param array $ClientIdList array of strings muyst be valid IP Addresses if $ClientType is AnalyticsRequestType::IPAddress
     * @param AnalyticsRequestType $ClientType only IPAddress and User are valid pn this request
     * @param string $PresentationId
     * @param QueryOptions $Options
     * @param string $Ticket
     * @param string $ImpoersonationUsername
     * @return QueryPresentationUsageResponse
     */
    public function QueryPresentationUsage( array $ClientIdList, $ClientType, $PresentationId,
            QueryOptions $Options = null, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryPresentationUsageRequest($reqTicket, $ClientIdList, $ClientType, $PresentationId, $Options,
                        $ImpersonationUsername);
        $container = new QueryPresentationUsage($req);
        return $this->proxy->QueryPresentationUsage($container)->QueryPresentationUsageResult;
    }

    /**
     * Queries Mediasite for some server usage details
     *
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryServerUsageResponse
     */
    public function QueryServerUsage( $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryServerUsageRequest($reqTicket, $ImpersonationUsername);
        $container = new QueryServerUsage($req);
        return $this->proxy->QueryServerUsage($container)->QueryServerUsageResult;
    }

    /**
     * Query the active connections on the Mediasite instance
     *
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryActiveConnectionsResponse
     */
    public function QueryActiveConnections( $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryActiveConnectionsRequest($reqTicket, $ImpersonationUsername);
        $container = new QueryActiveConnections($req);
        return $this->proxy->QueryActiveConnections($container)->QueryActiveConnectionsResult;
    }

    /**
     * Query Mediasite for Presentations that are currently active
     *
     * @param array $PresentationIdList array of strings
     * @param QueryOptions $Options
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryActiveConnectionsResponse
     */
    public function QueryActivePresentations( array $PresentationIdList, QueryOptions $Options, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryActivePresentationsRequest($reqTicket, $PresentationIdList, $Options, $ImpersonationUsername);
        $container = new QueryActivePresentations($req);
        return $this->proxy->QueryActivePresentations($container)->QueryActivePresentationsResult;
    }

    /**
     * Query for a structured array of {@link ActiveConnection} for a given Presentation
     *
     * @param string $PresentationId
     * @param QueryOptions $Options
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryActivePresentationConnectionsResponse
     */
    public function QueryActivePresentationConnections( $PresentationId, QueryOptions $Options = null, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryActivePresentationConnectionsRequest($reqTicket, $PresentationId, $Options,
                        $ImpersonationUsername);
        $container = new QueryActivePresentationConnections($req);
        return $this->proxy->QueryActivePresentationConnections($container)->QueryActivePresentationConnectionsResult;
    }

    /**
     * Creates an authorization ticket to a particular resource for a given username/ipaddress combination
     * One usage is as one mechanism for creating playback tickets for Presentations
     * Resource must be valid for PermissionMask.Execute for this call to succeed
     *
     * @param string $IPAddress
     * @param int $MinutesToLive
     * @param string $ResourceId
     * @param string $Username
     * @return CreateAuthTicketResponse
     */
    public function CreateAuthTicket( $IPAddress, $MinutesToLive, $ResourceId, $Username ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $settings = new CreateAuthTicketSettings($IPAddress, $MinutesToLive, $ResourceId, $Username);
        $req = new CreateAuthTicketRequest($reqTicket, $settings);
        $container = new CreateAuthTicket($req);
        return $this->proxy->CreateAuthTicket($container)->CreateAuthTicketResult;
    }

    /**
     * Creates a folder based on provided details
     *
     * @param string $Name
     * @param ResourcePermissionEntry $PermissionList Array of {@link ResourcePermissionEntries}
     * @param string $Description
     * @param string $ParentFolderId if not provided folder will be created in the root folder
     * @param string $ImpersonationUsername This user will be the owner of the resulting folder
     * @return CreateSubFolderResponse
     */
    public function CreateSubFolder( $Name, $PermissionList, $Description = null, $ParentFolderId = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new CreateSubFolderRequest($reqTicket, $Name, $PermissionList, $Description, $ParentFolderId,
                        $ImpersonationUsername);
        $container = new CreateSubFolder($req);
        return $this->proxy->CreateSubFolder($container)->CreateSubFolderResult;
    }

    /**
     * Creates a new identity ticket for a given user
     *
     * @param CreateIdentityTicketSettings $Settings
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return CreateIdentityTicketResponse
     */
    public function CreateIdentityTicket( CreateIdentityTicketSettings $Settings, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new CreateIdentityTicketRequest($reqTicket, $Settings, $ImpersonationUsername);
        $container = new CreateIdentityTicket($req);
        return $this->proxy->CreateIdentityTicket($container)->CreateIdentityTicketResult;
    }

    /**
     * Creates a new presentation from a provided template
     *
     * @param CreatePresentationFromTemplateDetails $CreateDetails
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return CreatePresentationFromTemplateResponse
     */
    public function CreatePresentationFromTemplate( CreatePresentationFromTemplateDetails $CreateDetails,
            $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new CreatePresentationFromTemplateRequest($reqTicket, $CreateDetails, $ImpersonationUsername);
        $container = new CreatePresentationFromTemplate($req);
        return $this->proxy->CreatePresentationFromTemplate($container)->CreatePresentationFromTemplateResult;
    }

    /**
     * Creates a Presentations based on a provided Presentation Schedule
     *
     * @param CreatePresentationFromScheduleDetails $CreationDetails
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return CreatePresentationFromScheduleResponse
     */
    public function CreatePresentationFromSchedule( CreatePresentationFromScheduleDetails $CreationDetails,
            $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new CreatePresentationFromScheduleRequest($reqTicket, $CreationDetails, $ImpersonationUsername);
        $container = new CreatePresentationFromSchedule($req);
        return $this->proxy->CreatePresentationFromSchedule($container)->CreatePresentationFromScheduleResult;
    }

    /**
     * Creates a presentation based upon the settings from another, already existing presentation
     *
     * @param CreatePresentationLikeDetails $CreationDetails
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return type
     */
    public function CreatePresentationLike( CreatePresentationLikeDetails $CreationDetails, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new CreatePresentationLikeRequest($reqTicket, $CreationDetails, $ImpersonationUsername);
        $container = new CreatePresentationLike($req);
        return $this->proxy->CreatePresentationLike($container)->CreatePresentationLikeResult;
    }

    /**
     * Creates a Poll for a given Presentation
     *
     * @param CreatePresentationPollDetails $CreationDetails
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return CreatePresentationPollResponse
     */
    public function CreatePresentationPoll( CreatePresentationPollDetails $CreationDetails, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $req = new CreatePresentationPollRequest($reqTicket, $CreationDetails, $ImpersonationUsername);
        $container = new CreatePresentationPoll($req);
        return $this->proxy->CreatePresentationPoll($container)->CreatePresentationPollResult;
    }

    /**
     * Creates a Schedule from provided details
     *
     * @param CreateScheduleFromTemplateDetails $Schedule
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return CreateScheduleFromTemplateResponse
     */
    public function CreateScheduleFromTemplate( CreateScheduleFromTemplateDetails $Schedule, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new CreateScheduleFromTemplateRequest($reqTicket, $Schedule, $ImpersonationUsername);
        $container = new CreateScheduleFromTemplate($req);
        return $this->proxy->CreateScheduleFromTemplate($container)->CreateScheduleFromTemplateResult;
    }

    /**
     * Gets the version of the Eda service (in the form of the url of the service endpoint)
     *
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return GetVersionResponse
     */
    public function GetVersion( $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new GetVersionRequest($reqTicket, $ImpersonationUsername);
        $container = new GetVersion($req);
        return $this->proxy->GetVersion($container)->GetVersionResult;
    }

    /**
     * Logins session in using the provided username and password
     *
     * Alternatively also sets the user for the current session to impersonate and the name of the calling application
     *
     * @param string $Username
     * @param string $Password
     * @param string $ApplicationName
     * @param string $ImpersonationUsername
     * @return LoginResponse
     */
    public function Login( $Username, $Password, $ApplicationName = null, $ImpersonationUsername = null ) {
        $req = new LoginRequest($Username, $Password, $ApplicationName, $ImpersonationUsername);
        $container = new Login($req);
        $response = $this->proxy->Login($container)->LoginResult;

        if( isset($ImpersonationUsername) && $ImpersonationUsername != '' ) {
            $this->ImpersonationUsername = $ImpersonationUsername;
        } else {
            //If I'm not impersonating anyone, I'm "impersonating" myself
            $this->ImpersonationUsername = $Username;
        }
        $this->Ticket = $response->UserTicket;

        return $response;
    }

    /**
     * Logs out the session represented by the provided or cached identity ticket
     *
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return LogoutResponse
     */
    public function Logout( $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new LogoutRequest($reqTicket, $ImpersonationUsername);
        $container = new Logout($req);
        return $this->proxy->Logout($container)->LogoutResult;
    }

    /**
     * Queries Service for properties of an Auth Ticket, and optionally renews it
     *
     * @param string $AuthTicketId
     * @param int $MinutesToLive
     * @param bool $RenewTicket
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryAuthTicketPropertiesResponse
     */
    public function QueryAuthTicketProperties( $AuthTicketId, $MinutesToLive, $RenewTicket, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryAuthTicketPropertiesRequest($reqTicket, $AuthTicketId, $MinutesToLive, $RenewTicket, $ImpersonationUsername);
        $container = new QueryAuthTicketProperties($req);
        return $this->proxy->QueryAuthTicketProperties($container)->QueryAuthTicketPropertiesResult;
    }

    /**
     * Queries Mediasite Catalogs that the logged-in user has the given access to
     *
     * @param array $PermissionMask of {@link ResourcePermissionMask}
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryCatalogSharesResponse
     */
    public function QueryCatalogShares( array $PermissionMask, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryCatalogSharesRequest($reqTicket, $PermissionMask, $ImpersonationUsername);
        $container = new QueryCatalogShares($req);
        return $this->proxy->QueryCatalogShares($container)->QueryCatalogSharesResult;
    }

    /**
     * Queries a given Presenatation for Chapter Points
     *
     * @param int $Count
     * @param string $PresentationId
     * @param int $StartIndex
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryChapterPointsResponse
     */
    public function QueryChapterPoints( $Count, $PresentationId, $StartIndex, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryChapterPointsRequest($reqTicket, $Count, $PresentationId, $StartIndex, $ImpersonationUsername);
        $container = new QueryChapterPoints($req);
        return $this->proxy->QueryChapterPoints($container)->QueryChapterPointsResult;
    }

    /**
     * Returns the calling client's IP Address, and optionally the client's dns name
     *
     * @param bool $ResolveDnsName
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryClientIpAddressResponse
     */
    public function QueryClientIpAddress( $ResolveDnsName, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryClientIpAddressRequest($reqTicket, $ResolveDnsName, $ImpersonationUsername);
        $container = new QueryClientIpAddress($req);
        return $this->proxy->QueryClientIpAddress($container)->QueryClientIpAddressResult;
    }

    /**
     * Queries Content Servers for a given Presentation and the given options
     *
     * @param ContentServerQueryCriteria $Criteria
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryContentServersByCriteriaResponse
     */
    public function QueryContentServersByCriteria( ContentServerQueryCriteria $Criteria, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryContentServersByCriteriaRequest($reqTicket, $Criteria, $ImpersonationUsername);
        $container = new QueryContentServersByCriteria($req);
        return $this->proxy->QueryContentServersByCriteria($container)->QueryContentServersByCriteriaResult;
    }

    /**
     * Queries details of the given folder
     *
     * @param array $FolderIdList array of strings
     * @param ResourcePermissionMask $PermissionMask
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryFoldersByIdResponse
     */
    public function QueryFoldersById( array $FolderIdList, $PermissionMask, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryFoldersByIdRequest($reqTicket, $FolderIdList, $PermissionMask, $ImpersonationUsername);
        $container = new QueryFoldersById($req);
        return $this->proxy->QueryFoldersById($container)->QueryFoldersByIdResult;
    }

    /**
     * Queries all Folder that contain Presentations
     *
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryFoldersWithPresentationsResponse
     */
    public function QueryFoldersWithPresentations( $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryFoldersWithPresentationsRequest($reqTicket, $ImpersonationUsername);
        $container = new QueryFoldersWithPresentations($req);
        return $this->proxy->QueryFoldersWithPresentations($container)->QueryFoldersWithPresentationsResult;
    }

    /**
     * Queries Properties of the provided Identity ticket, and optionally renews it
     *
     * Use this method to determine if the ticket you've cached is still valid
     *
     * @param string $IdentityTicket
     * @param int $MinutesToLive
     * @param bool $RenewTicket
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryIdentityTicketPropertiesResponse
     */
    public function QueryIdentityTicketProperties( $IdentityTicket, $MinutesToLive, $RenewTicket, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryIdentityTicketPropertiesRequest($reqTicket, $IdentityTicket, $MinutesToLive, $RenewTicket, $ImpersonationUsername);
        $container = new QueryIdentityTicketProperties($req);
        return $this->proxy->QueryIdentityTicketProperties($container)->QueryIdentityTicketPropertiesResult;
    }

    /**
     * Queies Encoding Settings for a given Id
     *
     * @param array $ContentEncodingSettingsIds array of strings
     * @param string $Ticket
     * @param strig $ImpersonationUsername
     * @return QueryContentEncodingSettingsByIdResponse
     */
    public function QueryContentEncodingSettingsById( array $ContentEncodingSettingsIds, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryContentEncodingSettingsByIdRequest($reqTicket, $ContentEncodingSettingsIds, $ImpersonationUsername);
        $container = new QueryContentEncodingSettingsById($req);
        return $this->proxy->QueryContentEncodingSettingsById($container)->QueryContentEncodingSettingsByIdResult;
    }

    /**
     * Queries Encoding Settings based on provided criteria
     *
     * @param ContentEncodingSettingsQueryCriteria $Criteria
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryContentEncodingSettingsByCriteriaResponse
     */
    public function QueryContentEncodingSettingsByCriteria( ContentEncodingSettingsQueryCriteria $Criteria,
            $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryContentEncodingSettingsByCriteriaRequest($reqTicket, $Criteria, $ImpersonationUsername);
        $container = new QueryContentEncodingSettingsByCriteria($req);
        return $this->proxy->QueryContentEncodingSettingsByCriteria($container)->QueryContentEncodingSettingsByCriteriaResult;
    }

    /**
     * Queries details of available Players
     *
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryPlayersResponse
     */
    public function QueryPlayers( $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryPlayersRequest($reqTicket, $ImpersonationUsername);
        $container = new QueryPlayers($req);
        return $this->proxy->QueryPlayers($container)->QueryPlayersResult;
    }

    /**
     * Queries details of the provided array of Presentations
     *
     * @param array $PresentationIds
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryPresentationsByIdResponse
     */
    public function QueryPresentationsById( array $PresentationIds, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryPresentationsByIdRequest($reqTicket, $PresentationIds, $ImpersonationUsername);
        $container = new QueryPresentationsById($req);
        return $this->proxy->QueryPresentationsById($container)->QueryPresentationsByIdResult;
    }

    /**
     * Queries Presentationsbase on provided criteria
     *
     * @param PresentationQueryCriteria $QueryCriteria
     * @param QueryOptions $Options
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryPresentationsByCriteriaResponse
     */
    public function QueryPresentationsByCriteria( PresentationQueryCriteria $QueryCriteria,
            QueryOptions $Options = null, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryPresentationsByCriteriaRequest($reqTicket, $QueryCriteria, $Options, $ImpersonationUsername);
        $container = new QueryPresentationsByCriteria($req);
        return $this->proxy->QueryPresentationsByCriteria($container)->QueryPresentationsByCriteriaResult;
    }

    /**
     * Queries Templates by provided criteria
     *
     * @param PresentationTemplateQueryCriteria $QueryCriteria
     * @param QueryOptions $Options
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryPresentationTemplatesByCriteriaResponse
     */
    public function QueryPresentationTemplatesByCriteria( PresentationTemplateQueryCriteria $QueryCriteria,
            QueryOptions $Options = null, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryPresentationTemplatesByCriteriaRequest($reqTicket, $QueryCriteria, $Options, $ImpersonationUsername);
        $container = new QueryPresentationTemplatesByCriteria($req);
        return $this->proxy->QueryPresentationTemplatesByCriteria($container)->QueryPresentationTemplatesByCriteriaResult;
    }

    /**
     * Queries Presenters based on provided criteria
     *
     * @param PresenterQueryCriteria $QueryCriteria
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryPresentersByCriteriaResponse
     */
    public function QueryPresentersByCriteria( PresenterQueryCriteria $QueryCriteria, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryPresentersByCriteriaRequest($reqTicket, $QueryCriteria, $ImpersonationUsername);
        $container = new QueryPresentersByCriteria($req);
        return $this->proxy->QueryPresentersByCriteria($container)->QueryPresentersByCriteriaResult;
    }

    /**
     * Queries Presenters from a given list of Ids
     *
     * @param array $PresenterIdList strings
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryPresentersByIdResponse
     */
    public function QueryPresentersById( array $PresenterIdList, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryPresentersByIdRequest($reqTicket, $PresenterIdList, $ImpersonationUsername);
        $container = new QueryPresentersById($req);
        return $this->proxy->QueryPresentersById($container)->QueryPresentersByIdResult;
    }

    /**
     * Queries a list of Roles that have permissions to a provided resource, along with the permissions each Role is
     *  granted
     *
     * @param ResourceIdentifier $Resource
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryResourcePermissionListResponse
     */
    public function QueryResourcePermissionList( ResourceIdentifier $Resource, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryResourcePermissionListRequest($reqTicket, $Resource, $ImpersonationUsername);
        $container = new QueryResourcePermissionList($req);
        return $this->proxy->QueryResourcePermissionList($container)->QueryResourcePermissionListResult;
    }

    /**
     * Queries impersonated user's permissions on the provided Resources
     *
     * @param array $Resource of {@link ResourceIdentifier}
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryResourcePermissionsResponse
     */
    public function QueryResourcePermissions( array $Resource, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryResourcePermissionsRequest($reqTicket, $Resource, $ImpersonationUsername);
        $container = new QueryResourcePermissions($req);
        return $this->proxy->QueryResourcePermissions($container)->QueryResourcePermissionsResult;
    }

    /**
     * Queries Presentation Schedules based on provided criteria
     *
     * @param PresentationScheduleQueryCriteria $Criteria
     * @param QueryOptions $Options
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QuerySchedulesByCriteriaResponse
     */
    public function QuerySchedulesByCriteria( PresentationScheduleQueryCriteria $Criteria, QueryOptions $Options = null,
            $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QuerySchedulesByCriteriaRequest($reqTicket, $Criteria, $Options, $ImpersonationUsername);
        $container = new QuerySchedulesByCriteria($req);
        return $this->proxy->QuerySchedulesByCriteria($container)->QuerySchedulesByCriteriaResult;
    }

    /**
     * Queries Mediasite Site Properties
     *
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QuerySitePropertiesResponse
     */
    public function QuerySiteProperties( $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QuerySitePropertiesRequest($reqTicket, $ImpersonationUsername);
        $container = new QuerySiteProperties($req);
        return $this->proxy->QuerySiteProperties($container)->QuerySitePropertiesResult;
    }

    /**
     * Queries the requested number of slides from the provided Presentation starting with the provided index
     *
     * @param int $Count
     * @param string $PresentationId
     * @param int $StartIndex
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QuerySlidesResponse
     */
    public function QuerySlides( $Count, $PresentationId, $StartIndex, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QuerySlidesRequest($reqTicket, $Count, $PresentationId, $StartIndex, $ImpersonationUsername);
        $container = new QuerySlides($req);
        return $this->proxy->QuerySlides($container)->QuerySlidesResult;
    }

    /**
     * Queries details of the Subfolders of a list of Folder Ids where the impersonated user has the asserted permission
     *
     * If the impersonated user doesn't have the asserted permission for any of the folders, and error is thrown
     *
     * @param bool $IncludeAllSubFolders
     * @param array $ParentFolderIdList
     * @param ResourcePermissionMask $PermissionMask
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QuerySubFolderDetailsResponse
     */
    public function QuerySubFolderDetails( $IncludeAllSubFolders, array $ParentFolderIdList, $PermissionMask,
            $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QuerySubFolderDetailsRequest($reqTicket, $IncludeAllSubFolders, $ParentFolderIdList, $PermissionMask,
                        $ImpersonationUsername);
        $container = new QuerySubFolderDetails($req);
        return $this->proxy->QuerySubFolderDetails($container)->QuerySubFolderDetailsResult;
    }

    /**
     * Queries TimeZone details for a list of TimeZone Ids (integer values as stored in Mediasite)
     *
     * Using an empty array in the TimeZoneCriteria will return all configured TimeZones
     *
     * @param TimeZoneQueryCriteria $Criteria
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryTimeZonesByCriteriaResponse
     */
    public function QueryTimeZonesByCriteria( TimeZoneQueryCriteria $Criteria, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryTimeZonesByCriteriaRequest($reqTicket, $Criteria, $ImpersonationUsername);
        $container = new QueryTimeZonesByCriteria($req);
        return $this->proxy->QueryTimeZonesByCriteria($container)->QueryTimeZonesByCriteriaResult;
    }

    /**
     * Removes an auth ticket created by CreateAuthTicket
     *
     * @param string $AuthTicket
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return RemoveAuthTicketResponse
     */
    public function RemoveAuthTicket( $AuthTicket, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new RemoveAuthTicketRequest($reqTicket, $AuthTicket, $ImpersonationUsername);
        $container = new RemoveAuthTicket($req);
        return $this->proxy->RemoveAuthTicket($container)->RemoveAuthTicketResult;
    }

    /**
     * Removes the provided Identity Ticket
     *
     * It is possible to remove the Identity ticket of the requesting user
     *
     * @param string $IdentityTicket
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return RemoveIdentityTicketResponse
     */
    public function RemoveIdentityTicket( $IdentityTicket, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new RemoveIdentityTicketRequest($reqTicket, $IdentityTicket, $ImpersonationUsername);
        $container = new RemoveIdentityTicket($req);
        return $this->proxy->RemoveIdentityTicket($container)->RemoveIdentityTicketResult;
    }

    /**
     * Test API connection
     *
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return TestResponse
     */
    public function Test( $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new TestRequest($reqTicket, $ImpersonationUsername);
        $container = new Test($req);
        return $this->proxy->Test($container)->TestResult;
    }

    /**
     * Search for Mediasite entities based on provided citeria
     *
     * @param array $Fields {@link SupportedSearchField}
     * @param string $SearchText
     * @param array $Types {@link SupportedSearchType}
     * @param QueryOptions $Options
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return SearchResponse
     */
    public function Search( array $Fields, $SearchText, array $Types, QueryOptions $Options, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new SearchRequest($reqTicket, $Fields, $SearchText, $Types, $Options, $ImpersonationUsername);
        $container = new Search($req);
        return $this->proxy->Search($container)->SearchResult;
    }

    /**
     *
     * @param UpdateScheduleDetails $Schedule
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return UpdateScheduleResponse
     */
    public function UpdateSchedule( UpdateScheduleDetails $Schedule, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new UpdateScheduleRequest($reqTicket, $Schedule, $ImpersonationUsername);
        $container = new UpdateSchedule($req);
        return $this->proxy->UpdateSchedule($container)->UpdateScheduleResult;
    }

    /**
     * Updates a given Presentation based on the provided Prsentation Details
     *
     * @param string $PresentationId
     * @param PresentationUpdateDetails $Details
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return UpdatePresentationDetailsResponse
     */
    public function UpdatePresentationDetails( $PresentationId, PresentationUpdateDetails $Details, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new UpdatePresentationDetailsRequest($reqTicket, $PresentationId, $Details, $ImpersonationUsername);
        $container = new UpdatePresentationDetails($req);
        return $this->proxy->UpdatePresentationDetails($container)->UpdatePresentationDetailsResult;
    }

    /**
     * Queries Role details from a provided list of Role Ids
     *
     * @param array $RoleIdList must be GUID-formatted
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryRolesByIdResponse
     */
    public function QueryRolesById( array $RoleIdList, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryRolesByIdRequest($reqTicket, $RoleIdList, $ImpersonationUsername);
        $container = new QueryRolesById($req);
        return $this->proxy->QueryRolesById($container)->QueryRolesByIdResult;
    }

    /**
     * Queries Role details based on provided criteria.
     *
     * If the criteria parameters do not represent the same role, no results will be returned.
     *
     * @param RoleQueryCriteria $Criteria
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryRolesByCriteriaResponse
     */
    public function QueryRolesByCriteria( RoleQueryCriteria $Criteria, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryRolesByCriteriaRequest($reqTicket, $Criteria, $ImpersonationUsername);
        $container = new QueryRolesByCriteria($req);
        return $this->proxy->QueryRolesByCriteria($container)->QueryRolesByCriteriaResult;
    }

    /*  final 6.0.2methods  */

    /**
     *  Irretrievably deletes the requested Role
     *
     * @param string $Id GUID-formatted
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return DeleteResponse
     */
    public function DeleteRole( $Id, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new DeleteRequest($reqTicket, $Id, $ImpersonationUsername);
        $container = new DeleteRole($req);
        return $this->proxy->DeleteRole($container)->DeleteRoleResult;
    }

    /**
     * Recycles the requested Catalog
     *
     * @param string $Id
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return DeleteResponse
     */
    public function DeleteCatalog( $Id, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new DeleteRequest($reqTicket, $Id, $ImpersonationUsername);
        $container = new DeleteCatalog($req);
        return $this->proxy->DeleteCatalog($container)->DeleteCatalogResult;
    }

    /**
     * Recycles the requested Schedule
     *
     * @param string $Id
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return DeleteResponse
     */
    public function DeleteSchedule( $Id, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new DeleteRequest($reqTicket, $Id, $ImpersonationUsername);
        $container = new DeleteSchedule($req);
        return $this->proxy->DeleteSchedule($container)->DeleteScheduleResult;
    }

    /**
     * Recycles the requested Presentation
     *
     * @param string $Id
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return DeleteResponse
     */
    public function DeletePresentation( $Id, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new DeleteRequest($reqTicket, $Id, $ImpersonationUsername);
        $container = new DeletePresentation($req);
        return $this->proxy->DeletePresentation($container)->DeletePresentationResult;
    }

    /**
     * Recycles the requested Player
     *
     * @param string $Id
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return DeleteResponse
     */
    public function DeletePlayer( $Id, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new DeleteRequest($reqTicket, $Id, $ImpersonationUsername);
        $container = new DeletePlayer($req);
        return $this->proxy->DeletePlayer($container)->DeletePlayerResult;
    }

    /**
     * Recycles the requested PresentationTemplate
     *
     * @param string $Id
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return DeleteResponse
     */
    public function DeletePresentationTemplate( $Id, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new DeleteRequest($reqTicket, $Id, $ImpersonationUsername);
        $container = new DeletePresentationTemplate($req);
        return $this->proxy->DeletePresentationTemplate($container)->DeletePresentationTemplateResult;
    }

    /**
     * Recycles the requested Podcast
     *
     * @param string $Id
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return DeleteResponse
     */
    public function DeletePodcast( $Id, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new DeleteRequest($reqTicket, $Id, $ImpersonationUsername);
        $container = new DeletePodcast($req);
        return $this->proxy->DeletePodcast($container)->DeletePodcastResult;
    }

    /**
     * Recycles the requested MediaImportProject
     *
     * @param string $Id
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return DeleteResponse
     */
    public function DeleteMediaImportProject( $Id, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new DeleteRequest($reqTicket, $Id, $ImpersonationUsername);
        $container = new DeleteMediaImportProject($req);
        return $this->proxy->DeleteMediaImportProject($container)->DeleteMediaImportProjectResult;
    }

    /**
     * Recycles the requested ContentEncodingSettings
     *
     * @param string $Id
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return DeleteResponse
     */
    public function DeleteContentEncodingSettings( $Id, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new DeleteRequest($reqTicket, $Id, $ImpersonationUsername);
        $container = new DeleteContentEncodingSettings($req);
        return $this->proxy->DeleteContentEncodingSettings($container)->DeleteContentEncodingSettingsResult;
    }

    /**
     * Recycles the requested Content Server
     *
     * @param string $Id
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return DeleteResponse
     */
    public function DeleteContentServer( $Id, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new DeleteRequest($reqTicket, $Id, $ImpersonationUsername);
        $container = new DeleteContentServer($req);
        return $this->proxy->DeleteContentServer($container)->DeleteContentServerResult;
    }

    /**
     * Queries for details of catalogs from the provided list of Ids to which the impersonated user has the specified permissions
     *
     * @param array $CatalogIdList
     * @param array $PermissionMask of {@link ResourcePermissionMask}
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return QueryCatalogsByIdResponse
     */
    public function QueryCatalogsById( $CatalogIdList, $PermissionMask, $Ticket = null, $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new QueryCatalogsByIdRequest($reqTicket, $CatalogIdList, $PermissionMask, $ImpersonationUsername);
        $container = new QueryCatalogsById($req);
        return $this->proxy->QueryCatalogsById($container)->QueryCatalogsByIdResult;
    }

    /**
     * Creates a Catalog from the provided folder details
     *
     * @param CreateCatalogFromFolderDetails $CreateDetails
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return CreateCatalogFromFolderResponse
     */
    public function CreateCatalogFromFolder( CreateCatalogFromFolderDetails $CreateDetails, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new CreateCatalogFromFolderRequest($reqTicket, $CreateDetails, $ImpersonationUsername);
        $container = new CreateCatalogFromFolder($req);
        return $this->proxy->CreateCatalogFromFolder($container)->CreateCatalogFromFolderResult;
    }

    /**
     * Creates a copy (Like) Player from the provided player details
     *
     * @param CreatePlayerLikeDetails $CreateDetails
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return CreatePlayerLikeResponse
     */
    public function CreatePlayerLike( CreatePlayerLikeDetails $CreateDetails, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new CreatePlayerLikeRequest($reqTicket, $CreateDetails, $ImpersonationUsername);
        $container = new CreatePlayerLike($req);
        return $this->proxy->CreatePlayerLike($container)->CreatePlayerLikeResult;
    }

    /**
     * Updates permissions ona set of resources based on the supplied UpdateResourcePermissionsDetails
     * Updating Folder permissions is unsupported in Mediasite 6.0.2
     *
     * @param UpdateResourcePermissionsDetails $PermissionDetails
     * @param string $Ticket
     * @param string $ImpersonationUsername
     * @return type UpdateResourcePermissionsResponse
     */
    public function UpdateResourcePermissions( UpdateResourcePermissionsDetails $PermissionDetails, $Ticket = null,
            $ImpersonationUsername = null ) {
        $reqTicket = isset($Ticket) ? $Ticket : $this->Ticket;
        $ImpersonationUsername = isset($ImpersonationUsername) ? $ImpersonationUsername : $this->ImpersonationUsername;
        $req = new UpdateResourcePermissionsRequest($reqTicket, $PermissionDetails, $ImpersonationUsername);
        $container = new UpdateResourcePermissions($req);
        return $this->proxy->UpdateResourcePermissions($container)->UpdateResourcePermissionsResult;
    }

}