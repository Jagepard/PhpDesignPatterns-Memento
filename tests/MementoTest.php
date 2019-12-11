<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Memento\Tests;

use Behavioral\Memento\Memento;
use Behavioral\Memento\Caretaker;
use Behavioral\Memento\Originator;
use Behavioral\Memento\CaretakerInterface;
use Behavioral\Memento\OriginatorInterface;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class MementoTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var CaretakerInterface
     */
    private $caretaker;
    /**
     * @var OriginatorInterface
     */
    private $originator;

    protected function setUp(): void
    {
        $this->originator = new Originator();
        $this->caretaker = new Caretaker();

        $this->originator->setState('on');
        $this->caretaker->setMemento(new Memento($this->originator));
        $this->originator->setState('off');
    }

    public function testInstance(): void
    {
        $this->assertInstanceOf(Originator::class, $this->originator);
        $this->assertInstanceOf(Caretaker::class, $this->caretaker);
    }

    public function testState(): void
    {
        $this->assertEquals($this->originator->getState(), 'off');
    }

    public function testRestoringState(): void
    {
        $this->originator->setState($this->caretaker->getMemento()->getState());
        $this->assertEquals($this->originator->getState(), 'on');
    }
}
