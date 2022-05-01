<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <footer> HTML element represents a footer for its nearest ancestor
 * sectioning content or sectioning root element. A <footer> typically
 * contains information about the author of the section, copyright data or
 * links to related documents.
 */
class Footer extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Footer, $text);
    }
}
