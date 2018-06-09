<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

/**
 * Class Memento
 * @package Behavioral\Memento
 */
class Memento
{

    /**
     * @var string
     */
    protected $state;

    /**
     * Memento constructor.
     * @param Originator $originator
     */
    public function __construct(Originator $originator)
    {
        $this->state = $originator->getState();
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        print "Restoring state...\n";

        return $this->state;
    }
}
