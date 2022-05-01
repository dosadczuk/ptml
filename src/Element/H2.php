<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <h1> to <h6> HTML elements represent six levels of section headings.
 */
class H2 extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::H2, $text);
    }
}
