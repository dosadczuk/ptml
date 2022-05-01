<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <template> HTML element is a mechanism for holding HTML that is not
 * to be rendered immediately when a page is loaded but may be instantiated
 * subsequently during runtime using JavaScript.
 */
class Template extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Template, $text);
    }
}
