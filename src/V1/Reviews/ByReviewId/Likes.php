<?php

declare(strict_types=1);

namespace TrustpilotSDK\V1\Reviews\ByReviewId;

final class Likes extends \TrustpilotSDK\TrustpilotAPISDK
{
    /** GET /v1/reviews/{reviewId}/likes [operationId: getReviewLikes] */
    /**
     * Get Review Likes
     *
     * Gets the list of consumers who have liked the review.
     */
    public static function get(string $reviewId, \TrustpilotSDK\GetParams\V1\Reviews\ByReviewId\Likes $params): void
    {
        self::client()->resource(\TrustpilotSDK\Resources\V1\Reviews\ByReviewId\Likes::class)->get($reviewId, $params);
    }

}
