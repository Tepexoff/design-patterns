<?php
include __DIR__ . '/../../autoload.php';

use Fundamental\PropertyContainer\BlogPost;

$post = new BlogPost('Blog Title');
$post->addProperty('description', 'Blog description');
$post->addProperty('create_time', '2022-07-14');
$post->updateProperty('create_time', '2022-07-15');
$post->addProperty('badProp', 'blabla');
//$post->updateProperty('badProp2', '22');
echo '<pre>';var_dump($post->getProperties());echo '</pre>';