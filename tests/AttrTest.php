<?php
declare(strict_types=1);

namespace PTML\Test;

use PTML\Aria;
use PTML\Attr;
use PTML\Data;

it('should get name of standard attribute', function () {
    expect(Attr::Hidden->getName())->toEqual('hidden');
});

it('should get name of aria attribute', function () {
    expect(Aria::Hidden->getName())->toEqual('aria-hidden');
});

it('should get name of data attribute', function () {
    expect((new Data('test'))->getName())->toEqual('data-test');
});
