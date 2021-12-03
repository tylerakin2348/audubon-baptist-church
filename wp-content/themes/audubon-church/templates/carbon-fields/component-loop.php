<?php 
foreach ( $sections as $section ) :
    $value = $section['layout_selector'];
    include(get_template_directory() . 
        '/template-components/layouts/' . 
        $value . '.php');
endforeach; ?>