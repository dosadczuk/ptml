<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element\Concern\{
    WithAccesskey,
	WithAlign,
	WithAutocapitalize,
	WithClazz,
	WithColspan,
	WithContenteditable,
	WithContextmenu,
	WithDir,
	WithDraggable,
	WithHeaders,
	WithHidden,
	WithId,
	WithItemprop,
	WithLang,
	WithRole,
	WithRowspan,
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
 * The <td> HTML element defines a cell of a table that contains data. It
 * participates in the table model.
 */
class Td extends ElementWithChildren
{
    use WithAccesskey,
		WithAlign,
		WithAutocapitalize,
		WithClazz,
		WithColspan,
		WithContenteditable,
		WithContextmenu,
		WithDir,
		WithDraggable,
		WithHeaders,
		WithHidden,
		WithId,
		WithItemprop,
		WithLang,
		WithRole,
		WithRowspan,
		WithSlot,
		WithSpellcheck,
		WithStyle,
		WithTabindex,
		WithTitle,
		WithTranslate;

    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Td, $text);
    }
}
