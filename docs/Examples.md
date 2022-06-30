# Usage Examples

## Creating a Graph client
This creates a default Graph client that uses `https://graph.microsoft.com` as the default base URL and default configured Guzzle HTTP client to make the requests.

```php

use Microsoft\Graph\GraphRequestAdapter;
use Microsoft\Graph\GraphServiceClient;
use Microsoft\Kiota\Authentication\Oauth\ClientCredentialContext;
use Microsoft\Kiota\Authentication\PhpLeagueAuthenticationProvider;

$tokenRequestContext = new ClientCredentialContext(
    'tenantId',
    'clientId',
    'clientSecret'
);
$scopes = ['https://graph.microsoft.com/.default'];
$authProvider = new PhpLeagueAuthenticationProvider($tokenRequestContext, $scopes);
$requestAdapter = new GraphRequestAdapter($authProvider);
$graphServiceClient = new GraphServiceClient($requestAdapter);

```

Customizing the default Guzzle client:
```php

use Microsoft\Graph\Core\GraphClientFactory;
use Microsoft\Graph\GraphRequestAdapter;
use Microsoft\Graph\GraphServiceClient;

$guzzleConfig = [
    // your custom config
];
$httpClient = GraphClientFactory::createWithConfig($guzzleConfig);
$requestAdapter = new GraphRequestAdapter($authProvider, $httpClient);
$graphServiceClient = new GraphServiceClient($requestAdapter);

```

