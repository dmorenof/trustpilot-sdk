# Trustpilot SDK for PHP: operations

11 operations. Each is a static method of a facade class (`TrustpilotSDK\...`); configure the SDK once with `TrustpilotAPISDK::configure()`, then call them. The same operations are available on a connection object: `Client::connect($configuration)->resource(ResourceClass::class)`.

| Operation | HTTP | Path | Call |
| --- | --- | --- | --- |
| Search Business Units | GET | `/v1/business-units/search` | `V1\BusinessUnits\Search::get()` |
| Get All Business Unit Reviews | GET | `/v1/business-units/{businessUnitId}/all-reviews` | `V1\BusinessUnits\ByBusinessUnitId\AllReviews::get()` |
| Get Business Unit Categories | GET | `/v1/business-units/{businessUnitId}/categories` | `V1\BusinessUnits\ByBusinessUnitId\Categories::get()` |
| Get Business Unit Profile | GET | `/v1/business-units/{businessUnitId}/profileinfo` | `V1\BusinessUnits\ByBusinessUnitId\Profileinfo::get()` |
| Get Business Unit Reviews | GET | `/v1/business-units/{businessUnitId}/reviews` | `V1\BusinessUnits\ByBusinessUnitId\Reviews::get()` |
| Get Business Unit Web Links | GET | `/v1/business-units/{businessUnitId}/web-links` | `V1\BusinessUnits\ByBusinessUnitId\WebLinks::get()` |
| Get Private Business Unit Reviews | GET | `/v1/private/business-units/{businessUnitId}/reviews` | `V1\PrivateResource\BusinessUnits\ByBusinessUnitId\Reviews::get()` |
| Get Latest Reviews | GET | `/v1/reviews/latest` | `V1\Reviews\Latest::get()` |
| Get Review | GET | `/v1/reviews/{reviewId}` | `V1\Reviews::getByReviewId()` |
| Get Review Likes | GET | `/v1/reviews/{reviewId}/likes` | `V1\Reviews\ByReviewId\Likes::get()` |
| Get Review Web Links | GET | `/v1/reviews/{reviewId}/web-links` | `V1\Reviews\ByReviewId\WebLinks::get()` |
