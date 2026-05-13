<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

class Caretaker implements CaretakerInterface
{
    private array $history = [];

    /**
     * Accepts an object
     * -------------------------
     * Принимает объект в работу
     *
     * @param  OriginatorInterface $originator
     */
    public function __construct(private OriginatorInterface $originator){}

    /**
     * Restores the previous state
     * ------------------------------------
     * Восстанавливает предыдущее состояние
     *
     * @return void
     */
    public function undo(): void
    {
        if (empty($this->history)) {
            return;
        }

        $memento = array_pop($this->history)->getMemento();
        $this->originator->restore($memento["state"], $memento["date"]);
    }

    /**
     * Stores data about the current state of an object
     * ------------------------------------------------
     * Сохраняет данные о текущем состоянии объекта
     *
     * @return void
     */
    public function save(): void
    {
        sleep(1); // for example
        $this->history[] = new Memento([
                "state" => $this->originator->getState(),
                "date"  => $this->originator->getDate()
            ]
        );
    }
}
