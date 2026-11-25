<?php

declare(strict_types=1);

namespace TrustpilotSDK\DTOs;

final class Review2 extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'stars' => [
        'minimum' => 1,
        'maximum' => 5,
    ],
];

    public \TrustpilotSDK\DTOs\Review2\ConsumerDTO $consumer;
    /**
     * Format: date-time
     */
    public string $createdAt;
    public string $id;
    public string $language;
    public int $stars {
        set {
            $this->assigning('stars', $value);
            $this->stars = $value;
        }
    }
    public \TrustpilotSDK\Enums\Review2\StatusEnum $status;
    public string $text;
    public string $title;
    /**
     * Format: date-time
     */
    public string $updatedAt;
    public string $verificationLevel;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'stars' => is_int($value) ? $this->stars = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \TrustpilotSDK\Enums\Review2\StatusEnum::from($value) : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            'verificationLevel' => is_string($value) ? $this->verificationLevel = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
