<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <var> HTML element represents the name of a variable in a
 * mathematical expression or a programming context. It's typically
 * presented using an italicized version of the current typeface, although
 * that behavior is browser-dependent.
 */
class Variable extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Variable, $text);
    }
}
