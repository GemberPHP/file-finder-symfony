# 🫚 Gember File Finder: Symfony Finder
[![Build Status](https://scrutinizer-ci.com/g/GemberPHP/file-finder-symfony/badges/build.png?b=main)](https://github.com/GemberPHP/file-finder-symfony/actions)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/GemberPHP/file-finder-symfony.svg?style=flat)](https://scrutinizer-ci.com/g/GemberPHP/file-finder-symfony/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/GemberPHP/file-finder-symfony.svg?style=flat)](https://scrutinizer-ci.com/g/GemberPHP/file-finder-symfony)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE)
[![PHP Version](https://img.shields.io/badge/php-%5E8.3-8892BF.svg?style=flat)](http://www.php.net)

[Gember Event Sourcing](https://github.com/GemberPHP/event-sourcing) File Finder adapter based on [symfony/finder](https://github.com/symfony/finder).

> All external dependencies in Gember Event Sourcing are organized into separate packages,
> making it easy to swap out a vendor adapter for another.

## Installation
Install with Composer:
```bash
composer require gember/file-finder-symfony
```

## Configuration
Bind this adapter to the `Finder` interface in your service definitions.

### Examples

#### Vanilla PHP
```php
use Gember\FileFinderSymfony\SymfonyFinder;
use Gember\FileFinderSymfony\SymfonyFinderFactory;

$finder = new SymfonyFinder(
    new SymfonyFinderFactory(), 
);
```

#### Symfony
It is recommended to use the [Symfony bundle](https://github.com/GemberPHP/event-sourcing-symfony-bundle) to configure Gember Event Sourcing.
With this bundle, the adapter is automatically set as the default for File Finder.

If you're not using the bundle, you can bind it directly to the `Finder` interface.

```yaml
Gember\FileFinderSymfony\SymfonyFinderFactory: ~

Gember\EventSourcing\Util\File\Finder\Finder:
  class: Gember\FileFinderSymfony\SymfonyFinder
  arguments:
    - '@Gember\FileFinderSymfony\SymfonyFinderFactory'
```
