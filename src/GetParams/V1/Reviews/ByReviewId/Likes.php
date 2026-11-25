<?php

declare(strict_types=1);

namespace TrustpilotSDK\GetParams\V1\Reviews\ByReviewId;

final class Likes extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'apikey',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'apikey' => 'apikey',
    ],
    'header' => [],
];

    public string $apikey;
}
