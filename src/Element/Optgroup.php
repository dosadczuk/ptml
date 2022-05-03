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
 * The <optgroup> HTML element creates a grouping of options within a
 * select element.
 */
class Optgroup extends ElementWithChildren
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
		WithSlot,
		WithSpellcheck,
		WithStyle,
		WithTabindex,
		WithTitle,
		WithTranslate;

    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Optgroup, $text);
    }
}
