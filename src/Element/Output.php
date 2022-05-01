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
    WithFor,
    WithForm,
    WithHidden,
    WithId,
    WithItemprop,
    WithLang,
    WithName,
    WithRole,
    WithSlot,
    WithSpellcheck,
    WithStyle,
    WithTabindex,
    WithTitle,
    WithTranslate};
use PTML\Tag;

/**
 * The <output> HTML element is a container element into which a site or
 * app can inject the results of a calculation or the outcome of a user
 * action.
 */
class Output extends Element
{
    use WithAccesskey,
        WithAutocapitalize,
        WithClass,
        WithContenteditable,
        WithContextmenu,
        WithDir,
        WithDraggable,
        WithFor,
        WithForm,
        WithHidden,
        WithId,
        WithItemprop,
        WithLang,
        WithName,
        WithRole,
        WithSlot,
        WithSpellcheck,
        WithStyle,
        WithTabindex,
        WithTitle,
        WithTranslate;

    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Output, $text);
    }
}
