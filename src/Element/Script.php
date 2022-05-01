<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <script> HTML element is used to embed executable code or data; this
 * is typically used to embed or refer to JavaScript code. The <script>
 * element can also be used with other languages, such as WebGL's GLSL
 * shader programming language and JSON.
 */
class Script extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Script, $text);
    }
}
