<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <article> HTML element represents a self-contained composition in a
 * document, page, application, or site, which is intended to be
 * independently distributable or reusable (e.g., in syndication). Examples
 * include: a forum post, a magazine or newspaper article, or a blog entry,
 * a product card, a user-submitted comment, an interactive widget or
 * gadget, or any other independent item of content.
 */
class Article extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Article, $text);
    }
}
