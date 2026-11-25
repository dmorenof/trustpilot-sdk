<?php

declare(strict_types=1);

namespace TrustpilotSDK\Collections\BusinessUnit\Search\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\TrustpilotSDK\DTOs\BusinessUnit\Summary> */
final class BusinessesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \TrustpilotSDK\DTOs\BusinessUnit\Summary::class;
}
