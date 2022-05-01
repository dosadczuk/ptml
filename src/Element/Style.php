<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <style> HTML element contains style information for a document, or
 * part of a document. It contains CSS, which is applied to the contents of
 * the document containing the <style> element.
 */
class Style extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Style, $text);
    }
}
