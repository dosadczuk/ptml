<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element;
use PTML\Element\Concern\{
    WithAccept,
	WithAcceptCharset,
	WithAccesskey,
	WithAction,
	WithAutocapitalize,
	WithAutocomplete,
	WithClazz,
	WithContenteditable,
	WithContextmenu,
	WithDir,
	WithDraggable,
	WithEnctype,
	WithHidden,
	WithId,
	WithItemprop,
	WithLang,
	WithMethod,
	WithName,
	WithNovalidate,
	WithRole,
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
 * The <form> HTML element represents a document section containing
 * interactive controls for submitting information.
 */
class Form extends Element
{
    use WithAccept,
		WithAcceptCharset,
		WithAccesskey,
		WithAction,
		WithAutocapitalize,
		WithAutocomplete,
		WithClazz,
		WithContenteditable,
		WithContextmenu,
		WithDir,
		WithDraggable,
		WithEnctype,
		WithHidden,
		WithId,
		WithItemprop,
		WithLang,
		WithMethod,
		WithName,
		WithNovalidate,
		WithRole,
		WithSlot,
		WithSpellcheck,
		WithStyle,
		WithTabindex,
		WithTarget,
		WithTitle,
		WithTranslate;

    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Form, $text);
    }
}
