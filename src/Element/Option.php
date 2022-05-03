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
	WithDisabled,
	WithDraggable,
	WithHidden,
	WithId,
	WithItemprop,
	WithLabel,
	WithLang,
	WithRole,
	WithSelected,
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
 * The <option> HTML element is used to define an item contained in a
 * select, an optgroup, or a datalist element. As such, <option> can
 * represent menu items in popups and other lists of items in an HTML
 * document.
 */
class Option extends ElementWithChildren
{
    use WithAccesskey,
		WithAutocapitalize,
		WithClass,
		WithContenteditable,
		WithContextmenu,
		WithDir,
		WithDisabled,
		WithDraggable,
		WithHidden,
		WithId,
		WithItemprop,
		WithLabel,
		WithLang,
		WithRole,
		WithSelected,
		WithSlot,
		WithSpellcheck,
		WithStyle,
		WithTabindex,
		WithTitle,
		WithTranslate,
		WithValue;

    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Option, $text);
    }
}
