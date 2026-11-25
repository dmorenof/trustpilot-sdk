<?php

declare(strict_types=1);

namespace TrustpilotSDK\Resources\V1\BusinessUnits\ByBusinessUnitId;

final class WebLinks extends \TrustpilotSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/business-units/{businessUnitId}/web-links',
        'security' => [
            [
                'ApiKey' => [],
            ],
        ],
        'responseType' => '\\TrustpilotSDK\\Responses\\V1\\BusinessUnits\\ByBusinessUnitId\\WebLinks\\Get',
    ];

    /**
     * Get Business Unit Web Links
     *
     * Obtain links to the business unit's public profile page on Trustpilot.
     */
    public function get(string $businessUnitId, \TrustpilotSDK\GetParams\V1\BusinessUnits\ByBusinessUnitId\WebLinks $params): \TrustpilotSDK\Responses\V1\BusinessUnits\ByBusinessUnitId\WebLinks\Get
    {
        /** @var \TrustpilotSDK\Responses\V1\BusinessUnits\ByBusinessUnitId\WebLinks\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['businessUnitId' => $businessUnitId], parameters: $params);
        return $result;
    }

}
