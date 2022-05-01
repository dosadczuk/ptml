<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element;
use PTML\Element\Concern\{WithAccesskey,
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
 * The <template> HTML element is a mechanism for holding HTML that is not
 * to be rendered immediately when a page is loaded but may be instantiated
 * subsequently during runtime using JavaScript.
 */
class Template extends Element
{
    use WithAccesskey,
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
        parent::__construct(Tag::Template, $text);
    }
}
