<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element\Concern\{
    WithAccesskey,
	WithAutocapitalize,
	WithAutocomplete,
	WithAutofocus,
	WithClass,
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
use PTML\ElementWithChildren;
use PTML\Tag;

/**
 * The <select> HTML element represents a control that provides a menu of
 * options.
 */
class Select extends ElementWithChildren
{
    use WithAccesskey,
		WithAutocapitalize,
		WithAutocomplete,
		WithAutofocus,
		WithClass,
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
