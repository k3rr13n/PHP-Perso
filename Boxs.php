<?php
declare(strict_types=1);

interface InputRenderInterface
{
    public function render();
}

abstract class GenericFormElement implements InputRenderInterface
{
    protected string $type;

    protected bool $required = false;

    protected mixed $value = '';

    public function __construct(
        protected readonly string $name, // Readonly cause property is immutable
        $required = false, 
        string $defaultValue = ''
    )
    {
        $this->required = $required;
        $this->value = $defaultValue;
    }

    public function __toString(): string
    {
        return $this->render();
    }

    function getId(): string 
    {
        return sprintf('form_%s', $this->name);
    }

    function getName(): string 
    {
        return $this->name;
    }

    function getValue(): array|string 
    {
        return $this->value;
    }

    function isRequired(): bool
    {
        return $this->required;
    }
}

abstract class Input extends GenericFormElement
{
    public function render(): string
    {
        return sprintf(
            '<input type="%s" %s value="%s" name="form[%s]" id="%s"/>', 
            $this->type,
            $this->isRequired() ? 'required="required"' : '',
            $this->getValue(),
            $this->getName(),
            $this->getId()
        );
    }
}

// les classe qui ont final dans leur implementation ne peuvent pas etre parent d'une autre classe
final class Text extends Input {
    protected string $type = 'text'; 
}

final class Hidden extends Input {
    protected string $type = 'hidden'; 
}

final class Checkbox extends Input {
    protected string $type = 'checkbox'; 
}

final class Textarea extends GenericFormElement
{
    public function render(): string
    {
        return sprintf(
            '<textarea name="form[%s]" %s id="%s">%s<textarea/>', 
            $this->getName(),
            $this->isRequired() ? 'required="required"' : '',
            $this->getId(),
            $this->getValue(),
        );
    }
}

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
];

// foreach($form as $field) {
//     $className = ucfirst($field['type']);
//     echo new $className($field['name'], $field['required']).PHP_EOL;
// }
// die();

$text = new Text('myinput', false, 'coucou');
echo $text->render().PHP_EOL;

$checkbox = new Checkbox('mycheckbox', true);
echo $checkbox->render().PHP_EOL;

$hidden = new Hidden('myhidden');
echo $hidden->render().PHP_EOL;

echo new Text('mytexttostring').PHP_EOL;

echo new Textarea('mytextarea', true, 'default value').PHP_EOL;



?>