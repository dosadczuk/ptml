<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <select> HTML element represents a control that provides a menu of
 * options.
 */
class Select extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Select, $text);
    }
}
