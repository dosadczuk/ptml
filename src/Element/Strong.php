<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <strong> HTML element indicates that its contents have strong
 * importance, seriousness, or urgency. Browsers typically render the
 * contents in bold type.
 */
class Strong extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Strong, $text);
    }
}
