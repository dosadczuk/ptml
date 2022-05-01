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
	WithDisabled,
	WithDraggable,
	WithForm,
	WithHidden,
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
 * The <fieldset> HTML element is used to group several controls as well as
 * labels (label) within a web form.
 */
class Fieldset extends Element
{
    use WithAccesskey,
		WithAutocapitalize,
		WithClass,
		WithContenteditable,
		WithContextmenu,
		WithDir,
		WithDisabled,
		WithDraggable,
		WithForm,
		WithHidden,
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

    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Fieldset, $text);
    }
}
