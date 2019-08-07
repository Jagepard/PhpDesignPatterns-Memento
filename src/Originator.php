<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

class Originator implements OriginatorInterface
{
    /**
     * @var TypeInterface
     */
    private $state;

    /**
     * @param TypeInterface $state
     */
    public function setState(TypeInterface $state): void
    {
        $this->state = $state;
    }

    /**
     * @return TypeInterface
     */
    public function getState(): TypeInterface
    {
        return $this->state;
    }

    public function printState(): void
    {
        printf("State set %s\n", $this->getState()->getName());
    }
}
