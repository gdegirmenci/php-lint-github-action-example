# PHP Lint Github Action Example
This is an example usage of Github action to improve code quality with using linter.

For an action, [Super Linter](https://github.com/github/super-linter) is used, which is Github's official release.

## Configuration
The action detail could be found in `.github/workflows/linter.yml`

The configuration file for [PHP Code Sniffer](https://github.com/squizlabs/PHP_CodeSniffer) could be found in `.github/linters/phpcs.xml`

Other possible rule sets to define in config file could be found from [here](https://github.com/squizlabs/PHP_CodeSniffer/tree/master/src/Standards) as well.
