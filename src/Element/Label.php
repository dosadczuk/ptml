<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <label> HTML element represents a caption for an item in a user
 * interface.
 */
class Label extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Label, $text);
    }
}
