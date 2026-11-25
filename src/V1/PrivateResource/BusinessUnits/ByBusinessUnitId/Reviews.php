<?php

declare(strict_types=1);

namespace TrustpilotSDK\V1\PrivateResource\BusinessUnits\ByBusinessUnitId;

final class Reviews extends \TrustpilotSDK\TrustpilotAPISDK
{
    /** GET /v1/private/business-units/{businessUnitId}/reviews [operationId: getPrivateBusinessUnitReviews] */
    /**
     * Get Private Business Unit Reviews
     *
     * Access private reviews including customer contact information and order IDs.
     */
    public static function get(string $businessUnitId, ?\TrustpilotSDK\GetParams\V1\PrivateResource\BusinessUnits\ByBusinessUnitId\Reviews $params = null): \TrustpilotSDK\DTOs\PrivateReviewListResponse
    {
        return self::client()->resource(\TrustpilotSDK\Resources\V1\PrivateResource\BusinessUnits\ByBusinessUnitId\Reviews::class)->get($businessUnitId, $params);
    }
}
