<?php
declare(strict_types=1);

namespace PTML\Test;

use PTML\Tag;

it('should check self-closing tag', function () {
    // given
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
    /** @var Tag[] $sample_not_closing_tags */
    $sample_not_closing_tags = [
        Tag::Table,
        Tag::Thead,
        Tag::Tbody,
        Tag::Tfoot,
    ];
    // then
    foreach ($self_closing_tags as $tag) {
        expect($tag->isSelfClosing())->toBeTruthy();
    }
    foreach ($sample_not_closing_tags as $tag) {
        expect($tag->isSelfClosing())->toBeFalsy();
    }
});
