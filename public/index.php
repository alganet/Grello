<?php

chdir('..'); //back to the application directory
set_include_path('library'.PATH_SEPARATOR.get_include_path());
spl_autoload_register(include 'Respect/Loader.php');
$app = new Container('config');
echo $app->router;