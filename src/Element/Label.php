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
	WithFor,
	WithForm,
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
	WithTranslate
};
use PTML\ElementWithChildren;
use PTML\Tag;

/**
 * The <label> HTML element represents a caption for an item in a user
 * interface.
 */
class Label extends ElementWithChildren
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
		WithRole,
		WithSlot,
		WithSpellcheck,
		WithStyle,
		WithTabindex,
		WithTitle,
		WithTranslate;

    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Label, $text);
    }
}
