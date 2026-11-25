<?php

declare(strict_types=1);

namespace TrustpilotSDK\Resources\V1\Reviews\ByReviewId;

final class WebLinks extends \TrustpilotSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/reviews/{reviewId}/web-links',
        'security' => [
            [
                'ApiKey' => [],
            ],
        ],
    ];

    /**
     * Get Review Web Links
     *
     * Retrieve public Trustpilot page URLs for a specific review.
     */
    public function get(string $reviewId, \TrustpilotSDK\GetParams\V1\Reviews\ByReviewId\WebLinks $params): void
    {
        $this->executeArguments(self::operation(self::GET), path: ['reviewId' => $reviewId], parameters: $params);
        return;
    }
}
