<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

class Memento implements MementoInterface
{
    private OriginatorInterface $memento;

    public function __construct(OriginatorInterface $originator)
    {
        $this->memento = $originator;
    }

    public function getMemento(): OriginatorInterface
    {
        return $this->memento;
    }
}
