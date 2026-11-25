<?php

declare(strict_types=1);

namespace TrustpilotSDK\GetParams\V1\Reviews;

final class Latest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'apikey',
        'count',
        'language',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'apikey' => 'apikey',
            'count' => 'count',
            'filterUsersWithoutImages' => 'filterUsersWithoutImages',
            'language' => 'language',
            'locale' => 'locale',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'count' => [
            'maximum' => 100,
        ],
    ];

    public string $apikey;
    public int $count {
        set {
            $this->assigning('count', $value);
            $this->count = $value;
        }
    }
    public ?bool $filterUsersWithoutImages;
    public string $language;
    public ?string $locale;
}
