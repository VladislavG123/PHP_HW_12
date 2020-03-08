<?php
include_once 'vendor/autoload.php';

use Step\Tag;
$input = Tag::input();
$input->setAttribute('class', 'row');
echo $input;