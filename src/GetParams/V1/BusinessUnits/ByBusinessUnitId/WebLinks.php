<?php

declare(strict_types=1);

namespace TrustpilotSDK\GetParams\V1\BusinessUnits\ByBusinessUnitId;

final class WebLinks extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'apikey',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'apikey' => 'apikey',
        'locale' => 'locale',
    ],
    'header' => [],
];

    public string $apikey;
    public ?string $locale;
}
