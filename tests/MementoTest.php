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
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class MementoTest
 * @package Behavioral\Memento\Tests
 */
class MementoTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var Caretaker
     */
    protected $caretaker;
    /**
     * @var Originator
     */
    protected $originator;

    protected function setUp(): void
    {
        $this->originator = new Originator();
        $this->caretaker  = new Caretaker();

        $this->originator->setState("on");
        $this->caretaker->setMemento(new Memento($this->originator));
    }

    public function testInstance(): void
    {
        $this->assertInstanceOf(Originator::class, $this->originator);
        $this->assertInstanceOf(Caretaker::class, $this->caretaker);
    }

    public function testState(): void
    {
        ob_start();
        $this->originator->printState();
        $state = ob_get_clean();

        $this->assertEquals($state, sprintf("State set %s\n", 'on'));
    }

    public function testRestoringState(): void
    {
        $this->caretaker->getMemento()->getState();

        ob_start();
        $this->originator->printState();
        $state = ob_get_clean();

        $this->assertEquals($state, sprintf("State set %s\n", 'on'));
    }
}
