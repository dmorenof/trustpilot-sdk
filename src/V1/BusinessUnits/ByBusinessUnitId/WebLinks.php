<?php

declare(strict_types=1);

namespace TrustpilotSDK\V1\BusinessUnits\ByBusinessUnitId;

final class WebLinks extends \TrustpilotSDK\TrustpilotAPISDK
{
    /** GET /v1/business-units/{businessUnitId}/web-links [operationId: getBusinessUnitWebLinks] */
    /**
     * Get Business Unit Web Links
     *
     * Obtain links to the business unit's public profile page on Trustpilot.
     */
    public static function get(string $businessUnitId, \TrustpilotSDK\GetParams\V1\BusinessUnits\ByBusinessUnitId\WebLinks $params): \TrustpilotSDK\Responses\V1\BusinessUnits\ByBusinessUnitId\WebLinks\Get
    {
        return self::client()->resource(\TrustpilotSDK\Resources\V1\BusinessUnits\ByBusinessUnitId\WebLinks::class)->get($businessUnitId, $params);
    }

}
