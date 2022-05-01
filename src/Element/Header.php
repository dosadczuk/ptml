<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <header> HTML element represents introductory content, typically a
 * group of introductory or navigational aids. It may contain some heading
 * elements but also a logo, a search form, an author name, and other
 * elements.
 */
class Header extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Header, $text);
    }
}
