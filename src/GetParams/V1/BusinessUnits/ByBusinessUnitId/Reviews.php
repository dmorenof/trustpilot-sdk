<?php

declare(strict_types=1);

namespace TrustpilotSDK\GetParams\V1\BusinessUnits\ByBusinessUnitId;

final class Reviews extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'apikey',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'apikey' => 'apikey',
        'language' => 'language',
        'orderBy' => 'orderBy',
        'page' => 'page',
        'perPage' => 'perPage',
        'stars' => 'stars',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'perPage' => [
        'maximum' => 100,
    ],
    'stars' => [
        'items' => [
            'type' => 'int',
            'rules' => [
                'enum' => [
                    1,
                    2,
                    3,
                    4,
                    5,
                ],
            ],
        ],
    ],
];

    public string $apikey;
    public ?string $language;
    public ?\TrustpilotSDK\Enums\V1\BusinessUnits\ByBusinessUnitId\Reviews\Get\Query\OrderByEnum $orderBy;
    public ?int $page;
    public ?int $perPage {
        set {
            $this->assigning('perPage', $value);
            $this->perPage = $value;
        }
    }
    /** @var list<int>|null */
    public ?array $stars;
}
