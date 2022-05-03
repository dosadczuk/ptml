<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element\Concern\{
    WithAccesskey,
	WithAutocapitalize,
	WithClazz,
	WithContenteditable,
	WithContextmenu,
	WithDir,
	WithDraggable,
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
	WithTranslate,
	WithValue
};
use PTML\ElementWithChildren;
use PTML\Tag;

/**
 * The <li> HTML element is used to represent an item in a list. It must be
 * contained in a parent element: an ordered list (ol), an unordered list
 * (ul), or a menu (menu). In menus and unordered lists, list items are
 * usually displayed using bullet points. In ordered lists, they are
 * usually displayed with an ascending counter on the left, such as a
 * number or letter.
 */
class Li extends ElementWithChildren
{
    use WithAccesskey,
		WithAutocapitalize,
		WithClazz,
		WithContenteditable,
		WithContextmenu,
		WithDir,
		WithDraggable,
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
		WithTranslate,
		WithValue;

    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Li, $text);
    }
}
