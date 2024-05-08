# Mutadores y accesorios

## Mutador

- por ejemplo si se quiere que baje a minúscula algún string como por ejemplo del user

```php
    get: fn($value) => ucwords($value),
    set: fn($value) => ucwords(strtolower($value))
```

## Accesor

- 