## Get an item from the Graph
This sample fetches the current signed-in user. Note that to use `\me` you need
a delegated permission. Alternatively, using application permissions, you can request `/users/[userPrincipalName]`.
See [Microsoft Graph Permissions](https://docs.microsoft.com/en-us/graph/auth/auth-concepts#microsoft-graph-permissions) for more.


```php

use Microsoft\Graph\GraphRequestAdapter;
use Microsoft\Graph\GraphServiceClient;
use Microsoft\Kiota\Abstractions\ApiException;
use Microsoft\Kiota\Authentication\Oauth\AuthorizationCodeContext;
use Microsoft\Kiota\Authentication\PhpLeagueAuthenticationProvider;

$tokenRequestContext = new AuthorizationCodeContext(
    'tenantId',
    'clientId',
    'clientSecret',
    'authCode',
    'redirectUri'
);
$scopes = ['User.Read'];
$authProvider = new PhpLeagueAuthenticationProvider($tokenRequestContext, $scopes);
$requestAdapter = new GraphRequestAdapter($authProvider);
$graphServiceClient = new GraphServiceClient($requestAdapter);

try {
    $response = $graphServiceClient->me()->get();
    $user = $response->wait();
} catch (ApiException $ex) {
    echo $ex->getMessage();
}

```

## Get a collection of items
Some queries against Microsoft Graph return multiple pages of data either due to server-side paging or due to the use of the $top query parameter to specifically limit the page size in a request. When a result set spans multiple pages, Microsoft Graph returns an @odata.nextLink property in the response that contains a URL to the next page of results.

This snippet retrieves the file names in the root of your OneDrive. Ensure you have the [correct permissions](https://docs.microsoft.com/en-us/graph/api/driveitem-list-children?view=graph-rest-1.0&tabs=http#permissions) set.
The Graph API response is deserialized into a collection of `DriveItem` - a model class provided by the SDK.

```php

//TODO: /me/drive/root/children?$top=2

```

For now, you can page through the collection using the @odata.nextLink value. We intend to introduce a Page Iterator component in the future releases:

```php

// TODO: Page through a collection using nextLink

```

## Get the raw response
The SDK allows passing your own response handler (a callable) which will be invoked with the raw PSR-7 response.

To get the raw response:
```php

//TODO: Default raw response handler?

```

## Send an email
This sample sends an email. The request body is constructed using the provided models.
Ensure you have the [right permissions](https://docs.microsoft.com/en-us/graph/api/user-sendmail?view=graph-rest-1.0&tabs=http#permissions).

```php

use Microsoft\Graph\Generated\Me\SendMail\SendMailPostRequestBody;
use Microsoft\Graph\Generated\Models\BodyType;
use Microsoft\Graph\Generated\Models\EmailAddress;
use Microsoft\Graph\Generated\Models\ItemBody;
use Microsoft\Graph\Generated\Models\Message;
use Microsoft\Graph\Generated\Models\Recipient;
use Microsoft\Graph\GraphRequestAdapter;
use Microsoft\Graph\GraphServiceClient;
use Microsoft\Kiota\Abstractions\ApiException;
use Microsoft\Kiota\Authentication\Oauth\AuthorizationCodeContext;
use Microsoft\Kiota\Authentication\PhpLeagueAuthenticationProvider;


$tokenRequestContext = new AuthorizationCodeContext(
    'tenantId',
    'clientId',
    'clientSecret',
    'authCode',
    'redirectUri'
);
$scopes = ['Mail.Send'];
$authProvider = new PhpLeagueAuthenticationProvider($tokenRequestContext, $scopes);
$requestAdapter = new GraphRequestAdapter($authProvider);
$graphServiceClient = new GraphServiceClient($requestAdapter);

try {
    $sender = new EmailAddress();
    $sender->setAddress('john.doe@outlook.com');
    $sender->setName('John Doe');
    $fromRecipient = new Recipient();
    $fromRecipient->setEmailAddress($sender);

    $recipients = [];

    $recipientEmail = new EmailAddress();
    $recipientEmail->setAddress('jane.doe@outlook.com');
    $recipientEmail->setName('Jane Doe');
    $recipient = new Recipient();
    $toRecipient->setEmailAddress($recipientEmail);
    $recipients[] = $toRecipient;

    $emailBody = new ItemBody();
    $emailBody->setContent('Dummy content');
    $emailBody->setContentType(new BodyType(BodyType::TEXT));

    $message = new Message();
    $message->setSubject('Test Email');
    $message->setFrom($fromRecipient);
    $message->setToRecipients($recipients);
    $message->setBody($emailBody);

    $requestBody = new SendMailPostRequestBody();
    $requestBody->setMessage($message);

    $response = $graphServiceClient->me()->sendMail()->post($requestBody)->wait();

} catch (ApiException $ex) {
    echo $ex->getMessage();
}

```

## Download an item

```php

use Microsoft\Graph\GraphRequestAdapter;
use Microsoft\Graph\GraphServiceClient;
use Microsoft\Kiota\Abstractions\ApiException;
use Microsoft\Kiota\Authentication\Oauth\AuthorizationCodeContext;
use Microsoft\Kiota\Authentication\PhpLeagueAuthenticationProvider;

$tokenRequestContext = new AuthorizationCodeContext(
    'tenantId',
    'clientId',
    'clientSecret',
    'authCode',
    'redirectUri'
);
$scopes = ['Files.ReadWrite'];
$authProvider = new PhpLeagueAuthenticationProvider($tokenRequestContext, $scopes);
$requestAdapter = new GraphRequestAdapter($authProvider);
$graphServiceClient = new GraphServiceClient($requestAdapter);

try {
    $fileContents = $graphServiceclient->drivesById('driveId')->itemsById('itemId')->content()->get()->wait();

} catch (ApiException $ex) {
    echo $ex->getMessage();
}

```


## Upload an item

```php

//TODO: /me/drive/root/children/copydoc.docx/content

```

## Passing request headers
Each execution method i.e. get(), post(), put(), patch(), delete() accepts a Request Configuration object where the request headers can be set:

```php

use Microsoft\Graph\Generated\Users\Item\Messages\MessagesRequestBuilderGetRequestConfiguration;

$requestConfig = new MessagesRequestBuilderGetRequestConfiguration();
$requestConfig->headers = ['Prefer' => 'outlook.body-content-type=text'];

$messages = $graphServiceclient->me()->messages()->get($requestConfig)->wait();

```

## Passing query parameters

```php

use Microsoft\Graph\Generated\Users\Item\Messages\MessagesRequestBuilderGetQueryParameters;
use Microsoft\Graph\Generated\Users\Item\Messages\MessagesRequestBuilderGetRequestConfiguration;

$requestConfig = new MessagesRequestBuilderGetRequestConfiguration();
$requestConfig->queryParameters = new MessagesRequestBuilderGetQueryParameters();
$requestConfig->queryParameters->select = ['subject', 'from'];
$requestConfig->queryParameters->skip = 2;
$requestConfig->queryParameters->top = 3;

$messages = $graphServiceClient->me()->messages()->get($requestConfig)->wait();
```

## Customizing middleware configuration

```php

use Microsoft\Graph\Generated\Users\Item\Messages\MessagesRequestBuilderGetRequestConfiguration;
use Microsoft\Kiota\Http\Middleware\Options\RetryOption;

$retryOption = new RetryOption();
$retryOption->setMaxRetries(2);
$retryOption->setDelay(5);

$requestConfig = new MessagesRequestBuilderGetRequestConfiguration();
$requestConfig->options = [RetryOption::class => $retryOption];

$messages = $graphServiceClient->me()->messages()->get($requestConfig)->wait();

```
