<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <a> HTML element (or anchor element), with its href attribute,
 * creates a hyperlink to web pages, files, email addresses, locations in
 * the same page, or anything else a URL can address.
 */
class A extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::A, $text);
    }
}
