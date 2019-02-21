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
class Caretaker implements CaretakerInterface
{
    /**
     * @var MementoInterface
     */
    protected $memento;

    /**
     * @return MementoInterface
     */
    public function getMemento(): MementoInterface
    {
        return $this->memento;
    }

    /**
     * @param MementoInterface $memento
     */
    public function setMemento(MementoInterface $memento): void
    {
        $this->memento = $memento;
    }
}
