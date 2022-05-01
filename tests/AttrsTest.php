<?php
declare(strict_types=1);

namespace PTML\Test;

use PTML\Aria;
use PTML\Attr;
use PTML\Attrs;
use function PHPUnit\Framework\assertTrue;

it('should create empty attributes', function () {
    // given
    $attrs = new Attrs();
    // when
    $is_empty = $attrs->empty();
    // then
    expect($is_empty)->toBeTruthy();
});

it('should return attribute values', function () {
    // given
    $attrs = new Attrs();
    $attrs['test'] = 'test';
    // when
    $values = $attrs->values();
    // then
    expect($attrs->empty())->toBeFalsy();
    expect($values)->toEqual(['test' => 'test']);
});

it('should set string attribute', function () {
    // given
    $attrs = new Attrs();
    $attrs->set('test', 'test');
    // when
    $exists = $attrs->has('test');
    // then
    expect($exists)->toBeTruthy();
    expect($attrs)->toHaveCount(1);
    expect($attrs)->toHaveKey('test');
});

it('should set AttrInterface attribute', function () {
    // given
    $attrs = new Attrs();
    $attrs->set(Attr::Hidden, 'true');
    // when
    $exists = $attrs->has(Attr::Hidden);
    // then
    expect($exists)->toBeTruthy();
    expect($attrs)->toHaveCount(1);
    expect($attrs)->toHaveKey(Attr::Hidden->name());
});

it('should append attribute', function () {
    // given
    $attrs = new Attrs();
    $attrs->set(Attr::Clazz, 'fa');
    // when
    $attrs->set(Attr::Clazz, 'fa-user', append: true);
    // then
    expect($attrs->get(Attr::Clazz))->toEqual('fa fa-user');
});

it('should get string attribute', function () {
    // given
    $attrs = new Attrs();
    $attrs->set('test', 'test');
    // when
    $attr = $attrs->get('test');
    // then
    expect($attr)->toEqual('test');
});

it('should get AttrInterface attribute', function () {
    // given
    $attrs = new Attrs();
    $attrs->set(Attr::Hidden, 'true');
    // when
    $attr = $attrs->get(Attr::Hidden);
    // then
    expect($attr)->toEqual('true');
});

it('should remove string attribute', function () {
    // given
    $attrs = new Attrs();
    $attrs->set('test', 'test');

    assertTrue($attrs->has('test'));
    // when
    $attrs->del('test');
    // then
    expect($attrs)->toBeEmpty();
    expect($attrs->has('test'))->toBeFalsy();
});

it('should remove AttrInterface attribute', function () {
    // given
    $attrs = new Attrs();
    $attrs->set(Attr::Hidden, 'true');

    assertTrue($attrs->has(Attr::Hidden));
    // when
    $attrs->del(Attr::Hidden);
    // then
    expect($attrs)->toBeEmpty();
    expect($attrs->has(Attr::Hidden))->toBeFalsy();
});

it('should return HTML', function () {
    // given
    $attrs = new Attrs();
    $attrs->set(Attr::Href, 'localhost');
    $attrs->set(Aria::Hidden, 'true');
    // when
    $html = $attrs->html();
    // then
    expect($html)->toEqual('href="localhost" aria-hidden="true"');
});
