<?php

declare(strict_types=1);

namespace TrustpilotSDK\DTOs;

final class PrivateReviewListResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \TrustpilotSDK\Collections\PrivateReviewListResponse\ReviewsCollection $reviews;
    public int $totalNumberOfReviews;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'totalNumberOfReviews' => is_int($value) ? $this->totalNumberOfReviews = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
