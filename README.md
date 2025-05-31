
 **Warning:**


Instana PHP SDK is deprecated. One year from today May 30, 2025 we will officially end support and declare it End of Life (EOL).

We strongly encourage all SDK users to migrate their applications to the [OpenTelemetry SDK Instana exporter](https://github.com/instana/opentelemetry-php-exporter). Please refer to our [OTel SDK exporter](https://www.ibm.com/docs/en/instana-observability/current?topic=php-opentelemetry-exporter) documentation for guidance on the usage process.

# Instana PHP SDK stubs

This repo provide stubs for the [Instana PHP SDK][docs]. You can use the stubs for adding autocompletion to your IDE. In addition, the stubs serve as a no-op fallback in case the Instana PHP SDK is unavailable in your code. The stubs provide no other functionality. The actual Instana PHP SDK is bundled with the Instana PHP Tracing extension.

## Installing via Composer

Install Composer in a common location or in your project:

    curl -s http://getcomposer.org/installer | php

Install via composer:

    composer require instana/instana-php-sdk

## Usage

Please see our [official documentation for the Instana PHP Tracer][docs] for a usage example.

## Example

To annotate custom information about a http-endpoint, you can use the
[available Tags for processing][tags].

```php
$tracer = new \Instana\Tracer();

$entry = $tracer->getEntrySpan();

$entry->annotate('http.path_tpl', '/articles/{article}/comments');
```

 [docs]: https://docs.instana.io/ecosystem/php/#php-sdk
 [tags]: https://www.instana.com/docs/tracing/custom-best-practices/#processed-tags
