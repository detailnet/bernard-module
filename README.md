# Bernard Module for Zend Framework 2

[![Build Status](https://travis-ci.org/detailnet/bernard-module.svg?branch=master)](https://travis-ci.org/detailnet/bernard-module)
[![Coverage Status](https://img.shields.io/coveralls/detailnet/bernard-module.svg)](https://coveralls.io/r/detailnet/bernard-module)
[![Latest Stable Version](https://poser.pugx.org/detailnet/bernard-module/v/stable.svg)](https://packagist.org/packages/detailnet/bernard-module)
[![Latest Unstable Version](https://poser.pugx.org/detailnet/bernard-module/v/unstable.svg)](https://packagist.org/packages/detailnet/bernard-module)

## Introduction
This module integrates [Bernard](https://github.com/bernardphp/bernard) with [Zend Framework 2](https://github.com/zendframework/zf2).

## Requirements
[Zend Framework 2 Skeleton Application](http://www.github.com/zendframework/ZendSkeletonApplication) (or compatible architecture)

## Installation
Install the module through [Composer](http://getcomposer.org/) using the following steps:

  1. `cd my/project/directory`
  
  2. Create a `composer.json` file with following contents (or update your existing file accordingly):

     ```json
     {
         "require": {
             "detailnet/bernard-module": "0.1.*"
         }
     }
     ```
  3. Install Composer via `curl -s http://getcomposer.org/installer | php` (on Windows, download
     the [installer](http://getcomposer.org/installer) and execute it with PHP)
     
  4. Run `php composer.phar self-update`
     
  5. Run `php composer.phar install`
  
  6. Open `configs/application.config.php` and add following key to your `modules`:

     ```php
     'Detail\Bernard',
     ```

  7. Copy `vendor/detailnet/bernard-module/config/bernard.local.php.dist` into your application's
     `config/autoload` directory, rename it to `bernard.local.php` and make the appropriate changes.

## Usage
tbd
