[![Build Status](https://travis-ci.org/Sam-Burns/http-emoji.svg?branch=master)](https://travis-ci.org/Sam-Burns/http-emoji)

# HTTP Emoji

A PHP library mapping emojis to their corresponding HTTP status codes.

Inspired by [Teapot](https://github.com/shrikeh/teapot).

Contributions welcome.

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

