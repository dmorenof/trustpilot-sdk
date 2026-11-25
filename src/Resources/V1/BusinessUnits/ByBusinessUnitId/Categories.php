<?php

declare(strict_types=1);

namespace TrustpilotSDK\Resources\V1\BusinessUnits\ByBusinessUnitId;

final class Categories extends \TrustpilotSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/business-units/{businessUnitId}/categories',
        'security' => [
            [
                'ApiKey' => [],
            ],
        ],
        'responseType' => '\\TrustpilotSDK\\DTOs\\CategoryListResponse',
    ];

    /**
     * Get Business Unit Categories
     *
     * List categories associated with a business unit.
     */
    public function get(string $businessUnitId, \TrustpilotSDK\GetParams\V1\BusinessUnits\ByBusinessUnitId\Categories $params): \TrustpilotSDK\DTOs\CategoryListResponse
    {
        /** @var \TrustpilotSDK\DTOs\CategoryListResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['businessUnitId' => $businessUnitId], parameters: $params);
        return $result;
    }

}
