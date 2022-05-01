<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <ul> HTML element represents an unordered list of items, typically
 * rendered as a bulleted list.
 */
class Ul extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Ul, $text);
    }
}
