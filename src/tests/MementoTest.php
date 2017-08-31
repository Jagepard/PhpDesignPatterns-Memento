<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class MementoTest extends PHPUnit_Framework_TestCase
{

    protected $originator;

    protected $caretaker;

    protected function setUp(): void
    {
        $this->originator = new \Behavioral\Memento\Originator();
        $this->caretaker  = new \Behavioral\Memento\Caretaker();

        $this->getOriginator()->setState("On");
        $this->getCaretaker()->setMemento($this->getOriginator()->saveState());
    }

    public function testInstance(): void
    {
        $this->assertInstanceOf(\Behavioral\Memento\Originator::class, $this->getOriginator());
        $this->assertInstanceOf(\Behavioral\Memento\Caretaker::class, $this->getCaretaker());
    }

    public function testState(): void
    {
        ob_start();
        $this->getOriginator()->printState();
        $state = ob_get_clean();

        $this->assertEquals($state, "State setted On\n");
    }

    public function testRestoringState(): void
    {
        $this->getOriginator()->getRestoringState($this->getCaretaker()->getMemento());

        ob_start();
        $this->getOriginator()->printState();
        $state = ob_get_clean();

        $this->assertEquals($state, "State setted On\n");
    }

    /**
     * @return mixed
     */
    public function getOriginator(): \Behavioral\Memento\Originator
    {
        return $this->originator;
    }

    /**
     * @return mixed
     */
    public function getCaretaker(): \Behavioral\Memento\Caretaker
    {
        return $this->caretaker;
    }
}
