<?php

declare(strict_types=1);

namespace TrustpilotSDK\DTOs\BusinessUnit;

final class Summary extends \Dmorenof\SdkRuntime\DTO
{
    public string $countryCode;
    public string $displayName;
    /**
     * Trustpilot business unit ID
     */
    public string $id;
    public string $name;
    public \TrustpilotSDK\DTOs\BusinessUnit\Summary\NumberReviewsDTO $numberOfReviews;
    /**
     * Format: double
     */
    public float $stars;
    /**
     * Format: double
     */
    public float $trustScore;
    public string $websiteUrl;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'stars' => is_float($value) ? $this->stars = $value : parent::assignMember($name, $value),
            'trustScore' => is_float($value) ? $this->trustScore = $value : parent::assignMember($name, $value),
            'websiteUrl' => is_string($value) ? $this->websiteUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
