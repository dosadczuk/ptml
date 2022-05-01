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
	WithDownload,
	WithDraggable,
	WithHidden,
	WithHref,
	WithHreflang,
	WithId,
	WithItemprop,
	WithLang,
	WithMedia,
	WithPing,
	WithReferrerpolicy,
	WithRel,
	WithRole,
	WithShape,
	WithSlot,
	WithSpellcheck,
	WithStyle,
	WithTabindex,
	WithTarget,
	WithTitle,
	WithTranslate
};
use PTML\Tag;

/**
 * The <a> HTML element (or anchor element), with its href attribute,
 * creates a hyperlink to web pages, files, email addresses, locations in
 * the same page, or anything else a URL can address.
 */
class A extends Element
{
    use WithAccesskey,
		WithAutocapitalize,
		WithClass,
		WithContenteditable,
		WithContextmenu,
		WithDir,
		WithDownload,
		WithDraggable,
		WithHidden,
		WithHref,
		WithHreflang,
		WithId,
		WithItemprop,
		WithLang,
		WithMedia,
		WithPing,
		WithReferrerpolicy,
		WithRel,
		WithRole,
		WithShape,
		WithSlot,
		WithSpellcheck,
		WithStyle,
		WithTabindex,
		WithTarget,
		WithTitle,
		WithTranslate;

    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::A, $text);
    }
}
