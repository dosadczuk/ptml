<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element;
use PTML\Element\Concern\{
    WithAccesskey,
	WithAutocapitalize,
	WithCite,
	WithClass,
	WithContenteditable,
	WithContextmenu,
	WithDatetime,
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
 * The <ins> HTML element represents a range of text that has been added to
 * a document. You can use the del element to similarly represent a range
 * of text that has been deleted from the document.
 */
class Ins extends Element
{
    use WithAccesskey,
		WithAutocapitalize,
		WithCite,
		WithClass,
		WithContenteditable,
		WithContextmenu,
		WithDatetime,
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
        parent::__construct(Tag::Ins, $text);
    }
}
