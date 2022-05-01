<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <ruby> HTML element represents small annotations that are rendered
 * above, below, or next to base text, usually used for showing the
 * pronunciation of East Asian characters. It can also be used for
 * annotating other kinds of text, but this usage is less common.
 */
class Ruby extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Ruby, $text);
    }
}
