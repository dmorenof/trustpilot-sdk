<?php

declare(strict_types=1);

namespace TrustpilotSDK\DTOs\BusinessUnit\Summary;

final class NumberReviewsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public int $total;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'total' => is_int($value) ? $this->total = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
