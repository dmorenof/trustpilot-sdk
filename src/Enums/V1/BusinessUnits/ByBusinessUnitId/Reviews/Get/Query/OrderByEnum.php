<?php

declare(strict_types=1);

namespace TrustpilotSDK\Enums\V1\BusinessUnits\ByBusinessUnitId\Reviews\Get\Query;

enum OrderByEnum: string
{
    case Createdatasc = 'createdat.asc';
    case Createdatdesc = 'createdat.desc';
}
