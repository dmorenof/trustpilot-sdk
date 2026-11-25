<?php

declare(strict_types=1);

namespace TrustpilotSDK\GetParams\V1\PrivateResource\BusinessUnits\ByBusinessUnitId;

final class Reviews extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'page' => 'page',
        'perPage' => 'perPage',
    ],
    'header' => [],
];

    public ?int $page;
    public ?int $perPage;
}
