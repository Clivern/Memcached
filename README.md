Memcached
=========

Memcached Client for PHP.

[![CI Build](https://github.com/Clivern/Memcached/actions/workflows/php.yml/badge.svg)](https://github.com/Clivern/Memcached/actions/workflows/php.yml)
[![License](https://poser.pugx.org/clivern/memcached/license.svg)](https://packagist.org/packages/clivern/memcached)
[![Latest Stable Version](https://poser.pugx.org/clivern/memcached/v/stable.svg)](https://packagist.org/packages/clivern/memcached)

Installation
------------

To install the package via `composer`, use the following:

```php
composer require clivern/memcached
```

This command requires you to have Composer installed globally.


Usage
-----

After adding the package as a dependency, Please read the following:

```php
$memcache = new \Clivern\Memcached\MemcachedClient('127.0.0.1', 11211);
$memcache->add('test_memcache', 'test');
var_dump($memcache->get('test_memcache'));
```

Misc
====

Changelog
---------
Version 1.1.0:
```
Support "check and set" Operation.
```

Version 1.0.0:
```
Initial Release.
```

Acknowledgements
----------------

© 2019, Clivern. Released under [MIT License](https://opensource.org/licenses/mit-license.php).

**Memcached** is authored and maintained by [@clivern](http://github.com/clivern).
