<?php
declare(strict_types=1);

namespace PTML\Test;

use PTML\Attr;
use PTML\Attributes;
use function PHPUnit\Framework\assertTrue;

it('should create empty', function () {
    // given
    $attrs = new Attributes();
    // then
    expect($attrs)->toBeEmpty();
});

it('should create with values', function () {
    // given
    $attrs = new Attributes([
        Attr::Data->value  => '1',
        Attr::Label->value => '2',
    ]);
    // then
    expect($attrs)->toHaveCount(2);
});

it('should check if empty', function () {
    // given
    $attrs1 = new Attributes();
    $attrs2 = new Attributes([Attr::Label->value => '1']);
    // when
    $is_empty = $attrs1->empty();
    $is_not_empty = $attrs2->empty();
    // then
    expect($is_empty)->toBeTruthy();
    expect($is_not_empty)->toBeFalsy();
});

it('should return values', function () {
    // given
    $values = [
        Attr::Label->value => '1',
        Attr::Data->value  => '2',
    ];
    $attrs = new Attributes($values);
    // then
    expect($attrs->values())->toEqual($values);
});

it('should get value by name', function () {
    // given
    $attrs = new Attributes([Attr::Data->value => '1']);
    // when
    $value = $attrs->get(Attr::Data);
    // then
    expect($value)->toEqual('1');
});

it('should set value', function () {
    // given
    $attrs = new Attributes();
    // when
    $attrs->set(Attr::Data, '1', append: false);
    // then
    expect($attrs->get(Attr::Data))->toEqual('1');
});

it('should set value (append)', function () {
    // given
    $attrs = new Attributes();
    $attrs->set(Attr::Clazz, 'fa', append: false);
    // when
    $attrs->set(Attr::Clazz, 'fa-user', append: true);
    // then
    expect($attrs->get(Attr::Clazz))->toEqual('fa fa-user');
});

it('should remove value', function () {
    // given
    $attrs = new Attributes();
    $attrs->set(Attr::Clazz, 'fa', append: false);

    assertTrue($attrs->has(Attr::Clazz));
    // when
    $attrs->rem(Attr::Clazz);
    // then
    expect($attrs->has(Attr::Clazz))->toBeFalsy();
});

it('should create html for values', function () {
    // given
    $attrs = new Attributes();
    $attrs->set(Attr::Id, 'a', append: false);
    $attrs->set(Attr::Clazz, 'b', append: false);
    // when
    $html = $attrs->html();
    // then
    expect($html)->toEqual('id="a" class="b"');
});
