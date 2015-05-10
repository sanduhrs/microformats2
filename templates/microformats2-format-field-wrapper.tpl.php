<?php

/**
 * @file
 * Default field items item wrapper to inject microformats2 meta data
 *
 * Available variables:
 * - $content: A string of content to be wrapped with attributes.
 * - $attributes: An array of attributes to be placed on the wrapping element.
 *
 * @ingroup themeable
 */
?>
<div<?php print $attributes ?>>
  <?php print render($content); ?>
</div>
