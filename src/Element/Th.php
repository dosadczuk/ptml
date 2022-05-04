<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element\Concern\{
    WithAccesskey,
    WithAlign,
    WithAutocapitalize,
    WithClass,
    WithColspan,
    WithContenteditable,
    WithContextmenu,
    WithDir,
    WithDraggable,
    WithHeaders,
    WithHidden,
    WithId,
    WithItemprop,
    WithLang,
    WithRole,
    WithRowspan,
    WithScope,
    WithSlot,
    WithSpellcheck,
    WithStyle,
    WithTabindex,
    WithTitle,
    WithTranslate
};
use PTML\ElementWithChildren;
use PTML\Tag;

/**
 * The <th> HTML element defines a cell as header of a group of table
 * cells. The exact nature of this group is defined by the scope and
 * headers attributes.
 */
class Th extends ElementWithChildren
{
    use WithAccesskey,
        WithAlign,
        WithAutocapitalize,
        WithClass,
        WithColspan,
        WithContenteditable,
        WithContextmenu,
        WithDir,
        WithDraggable,
        WithHeaders,
        WithHidden,
        WithId,
        WithItemprop,
        WithLang,
        WithRole,
        WithRowspan,
        WithScope,
        WithSlot,
        WithSpellcheck,
        WithStyle,
        WithTabindex,
        WithTitle,
        WithTranslate;

    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Th, $text);
    }
}
