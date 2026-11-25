<?php

declare(strict_types=1);

namespace TrustpilotSDK\GetParams\V1\BusinessUnits\ByBusinessUnitId;

final class AllReviews extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'apikey',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'apikey' => 'apikey',
        'pageToken' => 'pageToken',
        'perPage' => 'perPage',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'perPage' => [
        'maximum' => 100,
    ],
];

    public string $apikey;
    public ?string $pageToken;
    public ?int $perPage {
        set {
            $this->assigning('perPage', $value);
            $this->perPage = $value;
        }
    }
}
