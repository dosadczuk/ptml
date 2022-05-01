<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <code> HTML element displays its contents styled in a fashion
 * intended to indicate that the text is a short fragment of computer code.
 */
class Code extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Code, $text);
    }
}
