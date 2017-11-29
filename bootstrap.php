<?php
$paths = array(
    SITE_BASE. DIRECTORY_SEPARATOR . "lib",
    SITE_BASE. DIRECTORY_SEPARATOR . "controllers",
    SITE_BASE. DIRECTORY_SEPARATOR . "views");

set_include_path(implode(PATH_SEPARATOR, $paths));
