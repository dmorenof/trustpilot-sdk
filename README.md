# Trustpilot SDK for PHP

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)
[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4%2B-777bb4.svg)](composer.json)
[![PHPStan level max](https://img.shields.io/badge/PHPStan-level%20max-brightgreen.svg)](phpstan.neon)
[![Packagist](https://img.shields.io/packagist/v/dmorenof/trustpilot-sdk.svg)](https://packagist.org/packages/dmorenof/trustpilot-sdk)

**Typed access to Trustpilot business profiles and reviews from PHP 8.4.**

Look up a company on Trustpilot, read its profile, categories and web links, and page through its public and private reviews with models that PHPStan understands, instead of decoding JSON arrays by hand.

> Unofficial. Not affiliated with, endorsed by or supported by Trustpilot. See [NOTICE.md](NOTICE.md).

## Why this SDK

- Business Units API and Reviews API in one package: search, profile, categories, web links, public and private reviews, latest reviews, likes.
- Every answer is a typed model; every list is a typed collection.
- Your API key is sent for you from the credentials you configure.
- **Generated from the contract, never edited by hand.** `src/` is produced from `contract/openapi.json` by [sdk-generator](https://github.com/dmorenof/sdk-generator) on top of the shared [sdk-runtime](https://github.com/dmorenof/sdk-runtime): when the contract changes you regenerate, you do not patch.
- **Typed end to end.** 11 operations and 20 typed request, answer and model classes. A request is a model whose fields are checked where you assign them (PHP 8.4 property hooks); an answer is a model; a list is a typed collection. PHPStan at the maximum level reports no error on the whole SDK.
- **One way to fail.** An HTTP answer the contract does not declare as success is an `ApiException` that keeps the raw response and, when the API documents it, the decoded error as a model. Network failures keep their own type.
- **Production controls included.** PSR-18 HTTP client (Guzzle by default), timeouts (30 s / 10 s by default), retries with `Retry-After`, redirect policy, middleware and per-environment servers, all in one `Configuration` object.

## Install

PHP 8.4 or later.

```bash
composer require dmorenof/trustpilot-sdk
```

## Quick start

```php
<?php
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
```

The same example is in [examples/quickstart.php](examples/quickstart.php). Every operation is listed in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## What it covers

11 operations. The biggest areas:

| Area | Operations |
| --- | --- |
| `business-units` | 6 |
| `reviews` | 4 |
| `private` | 1 |

## Handling errors

```php
use Dmorenof\SdkRuntime\ApiException;

try {
    // ... any call from the quick start
} catch (ApiException $e) {
    echo $e->response->status, "\n";   // the HTTP status
    echo $e->response->body, "\n";     // the raw body, always kept
    var_dump($e->error);                // the decoded error model, when the API documents one
}
```

## Configuration

`Configuration` is the only place to set anything: `baseUrl`, `securityCredentials`, `headers`, `timeout`, `connectTimeout`, `retryPolicy`, `redirectPolicy`, `middleware`, `httpClient` (any PSR-18 client), `serverVariables`. Use `Client::connect($configuration)` instead of the static facades when you need several independent connections.

## Good to know

- The contract is a transcription of Trustpilot's documentation published at apis.io (see NOTICE.md); Trustpilot itself publishes no OpenAPI file.
- The key is declared twice in that contract (a query parameter and a security scheme): pass it in both places, as above.
- Version `0.1.0` is a first release: the API of the SDK follows the contract, and a regenerated contract can rename classes. Pin a version.
- The SDK has been checked against its contract (generation, static analysis, serialization of requests); it has not been run against the live service unless the section above says so. Use test credentials first.

## Documentation

- [Operations catalog](docs/OPERATIONS.md)
- [Vendor documentation](https://developers.trustpilot.com/)
- [sdk-runtime](https://github.com/dmorenof/sdk-runtime) (what every SDK shares) and [sdk-generator](https://github.com/dmorenof/sdk-generator)
- [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [SECURITY.md](SECURITY.md)

## License

MIT, see [LICENSE.md](LICENSE.md). The license covers this SDK's code, not the API, its trademarks or its terms: see [NOTICE.md](NOTICE.md).
