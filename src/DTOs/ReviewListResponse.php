<?php

declare(strict_types=1);

namespace TrustpilotSDK\DTOs;

final class ReviewListResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $nextPageToken;
    public \TrustpilotSDK\Collections\ReviewListResponse\ReviewsCollection $reviews;
    public int $totalNumberOfReviews;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'nextPageToken' => is_string($value) ? $this->nextPageToken = $value : parent::assignMember($name, $value),
            'reviews' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->reviews = new \TrustpilotSDK\Collections\ReviewListResponse\ReviewsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \TrustpilotSDK\DTOs\Review::class)) : parent::assignMember($name, $value),
            'totalNumberOfReviews' => is_int($value) ? $this->totalNumberOfReviews = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
