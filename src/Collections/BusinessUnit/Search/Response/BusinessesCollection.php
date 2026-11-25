<?php

declare(strict_types=1);

namespace TrustpilotSDK\Collections\BusinessUnit\Search\Response;

final class BusinessesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \TrustpilotSDK\DTOs\BusinessUnit\Summary::class;
}
