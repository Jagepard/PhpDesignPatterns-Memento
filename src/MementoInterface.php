<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

interface MementoInterface
{
    public function __construct(OriginatorInterface $originator);

    public function getMemento(): OriginatorInterface;
}
