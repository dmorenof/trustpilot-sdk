<?php

declare(strict_types=1);

namespace TrustpilotSDK\V1\BusinessUnits\ByBusinessUnitId;

final class Reviews extends \TrustpilotSDK\TrustpilotAPISDK
{
    /** GET /v1/business-units/{businessUnitId}/reviews [operationId: getBusinessUnitReviews] */
    /**
     * Get Business Unit Reviews
     *
     * Fetch public reviews for a business unit with filtering and sorting options.
     */
    public static function get(string $businessUnitId, \TrustpilotSDK\GetParams\V1\BusinessUnits\ByBusinessUnitId\Reviews $params): \TrustpilotSDK\DTOs\ReviewListResponse
    {
        return self::client()->resource(\TrustpilotSDK\Resources\V1\BusinessUnits\ByBusinessUnitId\Reviews::class)->get($businessUnitId, $params);
    }

}
