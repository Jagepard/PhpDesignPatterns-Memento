<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

class Memento implements MementoInterface
{
    /**
     * @var TypeInterface
     */
    private $state;

    /**
     * Memento constructor.
     * @param OriginatorInterface $originator
     */
    public function __construct(OriginatorInterface $originator)
    {
        $this->state = $originator->getState();
    }

    /**
     * @return TypeInterface
     */
    public function getState(): TypeInterface
    {
        print "Restoring state...\n";

        return $this->state;
    }
}
