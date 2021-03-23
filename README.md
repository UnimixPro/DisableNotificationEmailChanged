# Mage2 Module Unimix DisableNotificationEmailChanged

    ``unimix/module-disablenotificationemailchanged``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Disable Order Email Changed

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Unimix`
 - Enable the module by running `php bin/magento module:enable Unimix_DisableNotificationEmailChanged`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require unimix/module-disablenotificationemailchanged`
 - enable the module by running `php bin/magento module:enable Unimix_DisableNotificationEmailChanged`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration




## Specifications

 - Plugin
	- aroundCredentialsChanged - Magento\Customer\Model\EmailNotification > Unimix\DisableNotificationEmailChanged\Plugin\Magento\Customer\Model\EmailNotification


## Attributes



