<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element;
use PTML\Element\Concern\{WithAccesskey,
    WithAlign,
    WithAutocapitalize,
    WithClass,
    WithContenteditable,
    WithContextmenu,
    WithDir,
    WithDraggable,
    WithHidden,
    WithId,
    WithItemprop,
    WithLang,
    WithRole,
    WithSlot,
    WithSpellcheck,
    WithStyle,
    WithTabindex,
    WithTitle,
    WithTranslate};
use PTML\Tag;

/**
 * The <tr> HTML element defines a row of cells in a table. The row's cells
 * can then be established using a mix of td (data cell) and th (header
 * cell) elements.
 */
class Tr extends Element
{
    use WithAccesskey,
        WithAlign,
        WithAutocapitalize,
        WithClass,
        WithContenteditable,
        WithContextmenu,
        WithDir,
        WithDraggable,
        WithHidden,
        WithId,
        WithItemprop,
        WithLang,
        WithRole,
        WithSlot,
        WithSpellcheck,
        WithStyle,
        WithTabindex,
        WithTitle,
        WithTranslate;

    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Tr, $text);
    }
}
