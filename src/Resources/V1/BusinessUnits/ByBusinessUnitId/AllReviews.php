<?php

declare(strict_types=1);

namespace TrustpilotSDK\Resources\V1\BusinessUnits\ByBusinessUnitId;

final class AllReviews extends \TrustpilotSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/business-units/{businessUnitId}/all-reviews',
        'security' => [
            [
                'ApiKey' => [],
            ],
        ],
        'responseType' => '\\TrustpilotSDK\\DTOs\\ReviewListResponse',
    ];

    /**
     * Get All Business Unit Reviews
     *
     * Retrieve paginated public reviews using pageToken cursor-based pagination, supporting up to 100,000 reviews.
     */
    public function get(string $businessUnitId, \TrustpilotSDK\GetParams\V1\BusinessUnits\ByBusinessUnitId\AllReviews $params): \TrustpilotSDK\DTOs\ReviewListResponse
    {
        /** @var \TrustpilotSDK\DTOs\ReviewListResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['businessUnitId' => $businessUnitId], parameters: $params);
        return $result;
    }

}
