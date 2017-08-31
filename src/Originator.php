<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Memento;

/**
 * Class Originator
 * @package Behavioral\Memento
 */
class Originator
{

    /**
     * @var
     */
    protected $state;

    /**
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     *
     */
    public function printState(): void
    {
        print sprintf("State setted %s\n", $this->state);
    }

    /**
     * @return Memento
     */
    public function saveState(): Memento
    {
        return new Memento($this->state);
    }

    /**
     * @param Memento $memento
     */
    public function getRestoringState(Memento $memento)
    {
        echo sprintf("Restoring state...\n");
        $this->state = $memento->getState();
    }
}
