<?php

/**
 * Proxy classes for Mediasite External Data Access Service (Edas)
 * These proxy classes were generated based on the Mediasite 6.0 EDAS WSDL definition.
 *
 * Constant representations of acceptable Enumeration values from the Edas service
 * Any call that expects these values should only use the members of the "enum" thusly:
 *      WeekDay::Friday
 * Using values not defined in these classes may not be accepted on the service endpoint and may cause errors
 *
 * PHP Version 5.3
 *
 * @copyright Copyright (c) 2012, Sonic Foundry
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version 6.0.2
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 * @subpackage Enumerations
 * @author Cori Schlegel <coris@sonicfoundry.com>
 *
 * This software is provided "AS IS" without a warranty of any kind.
 *
 */

/**
 * Proxy class for enum/string AnalyticsRequestType
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class AnalyticsRequestType {

    const Presentation = "Presentation";
    const User = "User";
    const IPAddress = "IPAddress";
    const Server = "Server";

}

/**
 * Proxy class for enum/string WeekDay
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class WeekDay {

    const None = "None";
    const Sunday = "Sunday";
    const Monday = "Monday";
    const Tuesday = "Tuesday";
    const Wednesday = "Wednesday";
    const Thursday = "Thursday";
    const Friday = "Friday";
    const Saturday = "Saturday";
    const CustomDay = "CustomDay";
    const CustomWeekDay = "CustomWeekDay";
    const CustomWeekEndDay = "CustomWeekEndDay";

}

/**
 * Proxy class for enum/string MonthOfTheYear
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class MonthOfTheYear {

    const None = "None";
    const January = "January";
    const February = "February";
    const March = "March";
    const April = "April";
    const May = "May";
    const June = "June";
    const July = "July";
    const August = "August";
    const September = "September";
    const October = "October";
    const November = "November";
    const December = "December";

}

/**
 * Proxy class for enum/string RecurrencePattern
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class RecurrencePattern {

    const None = "None";
    const Daily = "Daily";
    const Weekly = "Weekly";
    const Monthly = "Monthly";
    const Yearly = "Yearly";

}

/**
 * Proxy class for enum/string RecurrencePatternType
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class RecurrencePatternType {

    const Simple = "Simple";
    const Long = "Long";

}

/**
 * Proxy class for enum/string WeekOfTheMonth
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class WeekOfTheMonth {

    const None = "None";
    const First = "First";
    const Second = "Second";
    const Third = "Third";
    const Fourth = "Fourth";
    const Last = "Last";

}

/**
 * Proxy class for enum/string ScheduleTitleType
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class ScheduleTitleType {

    const None = "None";
    const ScheduleNameAndAirDate = "ScheduleNameAndAirDate";
    const RecorderNameAndAirDateTime = "RecorderNameAndAirDateTime";
    const ScheduleNameAndNumber = "ScheduleNameAndNumber";

}

/**
 * Proxy class for enum/string EncodingStreamType
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class EncodingStreamType {

    const None = "None";
    const Audio = "Audio";
    const Video = "Video";

}

/**
 * Proxy class for enum/string FilterType
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class FilterType {

    const None = "None";
    const AspectRatio = "AspectRatio";
    const FrameRate = "FrameRate";

}

/**
 * Proxy class for enum/string ResourcePermissionMask
 *
 * Must be passed to Edas as a single value or as an array; bitwise and/or will not work
 * 
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 */
class ResourcePermissionMask {

    const None = "None";
    const Read = "Read";
    const Write = "Write";
    const Execute = "Execute";
    const Moderate = "Moderate";
    const DenyRead = "DenyRead";
    const DenyWrite = "DenyWrite";
    const DenyExecute = "DenyExecute";
    const DenyModerate = "DenyModerate";

}

/**
 * Proxy class for enum/string PresentationDataStatusDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class PresentationDataStatusDetails {

    const None = "None";
    const Scheduled = "Scheduled";
    const OpenForRecord = "OpenForRecord";
    const Recording = "Recording";
    const Recorded = "Recorded";
    const Uploaded = "Uploaded";
    const TranscodingRequired = "TranscodingRequired";

}

/**
 * Proxy class for enum/string ContentServerQueryBy
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class ContentServerQueryBy {

    const Presentation = "Presentation";
    const ServerType = "ServerType";

}

/**
 * Proxy class for enum/string ResourceType
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class ResourceType {

    const Presentation = "Presentation";
    const ContentEncodingSettings = "ContentEncodingSettings";
    const ContentServer = "ContentServer";
    const Presenter = "Presenter";
    const Player = "Player";
    const PresentationTemplate = "PresentationTemplate";
    const SystemOperation = "SystemOperation";
    const PortalResource = "PortalResource";
    const Folder = "Folder";
    const Operation = "Operation";
    const Recorder = "Recorder";
    const MediaImportProject = "MediaImportProject";

}

/**
 * Proxy class for string QueryScheduleBy
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class QueryScheduleBy {

    const All = "All";
    const ScheduledId = "ScheduleId";
    const RecorderPhysicalAddress = "RecorderPhysicaAddress";

}

/**
 * Proxy class for enum/string SupportedSearchField
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class SupportedSearchField {

    const Name = "Name";
    const Owner = "Owner";
    const Description = "Description";
    const Presenter = "Presenter";

}

/**
 * Proxy class for enum/string SupportedSearchType
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 *
 */
