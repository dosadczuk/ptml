<?php
declare(strict_types=1);

namespace PTML\Test;

use PTML\Attr;
use PTML\Element;
use PTML\ElementSearch;
use PTML\ElementWithChildren;
use PTML\Tag;

beforeEach(function () {
    $this->child1 = new Element(Tag::I);
    $this->child2 = new Element(Tag::I);
    $this->child3 = new Element(Tag::I);
    $this->child3->with(Attr::Id, 'test');
    $this->child4 = new Element(Tag::I);

    $this->element = new ElementWithChildren(Tag::A);
    $this->element->append(
        $this->child1,
        $this->child2,
        $this->child3,
        $this->child4
    );
});

it('should find element by uid', function () {
    // given
    $search = new ElementSearch($this->element);
    // when
    $child2 = $search->findByUid($this->child2->uid());
    // then
    expect($child2)->not->toBeNull();
    expect($child2)->toBe($this->child2);
});

it('should find element by tag', function () {
    // given
    $search = new ElementSearch($this->element);
    // when
    $child1 = $search->findByTag(Tag::I);
    // then
    expect($child1)->not->toBeNull();
    expect($child1)->toBe($this->child1);
});

it('should find element by attr', function () {
    // given
    $search = new ElementSearch($this->element);
    // when
    $child3 = $search->findByAttr(Attr::Id);
    // then
    expect($child3)->not->toBeNull();
    expect($child3)->toBe($this->child3);
});
