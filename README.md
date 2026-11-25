# Trustpilot SDK

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)

Unofficial PHP SDK for the Trustpilot Business Units and Reviews APIs.
The code in `src/` is **generated** from `contract/openapi.json` by [sdk-generator](https://github.com/dmorenof/sdk-generator) and runs on
[sdk-runtime](https://github.com/dmorenof/sdk-runtime): typed models and collections, one exception type per kind of failure. Nothing in `src/` is edited by hand.

## Installation

PHP 8.4 or later.

```bash
composer require dmorenof/trustpilot-sdk
```

## Setup

The production server is `https://api.trustpilot.com`. Public endpoints take your API key in the `apikey` header (security scheme `ApiKey`).

```php
use TrustpilotSDK\Configuration;
use Dmorenof\SdkRuntime\Security\SecurityCredentials;
use TrustpilotSDK\TrustpilotAPISDK;

$configuration = new Configuration();
$configuration->securityCredentials = new SecurityCredentials(['ApiKey' => 'your-api-key']);
TrustpilotAPISDK::configure($configuration);
```

The class names under `src/` follow the contract; browse `src/V1/` for the operations.

## License

MIT (see [LICENSE.md](LICENSE.md)). See [NOTICE.md](NOTICE.md) for the status of the API itself.
