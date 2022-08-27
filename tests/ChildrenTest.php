<?php
declare(strict_types=1);

namespace PTML\Test;

use PTML\Children;
use PTML\Element;
use PTML\Tag;
use function PHPUnit\Framework\assertCount;

it('should create empty', function () {
    // given
    $children = new Children();
    // then
    expect($children)->toBeEmpty();
});

it('should create with values', function () {
    // given
    $children = new Children([
        '1' => new Element(Tag::I),
        '2' => new Element(Tag::I),
    ]);
    // then
    expect($children)->toHaveCount(2);
});

it('should check if empty', function () {
    // given
    $children = new Children();
    // when
    $is_empty = $children->empty();
    // then
    expect($is_empty)->toBeTruthy();
});

it('should return values', function () {
    // given
    $element1 = new Element(Tag::I);
    $element2 = new Element(Tag::I);
    $children = new Children([
        $element1->uid() => $element1,
        $element2->uid() => $element2,
    ]);
    // then
    expect($children->values())->toEqual([$element1, $element2]);
});

it('should add value', function () {
    // given
    $element1 = new Element(Tag::I);
    $element2 = new Element(Tag::I);
    $children = new Children();
    // when
    $children->add([$element1, $element2]);
    // then
    expect($children)->toHaveCount(2)
        ->and($children->has($element1))->toBeTruthy()
        ->and($children->has($element2))->toBeTruthy();
});

it('should remove value', function () {
    // given
    $element1 = new Element(Tag::I);
    $element2 = new Element(Tag::I);
    $children = new Children();
    $children->add([$element1, $element2]);

    assertCount(2, $children);
    // when
    $children->rem([$element1]);
    // then
    expect($children)->toHaveCount(1)
        ->and($children->has($element1))->toBeFalsy()
        ->and($children->has($element2))->toBeTruthy();
});

it('should create html for values', function () {
    // given
    $children = new Children();
    $children->add([
        new Element(Tag::Img),
        new Element(Tag::Img),
    ]);
    // when
    $html = $children->html();
    // then
    expect($html)->toEqual(/** @lang text */ '<img /><img />');
});
