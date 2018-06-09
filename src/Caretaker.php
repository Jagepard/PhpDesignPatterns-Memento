<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

/**
 * Class Caretaker
 * @package Behavioral\Memento
 */
class Caretaker
{

    /**
     * @var Memento
     */
    protected $memento;

    /**
     * @return mixed
     */
    public function getMemento(): Memento
    {
        return $this->memento;
    }

    /**
     * @param \Behavioral\Memento\Memento $memento
     */
    public function setMemento(Memento $memento)
    {
        $this->memento = $memento;
    }
}
