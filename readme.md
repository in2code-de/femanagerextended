# Example addon extension to TYPO3 extension femanager

# Changelog

- 13.0.0 Add compatibility for TYPO3 v13 and femanager v13, add ddev environment for local development
- 4.0.0 Add compatibility for TYPO3 v12
- 3.0.0 Add compatibility for TYPO3 v11
- 2.0.0 Add compatibility for TYPO3 v10
- 1.1.0 Add missing configuration for TwitterId and SkypeId fields
- 1.0.2 Updated dependencies
- 1.0.1 Composer.json added
- 1.0.0 PSR2 refactoring, changing vendor name
- 0.1.2 First upload to github

# Features

* add new fields twitter and skype as example to extend with new fields
* add example for objectstorage

# Extension Development

The extension comes with its own local development environment based on [ddev](https://ddev.com/)
(TYPO3 13 with femanager 13 and some test pages).

## Requirements

1. Install ddev, see: https://ddev.readthedocs.io/en/stable/#installation
2. Install git-lfs, see: https://git-lfs.github.com/

## Installation

1. Clone this repository
2. Run `ddev start`
3. Run `ddev initialize` to setup configurations and test database
4. Open https://femanagerextended.ddev.site/ (frontend) or https://femanagerextended.ddev.site/typo3/ (backend)

The page https://femanagerextended.ddev.site/femanagerextended contains a registration form with the additional fields of
this extension (twitterId, skypeId, userCategories).
