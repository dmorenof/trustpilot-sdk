<?php

declare(strict_types=1);

namespace TrustpilotSDK\Resources\V1\BusinessUnits\ByBusinessUnitId;

final class Profileinfo extends \TrustpilotSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/business-units/{businessUnitId}/profileinfo',
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
        'responseType' => '\\TrustpilotSDK\\DTOs\\BusinessUnit\\Profile',
    ];

    /**
     * Get Business Unit Profile
     *
     * Retrieve company profile information including contact details and social media links.
     */
    public function get(string $businessUnitId, \TrustpilotSDK\GetParams\V1\BusinessUnits\ByBusinessUnitId\Profileinfo $params): \TrustpilotSDK\DTOs\BusinessUnit\Profile
    {
        /** @var \TrustpilotSDK\DTOs\BusinessUnit\Profile $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['businessUnitId' => $businessUnitId], parameters: $params);
        return $result;
    }
}
