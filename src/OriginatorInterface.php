<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

/**
 * Interface OriginatorInterface
 * @package Behavioral\Memento
 */
interface OriginatorInterface
{
    /**
     * @param TypeInterface $state
     */
    public function setState(TypeInterface $state): void;

    /**
     * @return TypeInterface
     */
    public function getState(): TypeInterface;

    public function printState(): void;
}
