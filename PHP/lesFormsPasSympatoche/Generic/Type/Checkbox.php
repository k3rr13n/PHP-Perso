<?php
declare(strict_types=1);

namespace Generic\Type;

use Generic\Type\Input;

final class Checkbox extends Input {
    protected string $type = 'checkbox'; 

    public function render(): string
    {
        return sprintf(
            '<input type="%s" %s value="%s" name="form[%s]" id="%s" %s/>', 
            $this->type,
            $this->isRequired() ? 'required="required"' : '',
            $this->getValue(),
            $this->getName(),
            $this->getId(),
            $this->getValue()
        );
    }
}

?>