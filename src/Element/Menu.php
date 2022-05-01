<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <menu> HTML element is a semantic alternative to ul. It represents
 * an unordered list of items (represented by li elements), each of which
 * represents a link or other command that the user can activate.
 */
class Menu extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Menu, $text);
    }
}
