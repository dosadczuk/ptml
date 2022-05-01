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
	WithContenteditable,
	WithContextmenu,
	WithDir,
	WithDisabled,
	WithDraggable,
	WithForm,
	WithHidden,
	WithId,
	WithItemprop,
	WithLang,
	WithMultiple,
	WithName,
	WithRequired,
	WithRole,
	WithSize,
	WithSlot,
	WithSpellcheck,
	WithStyle,
	WithTabindex,
	WithTitle,
	WithTranslate
};
use PTML\Tag;

/**
 * The <select> HTML element represents a control that provides a menu of
 * options.
 */
class Select extends Element
{
    use WithAccesskey,
		WithAutocapitalize,
		WithAutocomplete,
		WithAutofocus,
		WithClazz,
		WithContenteditable,
		WithContextmenu,
		WithDir,
		WithDisabled,
		WithDraggable,
		WithForm,
		WithHidden,
		WithId,
		WithItemprop,
		WithLang,
		WithMultiple,
		WithName,
		WithRequired,
		WithRole,
		WithSize,
		WithSlot,
		WithSpellcheck,
		WithStyle,
		WithTabindex,
		WithTitle,
		WithTranslate;

    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Select, $text);
    }
}
