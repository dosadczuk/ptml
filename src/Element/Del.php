<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\Element;
use PTML\Element\Concern\{WithAccesskey,
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
    WithTranslate};
use PTML\Tag;

/**
 * The <del> HTML element represents a range of text that has been deleted
 * from a document. This can be used when rendering "track changes" or
 * source code diff information, for example. The ins element can be used
 * for the opposite purpose: to indicate text that has been added to the
 * document.
 */
class Del extends Element
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
        parent::__construct(Tag::Del, $text);
    }
}
