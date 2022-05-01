<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <del> HTML element represents a range of text that has been deleted
 * from a document. This can be used when rendering "track changes" or
 * source code diff information, for example. The ins element can be used
 * for the opposite purpose: to indicate text that has been added to the
 * document.
 */
class Del extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Del, $text);
    }
}
