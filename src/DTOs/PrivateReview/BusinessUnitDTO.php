<?php

declare(strict_types=1);

namespace TrustpilotSDK\DTOs\PrivateReview;

final class BusinessUnitDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
