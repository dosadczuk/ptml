<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <meta> HTML element represents Metadata that cannot be represented
 * by other HTML meta-related elements, like base, link, script, style or
 * title.
 */
class Meta extends Element
{
    public function __construct()
    {
        parent::__construct(Tag::Meta);
    }
}
