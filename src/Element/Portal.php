<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <portal> HTML element enables the embedding of another HTML page
 * into the current one for the purposes of allowing smoother navigation
 * into new pages.
 */
class Portal extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Portal, $text);
    }
}
