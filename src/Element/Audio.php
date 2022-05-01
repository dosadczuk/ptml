<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <audio> HTML element is used to embed sound content in documents. It
 * may contain one or more audio sources, represented using the src
 * attribute or the source element: the browser will choose the most
 * suitable one. It can also be the destination for streamed media, using a
 * MediaStream.
 */
class Audio extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Audio, $text);
    }
}
