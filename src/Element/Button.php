<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element;
use PTML\Element\Concern\{WithAccesskey,
    WithAutocapitalize,
    WithAutofocus,
    WithClass,
    WithContenteditable,
    WithContextmenu,
    WithDir,
    WithDisabled,
    WithDraggable,
    WithForm,
    WithFormaction,
    WithFormenctype,
    WithFormmethod,
    WithFormnovalidate,
    WithFormtarget,
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
    WithTranslate,
    WithType,
    WithValue};
use PTML\Tag;

/**
 * The <button> HTML element is an interactive element activated by a user
 * with a mouse, keyboard, finger, voice command, or other assistive
 * technology. Once activated, it then performs a programmable action, such
 * as submitting a form or opening a dialog.
 */
class Button extends Element
{
    use WithAccesskey,
        WithAutocapitalize,
        WithAutofocus,
        WithClass,
        WithContenteditable,
        WithContextmenu,
        WithDir,
        WithDisabled,
        WithDraggable,
        WithForm,
        WithFormaction,
        WithFormenctype,
        WithFormmethod,
        WithFormnovalidate,
        WithFormtarget,
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
        WithTranslate,
        WithType,
        WithValue;

    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Button, $text);
    }
}
