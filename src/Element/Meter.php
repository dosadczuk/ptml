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
    WithForm,
    WithHidden,
    WithHigh,
    WithId,
    WithItemprop,
    WithLang,
    WithLow,
    WithMax,
    WithMin,
    WithOptimum,
    WithRole,
    WithSlot,
    WithSpellcheck,
    WithStyle,
    WithTabindex,
    WithTitle,
    WithTranslate,
    WithValue};
use PTML\Tag;

/**
 * The <meter> HTML element represents either a scalar value within a known
 * range or a fractional value.
 */
class Meter extends Element
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
        WithHigh,
        WithId,
        WithItemprop,
        WithLang,
        WithLow,
        WithMax,
        WithMin,
        WithOptimum,
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
        parent::__construct(Tag::Meter, $text);
    }
}
