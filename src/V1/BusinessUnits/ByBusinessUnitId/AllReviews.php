<?php

declare(strict_types=1);

namespace TrustpilotSDK\V1\BusinessUnits\ByBusinessUnitId;

final class AllReviews extends \TrustpilotSDK\TrustpilotAPISDK
{
    /** GET /v1/business-units/{businessUnitId}/all-reviews [operationId: getAllBusinessUnitReviews] */
    /**
     * Get All Business Unit Reviews
     *
     * Retrieve paginated public reviews using pageToken cursor-based pagination, supporting up to 100,000 reviews.
     */
    public static function get(string $businessUnitId, \TrustpilotSDK\GetParams\V1\BusinessUnits\ByBusinessUnitId\AllReviews $params): \TrustpilotSDK\DTOs\ReviewListResponse
    {
        return self::client()->resource(\TrustpilotSDK\Resources\V1\BusinessUnits\ByBusinessUnitId\AllReviews::class)->get($businessUnitId, $params);
    }
}
