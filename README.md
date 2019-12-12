# monolog-mdc

A Monolog processor to use mapped diagnostic context (MDC) with your logging. This enables you to store key-values pair that will injected into the context of all your subsequent Monolog logs. 

## Usage

Install with Composer:

```
composer require stevenrombauts/monolog-mdc
```
   
Add the processor to your Monolog instance and use as follows:

```php
<?php
use Stevenrombauts\MonologMDC;

$logger = new Monolog\Logger('mdc');
$logger->pushProcessor(new MDCProcessor());

MDC::add('foo', 'bar');
```

The `foo=bar` key-value pair will be included in all subsequent logs.