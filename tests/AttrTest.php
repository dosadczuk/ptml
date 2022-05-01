<?php
declare(strict_types=1);

namespace PTML\Test;

use PTML\Aria;
use PTML\Attr;
use PTML\Data;

it('should get name of standard attribute', function () {
    // given
    $attr = Attr::Hidden;
    // when
    $name = $attr->name();
    // then
    expect($name)->toEqual('hidden');
});

it('should get name of aria attribute', function () {
    // given
    $attr = Aria::Hidden;
    // when
    $name = $attr->name();
    // then
    expect($name)->toEqual('aria-hidden');
});

it('should get name of data attribute', function () {
    // given
    $attr = Data::new('hidden');
    // when
    $name = $attr->name();
    // then
    expect($name)->toEqual('data-hidden');
});
