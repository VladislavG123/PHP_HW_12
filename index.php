<?php
include_once 'vendor/autoload.php';

use Step\Tag;
$input = Tag::a();
$input->setAttribute('href', 'https://google.com');
echo $input;
