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
    private \DateTime $date;

    /**
     * Sets the current state of the object and fixes the installation time
     * --------------------------------------------------------------------
     * Устанавливает текущее состояние объекта и фиксирует время установки
     *
     * @param  string $state
     * @return void
     */
    public function setState(string $state): void
    {
        $this->state = $state;
        $this->date  = new \DateTime();
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
    public function getDate(): \DateTime
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
        printf("%s %s %s\n", $addlInfo, $this->date->format('d-m-Y H:i:s'), $this->state);
    }

    /**
     * Restores the state of the object
     * --------------------------------
     * Восстанавливает состояние объекта
     * 
     * @param  string    $state
     * @param  \DateTime $date
     * @return void
     */
    public function restore(string $state, \DateTime $date): void
    {
        $this->state = $state;
        $this->date  = $date;
    }
}
