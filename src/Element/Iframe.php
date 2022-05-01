<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element;
use PTML\Element\Concern\{
    WithAccesskey,
	WithAlign,
	WithAllow,
	WithAutocapitalize,
	WithClass,
	WithContenteditable,
	WithContextmenu,
	WithCsp,
	WithDir,
	WithDraggable,
	WithHidden,
	WithId,
	WithImportance,
	WithItemprop,
	WithLang,
	WithName,
	WithReferrerpolicy,
	WithRole,
	WithSandbox,
	WithSlot,
	WithSpellcheck,
	WithSrc,
	WithSrcdoc,
	WithStyle,
	WithTabindex,
	WithTitle,
	WithTranslate,
	WithWidth
};
use PTML\Tag;

/**
 * The <iframe> HTML element represents a nested browsing context,
 * embedding another HTML page into the current one.
 */
class Iframe extends Element
{
    use WithAccesskey,
		WithAlign,
		WithAllow,
		WithAutocapitalize,
		WithClass,
		WithContenteditable,
		WithContextmenu,
		WithCsp,
		WithDir,
		WithDraggable,
		WithHidden,
		WithId,
		WithImportance,
		WithItemprop,
		WithLang,
		WithName,
		WithReferrerpolicy,
		WithRole,
		WithSandbox,
		WithSlot,
		WithSpellcheck,
		WithSrc,
		WithSrcdoc,
		WithStyle,
		WithTabindex,
		WithTitle,
		WithTranslate,
		WithWidth;

    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Iframe, $text);
    }
}
