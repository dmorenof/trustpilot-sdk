<?php

declare(strict_types=1);

namespace TrustpilotSDK\V1\Reviews;

final class Latest extends \TrustpilotSDK\TrustpilotAPISDK
{
    /** GET /v1/reviews/latest [operationId: getLatestReviews] */
    /**
     * Get Latest Reviews
     *
     * Gets the latest reviews written in a specific language.
     */
    public static function get(\TrustpilotSDK\GetParams\V1\Reviews\Latest $params): \TrustpilotSDK\Responses\V1\Reviews\Latest\Get
    {
        return self::client()->resource(\TrustpilotSDK\Resources\V1\Reviews\Latest::class)->get($params);
    }
}
