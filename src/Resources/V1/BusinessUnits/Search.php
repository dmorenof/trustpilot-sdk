<?php

declare(strict_types=1);

namespace TrustpilotSDK\Resources\V1\BusinessUnits;

final class Search extends \TrustpilotSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/business-units/search',
        'security' => [
            [
                'ApiKey' => [],
            ],
        ],
        'errors' => [
            400 => null,
            401 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            401 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\TrustpilotSDK\\DTOs\\BusinessUnit\\Search\\Response',
    ];

    /**
     * Search Business Units
     *
     * Search for business units on Trustpilot, even if you only know part of the name.
     */
    public function get(\TrustpilotSDK\GetParams\V1\BusinessUnits\Search $params): \TrustpilotSDK\DTOs\BusinessUnit\Search\Response
    {
        /** @var \TrustpilotSDK\DTOs\BusinessUnit\Search\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
