# HTTP Emoji

A PHP library mapping emojis to their corresponding HTTP status codes.

Inspired by [Teapot](https://github.com/shrikeh/teapot).

## Usage Example

```php
use SamBurns\HttpEmoji;

$statusCode = HttpEmoji::😱;
// $statusCode is now 500
```

## Installation

```bash
composer require samburns/http-emoji
```

