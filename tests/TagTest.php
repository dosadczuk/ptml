<?php
declare(strict_types=1);

namespace PTML\Test;

use PTML\Tag;

it('should check if tag is self closing', function () {
    /** @var Tag[] $self_closing_tags */
    $self_closing_tags = [
        Tag::Area,
        Tag::Base,
        Tag::Br,
        Tag::Col,
        Tag::Embed,
        Tag::Hr,
        Tag::Img,
        Tag::Input,
        Tag::Link,
        Tag::Meta,
        Tag::Source,
        Tag::Track,
        Tag::Wbr,
    ];

    foreach ($self_closing_tags as $tag) {
        expect($tag->isSelfClosing())->toBeTruthy();
    }
});
