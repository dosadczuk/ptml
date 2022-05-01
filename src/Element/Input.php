<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <input> HTML element is used to create interactive controls for
 * web-based forms in order to accept data from the user; a wide variety of
 * types of input data and control widgets are available, depending on the
 * device and user agent. The <input> element is one of the most powerful
 * and complex in all of HTML due to the sheer number of combinations of
 * input types and attributes.
 */
class Input extends Element
{
    public function __construct()
    {
        parent::__construct(Tag::Input);
    }
}
