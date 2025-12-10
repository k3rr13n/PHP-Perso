<?php
declare(strict_types=1);

use lesFormsPasSympatoche\Autoloader;

require 'lesFormsPasSympatoche/Autoloader.php';
Autoloader::register();

use Generic\Type\Text;
use Generic\Type\Hidden;
use Generic\Type\Checkbox;
use Generic\Type\Textarea;

$form = [
    [
        'type' => 'text',
        'name' => 'mytext',
        'required' => false,
    ],
    [
        'type' => 'hidden',
        'name' => 'hiddenfield',
        'required' => false,
    ],
    [
        'type' => 'textarea',
        'name' => 'mytextarea',
        'required' => true,
    ],
    [
        'type' => 'checkbox',
        'name' => 'mycheckbox',
        'required' => true,
    ],

];

foreach($form as $field) {
    $className = 'Generic\\Type\\'.ucfirst($field['type']);
    echo new $className($field['name'], $field['required']).PHP_EOL;
}
die();

$text = new Text('myinput', false, 'coucou');
echo $text->render().PHP_EOL;

$checkbox = new Checkbox('mycheckbox', true);
echo $checkbox->render().PHP_EOL;

$hidden = new Hidden('myhidden');
echo $hidden->render().PHP_EOL;

echo new Text('mytexttostring').PHP_EOL;

echo new Textarea('mytextarea', true, 'default value').PHP_EOL;



?>