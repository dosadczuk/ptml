<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <output> HTML element is a container element into which a site or
 * app can inject the results of a calculation or the outcome of a user
 * action.
 */
class Output extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Output, $text);
    }
}
