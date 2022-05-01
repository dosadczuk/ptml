<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <embed> HTML element embeds external content at the specified point
 * in the document. This content is provided by an external application or
 * other source of interactive content such as a browser plug-in.
 */
class Embed extends Element
{
    public function __construct()
    {
        parent::__construct(Tag::Embed);
    }
}
