<?php
mb_internal_encoding("UTF-8");
$hostname = gethostname();

if($hostname == 'production'){
    define('APPLICATION_ENV', 'production');
}else if($hostname == 'testing'){
    define('APPLICATION_ENV', 'testing');
}else {
    define('APPLICATION_ENV', 'development');
}