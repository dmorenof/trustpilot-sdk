<?php

declare(strict_types=1);

namespace TrustpilotSDK\DTOs;

final class CategoryListResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \TrustpilotSDK\Collections\CategoryListResponse\CategoriesCollection $categories;
}
