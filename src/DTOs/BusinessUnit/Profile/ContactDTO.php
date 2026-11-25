<?php

declare(strict_types=1);

namespace TrustpilotSDK\DTOs\BusinessUnit\Profile;

final class ContactDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $email;
    public string $phone;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
