<?php

$output = array();
exec('git rev-parse --show-toplevel 2> /dev/null', $output);
 
if (!empty($output)) {
  $repo = $output[0];
 
  $options['config'] = $repo . '/drush/drushrc.php';
  $options['include'] = $repo . '/drush/commands';
  $options['alias-path'] = $repo . '/drush/aliases';
}
