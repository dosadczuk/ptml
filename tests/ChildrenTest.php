<?php
declare(strict_types=1);

namespace PTML\Test;

use PTML\Aria;
use PTML\Attr;
use PTML\Children;
use PTML\Element;
use PTML\Tag;
use function PHPUnit\Framework\assertTrue;

it('should create empty children', function () {
    // given
    $children = new Children();
    // when
    $is_empty = $children->empty();
    // then
    expect($is_empty)->toBeTruthy();
});

it('should return children', function () {
    // given
    $child = new Element(Tag::I);

    $children = new Children();
    $children[$child->uid()] = $child;
    // when
    $values = $children->values();
    // then
    expect($values)->toEqual([$child]);
});

it('should add children', function () {
    // given
    $child1 = new Element(Tag::A);
    $child2 = new Element(Tag::I);

    $children = new Children();
    $children->add($child1, $child2);
    // when
    $child1_exists = $children->has($child1);
    $child2_exists = $children->has($child2);
    // then
    expect($child1_exists)->toBeTruthy();
    expect($child2_exists)->toBeTruthy();
    expect($children)->toHaveCount(2);
    expect($children)->toHaveKey($child1->uid());
    expect($children)->toHaveKey($child2->uid());
});

it('should delete children', function () {
    // given
    $child1 = new Element(Tag::A);
    $child2 = new Element(Tag::I);

    $children = new Children();
    $children->add($child1, $child2);

    assertTrue($children->has($child1));
    assertTrue($children->has($child2));
    // when
    $children->del($child1, $child2);
    // then
    expect($children)->toBeEmpty();
    expect($children->has($child1))->toBeFalsy();
    expect($children->has($child2))->toBeFalsy();
});

it('should return HTML', function () {
    // given
    $child1 = new Element(Tag::A);
    $child1->with(Attr::Href, 'http://localhost');

    $child2 = new Element(Tag::I);
    $child2->with(Aria::Hidden, 'true');

    $children = new Children();
    $children->add($child1, $child2);
    // when
    $html = $children->html();
    // then
    expect($html)->toEqual('<a href="http://localhost"></a><i aria-hidden="true"></i>');
});
