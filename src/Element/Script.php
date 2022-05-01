<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element;
use PTML\Element\Concern\{
    WithAccesskey,
	WithAsync,
	WithAutocapitalize,
	WithCharset,
	WithClazz,
	WithContenteditable,
	WithContextmenu,
	WithCrossorigin,
	WithDefer,
	WithDir,
	WithDraggable,
	WithHidden,
	WithId,
	WithImportance,
	WithIntegrity,
	WithItemprop,
	WithLang,
	WithReferrerpolicy,
	WithRole,
	WithSlot,
	WithSpellcheck,
	WithSrc,
	WithStyle,
	WithTabindex,
	WithTitle,
	WithTranslate,
	WithType
};
use PTML\Tag;

/**
 * The <script> HTML element is used to embed executable code or data; this
 * is typically used to embed or refer to JavaScript code. The <script>
 * element can also be used with other languages, such as WebGL's GLSL
 * shader programming language and JSON.
 */
class Script extends Element
{
    use WithAccesskey,
		WithAsync,
		WithAutocapitalize,
		WithCharset,
		WithClazz,
		WithContenteditable,
		WithContextmenu,
		WithCrossorigin,
		WithDefer,
		WithDir,
		WithDraggable,
		WithHidden,
		WithId,
		WithImportance,
		WithIntegrity,
		WithItemprop,
		WithLang,
		WithReferrerpolicy,
		WithRole,
		WithSlot,
		WithSpellcheck,
		WithSrc,
		WithStyle,
		WithTabindex,
		WithTitle,
		WithTranslate,
		WithType;

    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Script, $text);
    }
}
