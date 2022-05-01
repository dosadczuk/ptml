<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <dd> HTML element provides the description, definition, or value for
 * the preceding term (dt) in a description list (dl).
 */
class Dd extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Dd, $text);
    }
}
