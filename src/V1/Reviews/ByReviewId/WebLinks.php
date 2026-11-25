<?php

declare(strict_types=1);

namespace TrustpilotSDK\V1\Reviews\ByReviewId;

final class WebLinks extends \TrustpilotSDK\TrustpilotAPISDK
{
    /** GET /v1/reviews/{reviewId}/web-links [operationId: getReviewWebLinks] */
    /**
     * Get Review Web Links
     *
     * Retrieve public Trustpilot page URLs for a specific review.
     */
    public static function get(string $reviewId, \TrustpilotSDK\GetParams\V1\Reviews\ByReviewId\WebLinks $params): void
    {
        self::client()->resource(\TrustpilotSDK\Resources\V1\Reviews\ByReviewId\WebLinks::class)->get($reviewId, $params);
    }
}
