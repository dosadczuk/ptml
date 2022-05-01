<?php
declare(strict_types=1);

namespace PTML\Test;

use PTML\Aria;
use PTML\Attr;
use PTML\Data;
use PTML\Element;
use PTML\Tag;
use function PHPUnit\Framework\assertContains;
use function PHPUnit\Framework\assertNotEmpty;

it('should create element', function () {
    // given
    $element = new Element(Tag::A);
    // then
    expect($element->uid())->not->toBeNull();
    expect($element->tag())->toEqual(Tag::A->value);
    expect($element->text())->toEqual('');
    expect($element->attrs())->toBeEmpty();
});

it('should create element with text', function () {
    // given
    $element = new Element(Tag::A, 'Sample text');
    // then
    expect($element->uid())->not->toBeNull();
    expect($element->tag())->toEqual(Tag::A->value);
    expect($element->text())->toEqual('Sample text');
    expect($element->attrs())->toBeEmpty();
});

it('should add standard attribute', function () {
    // given
    $a = new Element(Tag::A);
    $a->with(Attr::Href, 'localhost');
    // then
    expect($a->attrs())->toHaveCount(1);
    expect($a->attr(Attr::Href))->toEqual('localhost');
    expect($a->attr('href'))->toEqual('localhost');
    expect($a->exists(Attr::Href))->toBeTruthy();
    expect($a->exists('href'))->toBeTruthy();
});

it('should add aria attribute', function () {
    // given
    $a = new Element(Tag::I);
    $a->with(Aria::Hidden, 'true');
    // then
    expect($a->attrs())->toHaveCount(1);
    expect($a->attr(Aria::Hidden))->toEqual('true');
    expect($a->attr('aria-hidden'))->toEqual('true');
    expect($a->exists(Aria::Hidden))->toBeTruthy();
    expect($a->exists('aria-hidden'))->toBeTruthy();
});

it('should add data attribute', function () {
    // given
    $a = new Element(Tag::A);
    $a->with(Data::new('test'), 'sample value');
    // then
    expect($a->attrs())->toHaveCount(1);
    expect($a->attr(Data::new('test')))->toEqual('sample value');
    expect($a->attr('data-test'))->toEqual('sample value');
    expect($a->exists(Data::new('test')))->toBeTruthy();
    expect($a->exists('data-test'))->toBeTruthy();
});

it('should remove standard attribute', function () {
    // given
    $a = new Element(Tag::A);
    $a->with(Attr::Href, 'localhost');

    assertNotEmpty($a->attr(Attr::Href));
    // when
    $a->without(Attr::Href);
    // then
    expect($a->attrs())->toBeEmpty();
    expect($a->attr(Attr::Href))->toBeNull();
});

it('should remove aria attribute', function () {
    // given
    $a = new Element(Tag::I);
    $a->with(Aria::Hidden, 'true');

    assertNotEmpty($a->attr(Aria::Hidden));
    // when
    $a->without(Aria::Hidden);
    // then
    expect($a->attrs())->toBeEmpty();
    expect($a->attr(Aria::Hidden))->toBeNull();
});

it('should remove data attribute', function () {
    // given
    $a = new Element(Tag::A);
    $a->with(Data::new('test'), 'sample value');

    assertNotEmpty($a->attr(Data::new('test')));
    // when
    $a->without(Data::new('test'));
    // then
    expect($a->attrs())->toBeEmpty();
    expect($a->attr(Data::new('test')))->toBeNull();
});

it('should append child', function () {
    // given
    $a = new Element(Tag::A);
    $i = new Element(Tag::I);
    // when
    $a->append($i);
    // then
    expect($a->children())->toContain($i);
    expect($a->contains($i))->toBeTruthy();
});

it('should remove child', function () {
    // given
    $a = new Element(Tag::A);
    $i = new Element(Tag::I);
    $a->append($i);

    assertContains($i, $a->children());
    // when
    $a->remove($i);
    // then
    expect($a->children())->not->toContain($i);
    expect($a->contains($i))->toBeFalsy();
});

it('should return html (single element without attrs)', function () {
    // given
    $a = new Element(Tag::A, 'Sample text');
    // when
    $html = $a->html();
    // then
    expect($html)->toEqual('<a>Sample text</a>');
});

it('should return html (single element with single attr)', function () {
    // given
    $a = new Element(Tag::A, 'Sample text');
    $a->with(Attr::Href, 'http://localhost:8080');
    // when
    $html = $a->html();
    // then
    expect($html)->toEqual('<a href="http://localhost:8080">Sample text</a>');
});

it('should return html (single element with multiple attrs)', function () {
    // given
    $a = new Element(Tag::A, 'Sample text');
    $a->with(Attr::Href, 'http://localhost:8080');
    $a->with(Aria::Hidden, 'true');
    // when
    $html = $a->html();
    // then
    expect($html)->toEqual('<a href="http://localhost:8080" aria-hidden="true">Sample text</a>');
});

it('should return html (nested elements)', function () {
    // given
    $a = new Element(Tag::A, 'Sample text');
    $i = new Element(Tag::I);
    $i->with(Attr::Clazz, 'fa-test');
    $a->append($i);
    // when
    $html = $a->html();
    // then
    expect($html)->toEqual('<a>Sample text<i class="fa-test"></i></a>');
});

it('should return html (single self-closing element without attrs)', function () {
    // given
    $br = new Element(Tag::Br);
    // when
    $html = $br->html();
    // then
    expect($html)->toEqual('<br />');
});

it('should return html (single self-closing element with single attr)', function () {
    // given
    $br = new Element(Tag::Br);
    $br->with(Data::new('test'), 'test');
    // when
    $html = $br->html();
    // then
    expect($html)->toEqual('<br data-test="test" />');
});

it('should return html (single self-closing element with multiple attrs)', function () {
    // given
    $br = new Element(Tag::Br);
    $br->with(Data::new('test'), 'test');
    $br->with(Aria::Hidden, 'false');
    // when
    $html = $br->html();
    // then
    expect($html)->toEqual('<br data-test="test" aria-hidden="false" />');
});
