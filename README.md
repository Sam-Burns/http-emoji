[![Build Status](https://travis-ci.org/Sam-Burns/http-emoji.svg?branch=master)](https://travis-ci.org/Sam-Burns/http-emoji)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Sam-Burns/http-emoji/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Sam-Burns/http-emoji/?branch=master)

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

