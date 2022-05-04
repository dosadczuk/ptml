<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element\Concern\{
    WithAccesskey,
    WithAutocapitalize,
    WithClass,
    WithContenteditable,
    WithContextmenu,
    WithDir,
    WithDraggable,
    WithForm,
    WithHidden,
    WithId,
    WithItemprop,
    WithLang,
    WithMax,
    WithRole,
    WithSlot,
    WithSpellcheck,
    WithStyle,
    WithTabindex,
    WithTitle,
    WithTranslate,
    WithValue
};
use PTML\ElementWithChildren;
use PTML\Tag;

/**
 * The <progress> HTML element displays an indicator showing the completion
 * progress of a task, typically displayed as a progress bar.
 */
class Progress extends ElementWithChildren
{
    use WithAccesskey,
        WithAutocapitalize,
        WithClass,
        WithContenteditable,
        WithContextmenu,
        WithDir,
        WithDraggable,
        WithForm,
        WithHidden,
        WithId,
        WithItemprop,
        WithLang,
        WithMax,
        WithRole,
        WithSlot,
        WithSpellcheck,
        WithStyle,
        WithTabindex,
        WithTitle,
        WithTranslate,
        WithValue;

    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Progress, $text);
    }
}
