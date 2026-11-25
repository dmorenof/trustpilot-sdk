<?php

declare(strict_types=1);

namespace TrustpilotSDK\Collections\ReviewListResponse;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\TrustpilotSDK\DTOs\Review> */
final class ReviewsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \TrustpilotSDK\DTOs\Review::class;
}
