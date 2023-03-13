<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

class Originator implements OriginatorInterface
{
    private string $state;
    private string $date;

    /**
     * Sets the current state of the object and fixes the installation time
     * --------------------------------------------------------------------
     * Устанавливает текущее состояние объекта и фиксирует время установки
     *
     * @param  string      $state
     * @param  string|null $date
     * @return void
     */
    public function setState(string $state, string $date = null): void
    {
        $this->state = $state;
        $this->date  = $date ?? date("d-m-Y H:i:s");
    }

    /**
     * Gets the current state
     * -----------------------------------
     * Получает данные о текущем состоянии
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * Gets the commit time of the current state
     * ------------------------------------------
     * Получает время фиксации текущего состояния
     *
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Displays information about the current state
     * --------------------------------------------
     * Выводит информацию о текущем состоянии
     *
     * @param  string $addlInfo
     * @return void
     */
    public function printLog(string $addlInfo = ''): void
    {
        echo "{$addlInfo}{$this->state} || {$this->date}\n";
    }
}
