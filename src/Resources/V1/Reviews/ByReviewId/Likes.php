<?php

declare(strict_types=1);

namespace TrustpilotSDK\Resources\V1\Reviews\ByReviewId;

final class Likes extends \TrustpilotSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/reviews/{reviewId}/likes',
        'security' => [
            [
                'ApiKey' => [],
            ],
        ],
    ];

    /**
     * Get Review Likes
     *
     * Gets the list of consumers who have liked the review.
     */
    public function get(string $reviewId, \TrustpilotSDK\GetParams\V1\Reviews\ByReviewId\Likes $params): void
    {
        $this->executeArguments(self::operation(self::GET), path: ['reviewId' => $reviewId], parameters: $params);
        return;
    }

}
