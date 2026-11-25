<?php

declare(strict_types=1);

namespace TrustpilotSDK\DTOs\PrivateReview;

final class ConsumerDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $displayName;
    public string $id;
    public string $email;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
