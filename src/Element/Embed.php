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
    WithSrc,
    WithStyle,
    WithTabindex,
    WithTitle,
    WithTranslate,
    WithType,
    WithWidth
};
use PTML\Tag;

/**
 * The <embed> HTML element embeds external content at the specified point
 * in the document. This content is provided by an external application or
 * other source of interactive content such as a browser plug-in.
 */
class Embed extends Element
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
        WithSrc,
        WithStyle,
        WithTabindex,
        WithTitle,
        WithTranslate,
        WithType,
        WithWidth;

    public function __construct()
    {
        parent::__construct(Tag::Embed);
    }
}
