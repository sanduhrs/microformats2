microformats2
-------------

This module provides a way to markup your entities with microformats2.
It therefore wraps a field's content into a span or div with the corresponding classes.

Installation
------------

1. Normal Drupal module installation
   See https://www.drupal.org/documentation/install/modules-themes

2. Create some fields with Content you want to markup with microformats2

Optional dependencies
---------------------

3. You may use the field_group module to group fields into formats
   See https://www.drupal.org/project/field_group

Supported third parties
-----------------------

4. You may use addressfield module to markup addresses
   See https://www.drupal.org/project/addressfield

Usage
-----

At the time being there is no ui to control the mapping.
Instead use drush to save the mapping to a variable.

    php -r "print json_encode(array('field_name', 'microformats2_property_name'));"  | drush vset --format=json

Markup a simple microformats2 h-card
------------------------------------

* Download and enable field_group module
  `drush en -y field_group`
* Create a field_group named `group_hcard`
* Create a field named `field_given_name`
* Create a field named `field_family_name`
* Move the two fields into the field group
* Mark up the information with microformats2

    php -r "print json_encode(array('group_hcard' => array('format' => 'h-card'), 'field_given_name' => 'p-given-name', 'field_family_name' => 'p-family-name'));"  | drush vset --format=json

Markup a more complex microformats2 h-card
------------------------------------------

* Download and enable addressfield module
  `drush en -y addressfield`
* Create a addressfield named `field_address`
* Move it into the previously created `group_hcard`
* Mark up the information with microformats2

    drush vset --format=json microformats2_mapping  `php -r "print json_encode(array('group_hcard' => array('format' => 'h-card'), 'field_full_name' => 'p-name', 'field_given_name' => 'p-given-name', 'field_family_name' => 'p-family-name', 'field_address' => array('format' => 'h-adr', 'properties' => array('organisation_block|organisation_name' => 'p-label', 'name_block|name_line' => 'p-label', 'street_block|thoroughfare' => 'p-street-address', 'street_block|premise' => 'p-extended-address', 'locality_block|postal_code' => 'p-postal-code', 'locality_block|locality' => 'p-locality', 'locality_block|dependent_locality' => 'p-locality', 'locality_block|administrative_area' => 'p-locality', 'country' => 'p-country-name'))));"`
