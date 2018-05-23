# SilverWare UserForms Module

[![Latest Stable Version](https://poser.pugx.org/silverware/userforms/v/stable)](https://packagist.org/packages/silverware/userforms)
[![Latest Unstable Version](https://poser.pugx.org/silverware/userforms/v/unstable)](https://packagist.org/packages/silverware/userforms)
[![License](https://poser.pugx.org/silverware/userforms/license)](https://packagist.org/packages/silverware/userforms)

Extends the [SilverStripe UserForms Module][silverstripe-userforms] for use with [SilverWare][silverware] apps.

## Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Issues](#issues)
- [Contribution](#contribution)
- [Maintainers](#maintainers)
- [License](#license)

## Requirements

- [SilverStripe UserForms Module][silverstripe-userforms]
- [SilverWare Validator][silverware-validator]

## Installation

Installation is via [Composer][composer]:

```
$ composer require silverware/userforms
```

## Configuration

By default, this module will disable the built-in CSS and JavaScript that is required by `silverstripe/userforms`. This
is achieved within the `config.yml` file with the following configuration:

```yaml
SilverStripe\UserForms\Model\UserDefinedForm:
  block_default_userforms_js: true
  block_default_userforms_css: true
```

The configuration file also changes the user form validator to an instance of
[SilverWare Validator][silverware-validator] using the following configuration:

```yaml
SilverStripe\UserForms\Form\UserForm:
  custom_validator_class: SilverWare\Validator\Validator
  custom_validator_enabled: true
```

## Usage

This module adds an extension to the `UserForm` class which replaces the standard validator class with an
instance of [SilverWare Validator][silverware-validator]. This extension also adds a further extension point to
`UserForm` named `updateValidator`, if you need to further customise the validator instance.

Template overrides are also provided by this module which replace the standard user form templates with
ones that will render correctly in [SilverWare][silverware] apps, namely with Bootstrap 4
theme classes and the Parsley.js validation errors provided
by [SilverWare Validator][silverware-validator].

## Issues

Please use the [issue tracker][issues] for bug reports and feature requests.

## Contribution

Your contributions are gladly welcomed to help make this project better.
Please see [contributing](CONTRIBUTING.md) for more information.

## Maintainers

[![Colin Tucker](https://avatars3.githubusercontent.com/u/1853705?s=144)](https://github.com/colintucker) | [![Praxis Interactive](https://avatars2.githubusercontent.com/u/1782612?s=144)](https://www.praxis.net.au)
---|---
[Colin Tucker](https://github.com/colintucker) | [Praxis Interactive](https://www.praxis.net.au)

## License

[BSD-3-Clause](LICENSE.md) &copy; Praxis Interactive

[composer]: https://getcomposer.org
[issues]: https://github.com/praxisnetau//issues
[silverstripe-userforms]: https://github.com/silverstripe/silverstripe-userforms
[silverware-validator]: https://github.com/praxisnetau/silverware-validator
[silverware]: https://github.com/praxisnetau/silverware
