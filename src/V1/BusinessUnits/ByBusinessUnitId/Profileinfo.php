<?php

declare(strict_types=1);

namespace TrustpilotSDK\V1\BusinessUnits\ByBusinessUnitId;

final class Profileinfo extends \TrustpilotSDK\TrustpilotAPISDK
{
    /** GET /v1/business-units/{businessUnitId}/profileinfo [operationId: getBusinessUnitProfile] */
    /**
     * Get Business Unit Profile
     *
     * Retrieve company profile information including contact details and social media links.
     */
    public static function get(string $businessUnitId, \TrustpilotSDK\GetParams\V1\BusinessUnits\ByBusinessUnitId\Profileinfo $params): \TrustpilotSDK\DTOs\BusinessUnit\Profile
    {
        return self::client()->resource(\TrustpilotSDK\Resources\V1\BusinessUnits\ByBusinessUnitId\Profileinfo::class)->get($businessUnitId, $params);
    }

}
