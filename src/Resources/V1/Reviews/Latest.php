<?php

declare(strict_types=1);

namespace TrustpilotSDK\Resources\V1\Reviews;

final class Latest extends \TrustpilotSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/reviews/latest',
        'security' => [
            [
                'ApiKey' => [],
            ],
        ],
        'responseType' => '\\TrustpilotSDK\\Responses\\V1\\Reviews\\Latest\\Get',
    ];

    /**
     * Get Latest Reviews
     *
     * Gets the latest reviews written in a specific language.
     */
    public function get(\TrustpilotSDK\GetParams\V1\Reviews\Latest $params): \TrustpilotSDK\Responses\V1\Reviews\Latest\Get
    {
        /** @var \TrustpilotSDK\Responses\V1\Reviews\Latest\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
