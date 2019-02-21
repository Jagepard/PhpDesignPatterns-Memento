<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

/**
 * Interface MementoInterface
 * @package Behavioral\Memento
 */
interface MementoInterface
{
    /**
     * Memento constructor.
     * @param OriginatorInterface $originator
     */
    public function __construct(OriginatorInterface $originator);

    /**
     * @return TypeInterface
     */
    public function getState(): TypeInterface;
}
