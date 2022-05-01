<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <nav> HTML element represents a section of a page whose purpose is
 * to provide navigation links, either within the current document or to
 * other documents. Common examples of navigation sections are menus,
 * tables of contents, and indexes.
 */
class Nav extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Nav, $text);
    }
}
