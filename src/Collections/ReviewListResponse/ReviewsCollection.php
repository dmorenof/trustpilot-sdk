<?php

declare(strict_types=1);

namespace TrustpilotSDK\Collections\ReviewListResponse;

final class ReviewsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \TrustpilotSDK\DTOs\Review::class;
}
