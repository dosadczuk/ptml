<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <details> HTML element creates a disclosure widget in which
 * information is visible only when the widget is toggled into an "open"
 * state. A summary or label must be provided using the summary element.
 */
class Details extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Details, $text);
    }
}
