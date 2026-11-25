<?php

declare(strict_types=1);

namespace TrustpilotSDK\Resources\V1;

final class Reviews extends \TrustpilotSDK\Client
{
    private const array GET_BY_REVIEW_ID = [
        'method' => 'GET',
        'path' => '/v1/reviews/{reviewId}',
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
        'responseType' => '\\TrustpilotSDK\\DTOs\\Review2',
    ];

    /**
     * Get Review
     *
     * Fetch public review information by review ID.
     */
    public function getByReviewId(string $reviewId, \TrustpilotSDK\GetParams\V1\Reviews\ByReviewId $params): \TrustpilotSDK\DTOs\Review2
    {
        /** @var \TrustpilotSDK\DTOs\Review2 $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_REVIEW_ID), path: ['reviewId' => $reviewId], parameters: $params);
        return $result;
    }

}
