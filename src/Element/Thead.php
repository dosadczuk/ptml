<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element;
use PTML\Element\Concern\{
    WithAccesskey,
	WithAlign,
	WithAutocapitalize,
	WithClass,
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
	WithTranslate
};
use PTML\Tag;

/**
 * The <thead> HTML element defines a set of rows defining the head of the
 * columns of the table.
 */
class Thead extends Element
{
    use WithAccesskey,
		WithAlign,
		WithAutocapitalize,
		WithClass,
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
		WithTranslate;

    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Thead, $text);
    }
}
