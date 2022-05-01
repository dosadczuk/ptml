<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element;
use PTML\Element\Concern\{
    WithAccesskey,
	WithAutocapitalize,
	WithAutocomplete,
	WithAutofocus,
	WithClazz,
	WithCols,
	WithContenteditable,
	WithContextmenu,
	WithDir,
	WithDirname,
	WithDisabled,
	WithDraggable,
	WithEnterkeyhint,
	WithForm,
	WithHidden,
	WithId,
	WithInputmode,
	WithItemprop,
	WithLang,
	WithMaxlength,
	WithMinlength,
	WithName,
	WithPlaceholder,
	WithReadonly,
	WithRequired,
	WithRole,
	WithRows,
	WithSlot,
	WithSpellcheck,
	WithStyle,
	WithTabindex,
	WithTitle,
	WithTranslate,
	WithWrap
};
use PTML\Tag;

/**
 * The <textarea> HTML element represents a multi-line plain-text editing
 * control, useful when you want to allow users to enter a sizeable amount
 * of free-form text, for example a comment on a review or feedback form.
 */
class Textarea extends Element
{
    use WithAccesskey,
		WithAutocapitalize,
		WithAutocomplete,
		WithAutofocus,
		WithClazz,
		WithCols,
		WithContenteditable,
		WithContextmenu,
		WithDir,
		WithDirname,
		WithDisabled,
		WithDraggable,
		WithEnterkeyhint,
		WithForm,
		WithHidden,
		WithId,
		WithInputmode,
		WithItemprop,
		WithLang,
		WithMaxlength,
		WithMinlength,
		WithName,
		WithPlaceholder,
		WithReadonly,
		WithRequired,
		WithRole,
		WithRows,
		WithSlot,
		WithSpellcheck,
		WithStyle,
		WithTabindex,
		WithTitle,
		WithTranslate,
		WithWrap;

    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Textarea, $text);
    }
}
