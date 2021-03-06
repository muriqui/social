<?php

/**
 * @file
 * A basic template for twitter social entities using the view_mode
 * social_block
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The name of the social
 * - $url: The standard URL for viewing a social entity
 * - $page: TRUE if this is the main view page $url points too.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-profile
 *   - social-{TYPE}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="twitter-logo">
    <a href="<?php print $twitter_user_url; ?>"><img width="50" height="50" src="<?php print $twitter_logo_path; ?>" /></a>
  </div>
  <div class="content"<?php print $content_attributes; ?>>
    <div class="twitter-user">
      <a href="<?php print $twitter_user_url; ?>">
        <img src="<?php print $twitter_profile_image_url; ?>" />
      </a>
    </div>
    <?php
      print render($content);
    ?>
    <div class="clearfix"></div>
  </div>
</div>
