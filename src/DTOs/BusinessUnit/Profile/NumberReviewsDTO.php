<?php

declare(strict_types=1);

namespace TrustpilotSDK\DTOs\BusinessUnit\Profile;

final class NumberReviewsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public int $fiveStars;
    public int $fourStars;
    public int $oneStar;
    public int $threeStars;
    public int $total;
    public int $twoStars;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fiveStars' => is_int($value) ? $this->fiveStars = $value : parent::assignMember($name, $value),
            'fourStars' => is_int($value) ? $this->fourStars = $value : parent::assignMember($name, $value),
            'oneStar' => is_int($value) ? $this->oneStar = $value : parent::assignMember($name, $value),
            'threeStars' => is_int($value) ? $this->threeStars = $value : parent::assignMember($name, $value),
            'total' => is_int($value) ? $this->total = $value : parent::assignMember($name, $value),
            'twoStars' => is_int($value) ? $this->twoStars = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
