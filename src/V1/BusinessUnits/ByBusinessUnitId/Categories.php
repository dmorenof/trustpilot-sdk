<?php

declare(strict_types=1);

namespace TrustpilotSDK\V1\BusinessUnits\ByBusinessUnitId;

final class Categories extends \TrustpilotSDK\TrustpilotAPISDK
{
    /** GET /v1/business-units/{businessUnitId}/categories [operationId: getBusinessUnitCategories] */
    /**
     * Get Business Unit Categories
     *
     * List categories associated with a business unit.
     */
    public static function get(string $businessUnitId, \TrustpilotSDK\GetParams\V1\BusinessUnits\ByBusinessUnitId\Categories $params): \TrustpilotSDK\DTOs\CategoryListResponse
    {
        return self::client()->resource(\TrustpilotSDK\Resources\V1\BusinessUnits\ByBusinessUnitId\Categories::class)->get($businessUnitId, $params);
    }
}
