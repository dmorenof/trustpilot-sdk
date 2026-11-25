<?php

declare(strict_types=1);

namespace TrustpilotSDK\Collections\CategoryListResponse;

final class CategoriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \TrustpilotSDK\DTOs\CategoryListResponse\CategoriesDTO::class;
}
