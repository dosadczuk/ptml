<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <summary> HTML element specifies a summary, caption, or legend for a
 * details element's disclosure box. Clicking the <summary> element toggles
 * the state of the parent <details> element open and closed.
 */
class Summary extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Summary, $text);
    }
}
