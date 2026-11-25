<?php

declare(strict_types=1);

namespace TrustpilotSDK\Resources\V1\BusinessUnits\ByBusinessUnitId;

final class Reviews extends \TrustpilotSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/business-units/{businessUnitId}/reviews',
        'security' => [
            [
                'ApiKey' => [],
            ],
        ],
        'errors' => [
            404 => null,
        ],
        'errorResponses' => [
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\TrustpilotSDK\\DTOs\\ReviewListResponse',
        'querySerialization' => [
            'stars' => 'multi',
        ],
    ];

    /**
     * Get Business Unit Reviews
     *
     * Fetch public reviews for a business unit with filtering and sorting options.
     */
    public function get(string $businessUnitId, \TrustpilotSDK\GetParams\V1\BusinessUnits\ByBusinessUnitId\Reviews $params): \TrustpilotSDK\DTOs\ReviewListResponse
    {
        /** @var \TrustpilotSDK\DTOs\ReviewListResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['businessUnitId' => $businessUnitId], parameters: $params);
        return $result;
    }
}
