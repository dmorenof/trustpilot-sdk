<?php

declare(strict_types=1);

namespace TrustpilotSDK\GetParams\V1\BusinessUnits;

final class Search extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'apikey',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'apikey' => 'apikey',
            'country' => 'country',
            'name' => 'name',
            'page' => 'page',
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
    public ?string $country;
    public ?string $name;
    public ?int $page;
    public ?int $perPage {
        set {
            $this->assigning('perPage', $value);
            $this->perPage = $value;
        }
    }
}
