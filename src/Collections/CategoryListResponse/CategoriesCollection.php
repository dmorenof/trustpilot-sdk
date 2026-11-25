<?php

declare(strict_types=1);

namespace TrustpilotSDK\Collections\CategoryListResponse;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\TrustpilotSDK\DTOs\CategoryListResponse\CategoriesDTO> */
final class CategoriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \TrustpilotSDK\DTOs\CategoryListResponse\CategoriesDTO::class;
}
