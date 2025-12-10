<?php
declare(strict_types=1);

namespace Generic\Type;

use Generic\Type\Input;

final class Hidden extends Input {
    protected string $type = 'hidden'; 
}

?>