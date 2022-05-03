<?php
declare(strict_types=1);

namespace PTML\Test;

use PTML\Attr;
use PTML\Element;
use PTML\Tag;
use function PHPUnit\Framework\assertCount;
use function PHPUnit\Framework\assertTrue;

it('should create', function () {
    // given
    $element = new Element(Tag::I);
    // then
    expect($element->uid())->not->toBeNull();
    expect($element->tag())->toEqual('i');
    expect($element->typeOf('i'))->toBeTruthy();
    expect($element->attrs())->toBeEmpty();
});

it('should create with tag (string)', function () {
    // given
    $element = new Element('i');
    // then
    expect($element->tag())->toEqual('i');
    expect($element->typeOf('i'))->toBeTruthy();
});

it('should set attribute', function () {
    // given
    $element = new Element(Tag::I);
    // when
    $element->with(Attr::Id, 'sample');
    // then
    expect($element->has(Attr::Id))->toBeTruthy();
    expect($element->attrs())->toHaveCount(1);
});

it('should get attribute', function () {
    // given
    $element = new Element(Tag::I);
    $element->with(Attr::Id, 'sample');
    // when
    $attr = $element->attr(Attr::Id);
    // then
    expect($attr)->toEqual('sample');
});

it('should remove attribute', function () {
    // given
    $element = new Element(Tag::I);
    $element->with(Attr::Id, 'sample');

    assertTrue($element->has(Attr::Id));
    assertCount(1, $element->attrs());
    // when
    $element->without(Attr::Id);
    // then
    expect($element->has(Attr::Id))->toBeFalsy();
    expect($element->attrs())->toHaveCount(0);
});

it('should compare two elements', function () {
    // given
    $element1 = new Element(Tag::A);
    $element2 = new Element(Tag::A);
    // then
    expect($element1->equalsTo($element1))->toBeTruthy();
    expect($element1->equalsTo($element2))->toBeFalsy();
    expect($element1->differsFrom($element1))->toBeFalsy();
    expect($element1->differsFrom($element2))->toBeTruthy();
});

it('should create html', function () {
    // given
    $element = new Element(Tag::I);
    // when
    $html = $element->html();
    // then
    expect($html)->toEqual('<i />');
});

it('should create html (with attributes)', function () {
    // given
    $element = new Element(Tag::I);
    $element->with(Attr::Clazz, 'fa fa-user');
    // when
    $html = $element->html();
    // then
    expect($html)->toEqual('<i class="fa fa-user" />');
});
