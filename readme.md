# Therapize

## A WordPress theme for Therapists

A theme for therapists.


## Install Project Dependencies

```
composer install
npm install
```


## Linting

This project uses PHP_CodeSniffer (installed via Composer) to lint PHP. It also uses wpcs (WordPress coding standards) 'sniffs' to validate code in adherence with WP coding standards.


### Global install PHP_CodeSniffer

Install PHP_CodeSniffer globally

`composer global require "squizlabs/php_codesniffer=*"`


Make sure you have the composer bin dir in your PATH. The default value is `~/.composer/vendor/bin`, but you can check the value that you **need** to use by running `composer global config bin-dir --absolute`

#### Update the PATH variable

Open `~/.bashrc` and add a line to update the PATH variable with this location.

`sudo nano ~/.bashrc`

Add/update the following line:

export PATH="~/.composer/vendor/bin:$PATH"`

Save and close, then reload your bash config:

`source ~/.bashrc`

Confirm the variable now contains the location:

`echo $PATH`

#### Update VS Code settings file with local paths:

```
"phpcs.executablePath": "./vendor/squizlabs/php_codesniffer/bin/phpcs",
"phpcs.standard": "WordPress",
"phpcs.composerJsonPath": ".composer.json",
"phpcbf.executablePath": "./vendor/squizlabs/php_codesniffer/bin/phpcbf",
"phpcbf.standard": "WordPress",
"phpsab.executablePathCS": "./vendor/squizlabs/php_codesniffer/bin/phpcs",
"phpsab.executablePathCBF": "./vendor/squizlabs/php_codesniffer/bin/phpcbf",
"phpsab.composerJsonPath": ".composer.json",
```


### Register a coding standard (i.e. WP wpcs):


`./vendor/squizlabs/php_codesniffer/bin/phpcs --config-set installed_paths ../../wp-coding-standards/wpcs`

Check the installed standards:

'./vendor/squizlabs/php_codesniffer/bin/phpcs -i'

#### Specifying a Coding Standard

'./vendor/bin/phpcs --standard=WordPress /path/to/code/myfile.inc'


### Usage

Check code

'./vendor/bin/phpcs **/*.php'

Fix Code

'./vendor/bin/phpcbf **/*.php'

Summarise large outputs:

'./vendor/bin/phpcs --report=summary **/*.php'


[PHP_CodeSniffer Github](https://github.com/squizlabs/PHP_CodeSniffer#installation)
[WordPress Coding Standards for PHP_CodeSniffer Github](https://github.com/WordPress/WordPress-Coding-Standards#installation)