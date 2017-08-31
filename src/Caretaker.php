<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Memento;

/**
 * Class Caretaker
 * @package Behavioral\Memento
 */
class Caretaker
{

    /**
     * @var
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
