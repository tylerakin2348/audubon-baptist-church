<?php
  $value = $section['partials'];

    if ($value) {
      include(get_template_directory() 
        . '/template-components/layouts/partials/' . $value . '.php');
  } 
