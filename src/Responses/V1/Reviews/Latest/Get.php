<?php

declare(strict_types=1);

namespace TrustpilotSDK\Responses\V1\Reviews\Latest;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public \TrustpilotSDK\Collections\V1\Reviews\Latest\Get\LatestReviewsCollection $reviews;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reviews' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->reviews = new \TrustpilotSDK\Collections\V1\Reviews\Latest\Get\LatestReviewsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \TrustpilotSDK\DTOs\Review2::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
