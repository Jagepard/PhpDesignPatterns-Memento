<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

/**
 * Class Originator
 * @package Behavioral\Memento
 */
class Originator
{

    /**
     * @var string
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
        printf("State set %s\n", $this->getState());
    }
}
