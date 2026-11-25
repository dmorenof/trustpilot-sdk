<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use TrustpilotSDK\Configuration;
use TrustpilotSDK\TrustpilotAPISDK;
use TrustpilotSDK\GetParams\V1\BusinessUnits\Search as SearchParams;
use TrustpilotSDK\V1\BusinessUnits\Search;
use Dmorenof\SdkRuntime\Security\SecurityCredentials;

$apiKey = getenv('TRUSTPILOT_API_KEY') ?: '';

$configuration = new Configuration();
$configuration->securityCredentials = new SecurityCredentials(['ApiKey' => $apiKey]);
TrustpilotAPISDK::configure($configuration);

// Find businesses by name; the contract also asks for the key as a query parameter.
$page = Search::get(new SearchParams((object) ['apikey' => $apiKey, 'name' => 'example.com', 'country' => 'ES']));

echo $page->totalNumberOfBusinesses, " businesses found\n";
