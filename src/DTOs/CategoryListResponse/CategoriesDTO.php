<?php

declare(strict_types=1);

namespace TrustpilotSDK\DTOs\CategoryListResponse;

final class CategoriesDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $id;
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
