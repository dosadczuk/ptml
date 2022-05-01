<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <base> HTML element specifies the base URL to use for all relative
 * URLs in a document. There can be only one <base> element in a document.
 */
class Base extends Element
{
    public function __construct()
    {
        parent::__construct(Tag::Base);
    }
}
