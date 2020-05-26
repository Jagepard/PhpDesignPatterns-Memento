<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Memento\Tests;

use Behavioral\Memento\{Memento, Caretaker, Originator, CaretakerInterface, OriginatorInterface};
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class MementoTest extends PHPUnit_Framework_TestCase
{
    private CaretakerInterface $caretaker;

    private OriginatorInterface $originator;

    protected function setUp(): void
    {
        $this->originator = new Originator();
        $this->caretaker  = new Caretaker();

        $this->originator->setState('on');
        $this->caretaker->save(new Memento($this->originator));
        $this->originator->setState('off');
    }

    public function testInstance(): void
    {
        $this->assertInstanceOf(Originator::class, $this->originator);
        $this->assertInstanceOf(Caretaker::class, $this->caretaker);
    }

    public function testState(): void
    {
        $this->assertEquals('off', $this->originator->getState());
    }

    public function testRestoringState(): void
    {
        $this->originator->setState($this->caretaker->undo()->getMemento()->getState());
        $this->assertEquals('on', $this->originator->getState());
    }
}
