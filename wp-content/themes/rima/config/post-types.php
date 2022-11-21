<?php

// Include all files within config/post-types
$dir = new DirectoryIterator(get_template_directory() . "/config/post-types");
foreach ($dir as $fileinfo):
    if(!$fileinfo->isDot()):
		  require_once $fileinfo->getPathname();
    endif;
endforeach;