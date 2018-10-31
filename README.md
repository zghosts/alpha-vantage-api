# Alpha Vantage PHP Client

[![Build Status](https://travis-ci.org/kokspflanze/alpha-vantage-api.svg?branch=master)](https://travis-ci.org/kokspflanze/alpha-vantage-api)

This library is a PHP client implementation for [Alpha Vantage](http://alphavantage.co)

* [Installation](#installation)
* [Example usage](#example-usage)

Installation
---

The easiest way to install the library is by using composer
```
composer require kokspflanze/alpha-vantage-api

```

Before you use the library you should create an API-key on [https://www.alphavantage.co/support/#api-key] 


Example usage
---

Queries can be executed through an instance of the client

```php
<?php
use AlphaVantage\Options;
use AlphaVantage\Client;

$options = (new Options())->setApiKey('demo');

$client = new Client($options);

$json = $client->timeseries()->daily('MSFT');

```

Entrypoints
---
The different api's are exposed as follows:

| AlphaVantage                | Client          |
|-----------------------------|-----------------|
| Stock Time Series           | $client->timeseries()      |
| Foreign Exchange (FX)       | $client->foreignexchange() |
| Digital & Crypto Currencies | $client->digitalcurrency() |
| Technical Indicators        | $client->indicators()      |
| Sector Performances         | $client->performance()     |

