<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <noscript> HTML element defines a section of HTML to be inserted if
 * a script type on the page is unsupported or if scripting is currently
 * turned off in the browser.
 */
class Noscript extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Noscript, $text);
    }
}
