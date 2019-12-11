<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

interface MementoInterface
{
    /**
     * Memento constructor.
     * @param OriginatorInterface $originator
     */
    public function __construct(OriginatorInterface $originator);

    /**
     * @return string
     */
    public function getState(): string;
}
