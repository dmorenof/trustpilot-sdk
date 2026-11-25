<?php

declare(strict_types=1);

namespace TrustpilotSDK\Collections\PrivateReviewListResponse;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\TrustpilotSDK\DTOs\PrivateReview> */
final class ReviewsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \TrustpilotSDK\DTOs\PrivateReview::class;
}
