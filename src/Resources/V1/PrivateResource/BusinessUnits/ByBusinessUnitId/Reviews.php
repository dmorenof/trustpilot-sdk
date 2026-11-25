<?php

declare(strict_types=1);

namespace TrustpilotSDK\Resources\V1\PrivateResource\BusinessUnits\ByBusinessUnitId;

final class Reviews extends \TrustpilotSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/private/business-units/{businessUnitId}/reviews',
        'security' => [
            [
                'OAuth2' => [],
            ],
        ],
        'responseType' => '\\TrustpilotSDK\\DTOs\\PrivateReviewListResponse',
    ];

    /**
     * Get Private Business Unit Reviews
     *
     * Access private reviews including customer contact information and order IDs.
     */
    public function get(string $businessUnitId, ?\TrustpilotSDK\GetParams\V1\PrivateResource\BusinessUnits\ByBusinessUnitId\Reviews $params = null): \TrustpilotSDK\DTOs\PrivateReviewListResponse
    {
        /** @var \TrustpilotSDK\DTOs\PrivateReviewListResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['businessUnitId' => $businessUnitId], parameters: $params);
        return $result;
    }
}