class SupportedSearchType {

    const Player = "Player";
    const PresentationTemplate = "PresentationTemplate";
    const Folder = "Folder";
    const Recorder = "Recorder";
    const RecorderSchedule = "RecorderSchedule";
    const Presentation = "Presentation";
    const Report = "Report";
    const Catalog = "Catalog";
    const ContentEncodingSettings = "ContentEncodingSettings";
    const ContentServer = "ContentServer";

}

/**
 * Proxy class for enum/string DataServiceFaultType
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 * @referenceonly This class provided for reference only, client applications should never need to instantiate this class
 */
class DataServiceFaultType {

    const Unknown = "Unknown";
    const BadRequest = "BadRequest";
    const InvalidTicket = "InvalidTicket";
    const ResourceNotFound = "ResourceNotFound";
    const Authentication = "Authentication";
    const Authorization = "Authorization";
    const ResourceExists = "ResourceExists";
    const ResourceInUse = "ResourceInUse";
    const ResourceError = "ResourceError";
    const TicketNotFound = "TicketNotFound";
    const TicketExpired = "TicketExpired";
    const TicketError = "TicketError";
    const InstallError = "InstallError";
    const Configuration = "Configuration";

}

/**
 * Proxy class for enum/string PresentationContentTypeDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 * @referenceonly This class provided for reference only, client applications should never need to instantiate this class
 */
class PresentationContentTypeDetails {

    const None = "None";
    const Slides = "Slides";
    const Chapters = "Chapters";
    const ExternalsLinks = "ExternalLinks";
    const PresentationThumbnail = "PresentationThumbnail";
    const CaptionFile = "CaptionFile";
    const OnDemandFile = "OnDemandFile";
    const BroadcastStream = "BroadcastStream";
    const PublishToGo = "PublishToGo";

}

/**
 * Generated data proxy class for enum/string ContentServerEndpointType
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 * @referenceonly This class provided for reference only, client applications should never need to instantiate this class
 */
class ContentServerEndpointType {

    const Unknown = "Inknown";
    const Distribution = "Distribution";
    const Storage = "Storage";
    const Broadcast = "Broadcast";
    const WebService = "WebService";
    const Local = "Local";
    const UnicastRollover = "UnicastRollover";
    const Push = "Push";

}


/**
 * Generated data proxy class for enum/string ContentServerTypeDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 * @referenceonly This class provided for reference only, client applications should never need to instantiate this class
 */
class ContentServerTypeDetails {

    const Unknown = "Unknown";
    const MediasiteData = "MediasiteData";
    const SlideServer = "SlideServer";
    const PublishToGoServer = "PublishToGoServer";
    const WmsOnDemandServer = "WmsOnDemandServer";
    const WmsUnicastPullServer = "WmsUnicastPullServer";
    const WmsMulticastPullServer = "WmsMulticastPullServer";
    const WmsUnicastPushServer = "WmsUnicastPushServer";
    const CustomPullServer = "CustomPullServer";
    const CustomPushServer = "CustomPushServer";
    const IIsProgressiveServer = "IIsProgressiveServer";
    const IIsMediaPushServer = "IIsMediaPushServer";
    const IIsMediaOnDemandServer = "IIsMediaOnDemandServer";
    const IIsMediaPullServer = "IIsMediaPullServer";

}

/**
 * Generated data proxy class for enum/string PresentationContentStatusDetails
 * @package SonicFoundry.Mediasite.Edas.PHPProxy
 * @referenceonly This class provided for reference only, client applications should never need to instantiate this class
 */
class PresentationContentStatusDetails {

    const Unknown = "Unknown";
    const Pending = "Pending";
    const Working = "Working";
    const Completed = "Completed";
    const Error = "Error";
    const Canceled = "Canceled";
    const PendingManualCompletion = "PendingManualCompletion";

}
