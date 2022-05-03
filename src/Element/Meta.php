<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element;
use PTML\Element\Concern\{
    WithAccesskey,
	WithAutocapitalize,
	WithCharset,
	WithClazz,
	WithContent,
	WithContenteditable,
	WithContextmenu,
	WithDir,
	WithDraggable,
	WithHidden,
	WithHttpEquiv,
	WithId,
	WithItemprop,
	WithLang,
	WithName,
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
 * The <meta> HTML element represents Metadata that cannot be represented
 * by other HTML meta-related elements, like base, link, script, style or
 * title.
 */
class Meta extends Element
{
    use WithAccesskey,
		WithAutocapitalize,
		WithCharset,
		WithClazz,
		WithContent,
		WithContenteditable,
		WithContextmenu,
		WithDir,
		WithDraggable,
		WithHidden,
		WithHttpEquiv,
		WithId,
		WithItemprop,
		WithLang,
		WithName,
		WithRole,
		WithSlot,
		WithSpellcheck,
		WithStyle,
		WithTabindex,
		WithTitle,
		WithTranslate;

    public function __construct()
    {
        parent::__construct(Tag::Meta);
    }
}
