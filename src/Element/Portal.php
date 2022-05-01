<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element;
use PTML\Element\Concern\{
    WithAccesskey,
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
 * The <portal> HTML element enables the embedding of another HTML page
 * into the current one for the purposes of allowing smoother navigation
 * into new pages.
 */
class Portal extends Element
{
    use WithAccesskey,
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
        parent::__construct(Tag::Portal, $text);
    }
}
