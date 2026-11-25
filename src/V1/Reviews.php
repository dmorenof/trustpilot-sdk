<?php

declare(strict_types=1);

namespace TrustpilotSDK\V1;

final class Reviews extends \TrustpilotSDK\TrustpilotAPISDK
{
    /** GET /v1/reviews/{reviewId} [operationId: getReview] */
    /**
     * Get Review
     *
     * Fetch public review information by review ID.
     */
    public static function getByReviewId(string $reviewId, \TrustpilotSDK\GetParams\V1\Reviews\ByReviewId $params): \TrustpilotSDK\DTOs\Review2
    {
        return self::client()->resource(\TrustpilotSDK\Resources\V1\Reviews::class)->getByReviewId($reviewId, $params);
    }

}
