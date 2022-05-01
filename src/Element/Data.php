<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <data> HTML element links a given piece of content with a
 * machine-readable translation. If the content is time- or date-related,
 * the time element must be used.
 */
class Data extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Data, $text);
    }
}
