<?php

/**
 * Proxy classes for Mediasite External Data Access Service (Edas)
 * These proxy classes were generated based on the Mediasite 6.0 EDAS WSDL definition.
 * These classes are required to wrap the request messages for interaction with the Edas SOAP service
 *
 * PHP Version 5.3
 *
 * @copyright Copyright (c) 2012, Sonic Foundry
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version 6.0.2
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 * @subpackage Containers
 * @see edasproxy.php
 * @author Cori Schlegel <coris@sonicfoundry.com>
 *
 * This software is provided "AS IS" without a warranty of any kind.
 *
 */

/**
 * All conatiner classes extend EdasContainer, which implements the only required members
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 * @abstract
 */
abstract class EdasContainer {

    /**
     *
     * @var mixed class-specific request object
     */
    public $request;

    function __construct( $request ) {
        $this->request = $request;
    }

}

/**
 * Generated data proxy class for struct CreateRole
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreateRole extends EdasContainer {

}

/**
 * Generated data proxy class for struct UpdateRole
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class UpdateRole extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryTotalViews
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryTotalViews extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryDatesWatched
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryDatesWatched extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryPlatformUsage
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryPlatformUsage extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryTotalViewsById
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryTotalViewsById extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryPresentationUsage
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryPresentationUsage extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryServerUsage
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryServerUsage extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryActiveConnections
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryActiveConnections extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryActivePresentations
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryActivePresentations extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryActivePresentationConnections
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryActivePresentationConnections extends EdasContainer {

}

/**
 * Proxy class for struct CreateAuthTicket
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreateAuthTicket extends EdasContainer {

}

/**
 * Proxy class for struct CreateSubFolder
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreateSubFolder extends EdasContainer {

}

/**
 * Generated data proxy class for struct CreateIdentityTicket
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreateIdentityTicket extends EdasContainer {

}

/**
 * Generated data proxy class for struct CreatePresentationFromTemplate
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreatePresentationFromTemplate extends EdasContainer {

}

/**
 * Generated data proxy class for struct CreatePresentationFromSchedule
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreatePresentationFromSchedule extends EdasContainer {

}

/**
 * Generated data proxy class for struct CreatePresentationLike
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreatePresentationLike extends EdasContainer {

}

/**
 * Generated data proxy class for struct CreatePresentationPoll
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreatePresentationPoll extends EdasContainer {

}

/**
 * Generated data proxy class for struct CreateScheduleFromTemplate
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreateScheduleFromTemplate extends EdasContainer {

}

/**
 * Generated data proxy class for struct GetVersion
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class GetVersion extends EdasContainer {

}

/**
 * Proxy class for struct Login
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class Login extends EdasContainer {

}

/**
 * Generated data proxy class for struct Logout
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class Logout extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryAuthTicketProperties
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryAuthTicketProperties extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryCatalogShares
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryCatalogShares extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryChapterPoints
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryChapterPoints extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryClientIpAddress
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryClientIpAddress extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryContentServersByCriteria
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryContentServersByCriteria extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryFoldersById
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryFoldersById extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryFoldersWithPresentations
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryFoldersWithPresentations extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryIdentityTicketProperties
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryIdentityTicketProperties extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryContentEncodingSettingsById
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryContentEncodingSettingsById extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryContentEncodingSettingsByCriteria
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryContentEncodingSettingsByCriteria extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryPlayers
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryPlayers extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryPresentationsById
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryPresentationsById extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryPresentationsByCriteria
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryPresentationsByCriteria extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryPresentationTemplatesByCriteria
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryPresentationTemplatesByCriteria extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryPresentersByCriteria
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryPresentersByCriteria extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryPresentersById
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryPresentersById extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryResourcePermissionList
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryResourcePermissionList extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryResourcePermissions
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryResourcePermissions extends EdasContainer {

}

/**
 * Generated data proxy class for struct QuerySchedulesByCriteria
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QuerySchedulesByCriteria extends EdasContainer {

}

/**
 * Generated data proxy class for struct QuerySiteProperties
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QuerySiteProperties extends EdasContainer {

}

/**
 * Generated data proxy class for struct QuerySlides
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QuerySlides extends EdasContainer {

}

/**
 * Generated data proxy class for struct QuerySubFolderDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QuerySubFolderDetails extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryTimeZonesByCriteria
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryTimeZonesByCriteria extends EdasContainer {

}

/**
 * Generated data proxy class for struct RemoveAuthTicket
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class RemoveAuthTicket extends EdasContainer {

}

/**
 * Generated data proxy class for struct RemoveIdentityTicket
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class RemoveIdentityTicket extends EdasContainer {

}

/**
 * Generated data proxy class for struct Test
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class Test extends EdasContainer {

}

/**
 * Generated data proxy class for struct Search
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class Search extends EdasContainer {

}

/**
 * Generated data proxy class for struct UpdateSchedule
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class UpdateSchedule extends EdasContainer {

}

/**
 * Generated data proxy class for struct UpdatePresentationDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class UpdatePresentationDetails extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryRolesById
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryRolesById extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryRolesByCriteria
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryRolesByCriteria extends EdasContainer {

}

/**
 * Generated data proxy class for struct DeleteRole
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class DeleteRole extends EdasContainer {

}

/**
 * Generated data proxy class for struct DeleteCatalog
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class DeleteCatalog extends EdasContainer {

}

/**
 * Generated data proxy class for struct DeleteSchedule
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class DeleteSchedule extends EdasContainer {

}

/**
 * Generated data proxy class for struct DeletePresentation
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class DeletePresentation extends EdasContainer {

}

/**
 * Generated data proxy class for struct DeletePlayer
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class DeletePlayer extends EdasContainer {

}

/**
 * Generated data proxy class for struct DeletePresentationTemplate
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class DeletePresentationTemplate extends EdasContainer {

}

/**
 * Generated data proxy class for struct DeletePodcast
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class DeletePodcast extends EdasContainer {

}

/**
 * Generated data proxy class for struct DeleteMediaImportProject
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class DeleteMediaImportProject extends EdasContainer {

}

/**
 * Generated data proxy class for struct DeleteContentEnciodingSettings
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class DeleteContentEncodingSettings extends EdasContainer {

}

/**
 * Generated data proxy class for struct DeleteContentServer
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class DeleteContentServer extends EdasContainer {

}

/**
 * Generated data proxy class for struct QueryCatalogsById
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryCatalogsById extends EdasContainer {

}

/**
 * Generated data proxy class for struct CreateCatalogFromFolder
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreateCatalogFromFolder extends EdasContainer {

}

/**
 * Generated data proxy class for struct CreatePlayerLike
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class CreatePlayerLike extends EdasContainer {

}

/**
 * Generated data proxy class for struct UpdateResourcePermissions
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class UpdateResourcePermissions extends EdasContainer {

}
