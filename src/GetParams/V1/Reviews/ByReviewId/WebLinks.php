<?php

declare(strict_types=1);

namespace TrustpilotSDK\GetParams\V1\Reviews\ByReviewId;

final class WebLinks extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'apikey',
        'locale',
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
    public string $locale;
}
