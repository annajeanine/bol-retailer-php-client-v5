# Bol.com Retailer API client for PHP
This is an open source PHP client for the [Bol.com Retailer API](https://api.bol.com/retailer/public/Retailer-API/v4/releasenotes.html) version 4.

## Installation
This project can easily be installed through Composer:

```
composer require picqer/bol-retailer-php-client
```

## Usage
Create an instance of the client and authenticate
```php
$client = new \Picqer\BolRetailerV4\Client();
$client->authenticate('your-client-id', 'your-client-secret');
```

Then you can get the first page of open orders by calling the getOrders() method on the client
```php
$reducedOrders = $client->getOrders();

foreach ($reducedOrders as $reducedOrder) {
    echo 'hello, I am order ' . $reducedOrder->orderId . PHP_EOL;
}
```

## Exceptions
Methods on the Client may throw Exceptions. All Exceptions have the parent class `Picqer\BolRetailerV4\Exception\Exception`:
- `ConnectionException` is thrown when a problem occurred in the connection (e.g. API server is down or a network issue). You may retry later.
- `ResponseException` is thrown when the received response could not be handled (e.g. not of proper format or unexpected type). Retrying will not help, investigation is needed.
- `UnauthorizedException` is thrown when the server responded with 400 Unauthorized (e.g. invalid credentials).
- `Exception` is thrown when an error occurred in the HTTP library that is not covered by the cases above. We aim to map as much as possible to either `ConnectionException` or `ResponseException`.

## Generated Models and Client
All the Models and Client are generated by the supplied [API specifications by Bol](https://api.bol.com/retailer/public/apispec/v4). By generating these this ensures no typos are made, not every operation needs a test and future (minor) updates to the specifications can easily be applied.

The generated classes contain all data to properly map method arguments and response data to the models: the specifications are only used to generate them. 

### Client
The Client contains all operations specified in the specifications. The 'operationId' is converted to camelCase and used as method name for each operation.

The specifications define types for each request and response (if it needs to send data). If a model for such a type encapsulates just one field, that model is abstracted from the operation have a smoother development experience:
- A method in the Client accepts that field as argument instead of the model
- A method in the Client returns the field from that model instead of the model itself

To generate the Client, the following composer script may be used:
```
# Generates Picqer\BolRetailerV4\Client
composer run-script generate-client
```

### Models
The class names for models are equal to the keys of the array 'definitions' in the specifications.

To generate the Models, the following composer script may be used:
```
# Generates all Picqer\BolRetailerV4\Model\* models
composer run-script generate-models
```

### Quirks
- Some type definitions in de specifications are sentences, for example 'Delivery windows for inbound shipments.'. These are converted to CamelCase and dots are removed.
- Some operations in the specifications have no response type specified, while there is a response. Currently, this is only the case for operations that return CSV.
- There a type 'Return' defined in the specifications. As this is a reserved keyword in PHP, it can't be used as class name for the model (in PHP <= 7), so for now it's replaced with 'ReturnObject'.