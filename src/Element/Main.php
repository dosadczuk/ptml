<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <main> HTML element represents the dominant content of the body of a
 * document. The main content area consists of content that is directly
 * related to or expands upon the central topic of a document, or the
 * central functionality of an application.
 */
class Main extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Main, $text);
    }
}
