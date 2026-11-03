# eloquage/healthcheck-pgvector

Checks if the `vector` extension (pgvector) is enabled and active in PostgreSQL.

## Usage

```php
use IllumaLaw\HealthCheckPgvector\PgvectorExtensionCheck;
use Spatie\Health\Facades\Health;

Health::checks([
    PgvectorExtensionCheck::new()
        ->required(true), // If true, FAIL if missing. If false, WARNING.
]);
```

## Configuration

Publish config: `php artisan vendor:publish --tag="healthcheck-pgvector-config"`

Options in `config/healthcheck-pgvector.php`:
- `required`: (bool) Global default for strictness.
