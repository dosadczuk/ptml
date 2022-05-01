<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <link> HTML element specifies relationships between the current
 * document and an external resource. This element is most commonly used to
 * link to CSS, but is also used to establish site icons (both "favicon"
 * style icons and icons for the home screen and apps on mobile devices)
 * among other things.
 */
class Link extends Element
{
    public function __construct()
    {
        parent::__construct(Tag::Link);
    }
}
