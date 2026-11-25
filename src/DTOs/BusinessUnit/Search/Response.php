<?php

declare(strict_types=1);

namespace TrustpilotSDK\DTOs\BusinessUnit\Search;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \TrustpilotSDK\Collections\BusinessUnit\Search\Response\BusinessesCollection $businesses;
    public int $currentPage;
    public int $perPage;
    public int $totalNumberOfBusinesses;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'businesses' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->businesses = new \TrustpilotSDK\Collections\BusinessUnit\Search\Response\BusinessesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \TrustpilotSDK\DTOs\BusinessUnit\Summary::class)) : parent::assignMember($name, $value),
            'currentPage' => is_int($value) ? $this->currentPage = $value : parent::assignMember($name, $value),
            'perPage' => is_int($value) ? $this->perPage = $value : parent::assignMember($name, $value),
            'totalNumberOfBusinesses' => is_int($value) ? $this->totalNumberOfBusinesses = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
