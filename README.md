# MSRP

MSRP - is a Magento 2 module that allows to display MSRP price together with
special and regular prices without hiding the prices behind click for price link

If module is used, default `Minimum Advertised Price` should be disabled in
`Stores > Configuration > Sales > Sales > Minimum Advertised Price > Enable MAP`

### Installation

```bash
cd <magento_root>
composer require Swissup/Msrp
bin/magento module:enable Swissup_Msrp
bin/magento setup:upgrade
```
