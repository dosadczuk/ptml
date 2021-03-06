<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element\Concern\{
    WithAccesskey,
    WithAutocapitalize,
    WithClass,
    WithContenteditable,
    WithContextmenu,
    WithData,
    WithDir,
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
    WithTranslate,
    WithType,
    WithUsemap,
    WithWidth
};
use PTML\ElementWithChildren;
use PTML\Tag;

/**
 * The <object> HTML element represents an external resource, which can be
 * treated as an image, a nested browsing context, or a resource to be
 * handled by a plugin.
 */
class Obj extends ElementWithChildren
{
    use WithAccesskey,
        WithAutocapitalize,
        WithClass,
        WithContenteditable,
        WithContextmenu,
        WithData,
        WithDir,
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
        WithTranslate,
        WithType,
        WithUsemap,
        WithWidth;

    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Obj, $text);
    }
}
