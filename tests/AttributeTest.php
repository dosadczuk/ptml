<?php
declare(strict_types=1);

namespace PTML\Test;

use PTML\Aria;
use PTML\Attr;
use PTML\Data;

it('should create Attr attribute', function () {
    // given
    $attr = Attr::Size;
    // when
    $name = $attr->name();
    // then
    expect($name)->toEqual('size');
});

it('should create Aria attribute', function () {
    // given
    $attr = Aria::Label;
    // when
    $name = $attr->name();
    // then
    expect($name)->toEqual('aria-label');
});

it('should create Data attribute', function () {
    // given
    $attr = Data::new('test');
    // when
    $name = $attr->name();
    // then
    expect($name)->toEqual('data-test');
});
