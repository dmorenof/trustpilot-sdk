<?php

declare(strict_types=1);

namespace TrustpilotSDK\V1\BusinessUnits;

final class Search extends \TrustpilotSDK\TrustpilotAPISDK
{
    /** GET /v1/business-units/search [operationId: searchBusinessUnits] */
    /**
     * Search Business Units
     *
     * Search for business units on Trustpilot, even if you only know part of the name.
     */
    public static function get(\TrustpilotSDK\GetParams\V1\BusinessUnits\Search $params): \TrustpilotSDK\DTOs\BusinessUnit\Search\Response
    {
        return self::client()->resource(\TrustpilotSDK\Resources\V1\BusinessUnits\Search::class)->get($params);
    }

}
