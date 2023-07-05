# Example addon extension to TYPO3 extension femanager

# Changelog

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

The best way to work on this extension is to use the Developmentenvironment of in2code/femanager.
After starting up, you can simply install the extension with the command `ddev composer req --dev in2code/femanagerextended:@dev` and commit from the repository in the directory `packages/femanagerextended`
