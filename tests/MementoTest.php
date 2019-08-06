<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Memento\Tests;

use Behavioral\Memento\Memento;
use Behavioral\Memento\Caretaker;
use Behavioral\Memento\Originator;
use Behavioral\Memento\CaretakerInterface;
use Behavioral\Memento\OriginatorInterface;
use Behavioral\Memento\StateType;
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
        $this->caretaker  = new Caretaker();

        $this->getOriginator()->setState(new StateType('on'));
        $this->caretaker->setMemento(new Memento($this->getOriginator()));
        $this->getOriginator()->setState(new StateType('off'));
    }

    public function testInstance(): void
    {
        $this->assertInstanceOf(Originator::class, $this->getOriginator());
        $this->assertInstanceOf(Caretaker::class, $this->getCaretaker());
    }

    public function testState(): void
    {
        ob_start();
        $this->getOriginator()->printState();
        $state = ob_get_clean();

        $this->assertEquals($state, sprintf("State set %s\n", 'off'));
    }

    public function testRestoringState(): void
    {
        $this->getOriginator()->setState($this->getCaretaker()->getMemento()->getState());

        ob_start();
        $this->getOriginator()->printState();
        $state = ob_get_clean();

        $this->assertEquals($state, sprintf("State set %s\n", 'on'));
    }

    /**
     * @return CaretakerInterface
     */
    public function getCaretaker(): CaretakerInterface
    {
        return $this->caretaker;
    }

    /**
     * @return OriginatorInterface
     */
    public function getOriginator(): OriginatorInterface
    {
        return $this->originator;
    }
}
