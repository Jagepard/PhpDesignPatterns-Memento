<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

class Memento implements MementoInterface
{
    private array $memento;

    /**
     * Receives data about the current state of an object
     * --------------------------------------------------
     * Принимает данные о текущем состоянии объекта
     *
     * @param  array $memento
     */
    public function __construct(array $memento)
    {
        $this->memento = $memento;
    }

    /**
     * Gets the persisted data about the state of an object
     * ----------------------------------------------------
     * Получает сохраненные данные о состоянии объекта
     *
     * @return array
     */
    public function getMemento(): array
    {
        return $this->memento;
    }
}
