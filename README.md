# Advent of Code

This repository contains my solutions to the [Advent of Code](https://adventofcode.com/) challenges, written in PHP.

The individual challenges can be found in the `bin` directory. The tests are in the `tests` directory, and the source code in the `src` directory.

## Getting Started

PHP 7.4 or above and Composer is expected to be installed on your system.

### Installing Composer

For instructions on how to install Composer visit https://getcomposer.org/download/

### Installing

After cloning this repository, change into the newly created directory and run

```bash
composer install
```

This will install all dependencies needed for the project.

## Running the Tests

All tests can be run by executing

```bash
vendor/bin/phpunit
```

`phpunit` will automatically find all tests inside the `tests` directory and run them based on the configuration in the `phpunit.xml` file.

## Built With

- [PHP](https://secure.php.net/)
- [Composer](https://getcomposer.org/)
- [PHPUnit](https://phpunit.de/)
