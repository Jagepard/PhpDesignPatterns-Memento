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
    private array $redo = [];
    private int $maxHistory = 20;

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

        $this->redo[] = new Memento([
            "state" => $this->originator->getState(),
            "date"  => $this->originator->getDate()
        ]);

        $this->setMemento(array_pop($this->history));
    }

    public function redo(): void
    {
        if (empty($this->redo)) {
            return;
        }

        $this->setMemento(array_pop($this->redo));
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
        $this->redo = [];

        if (count($this->history) >= $this->maxHistory) {
            array_shift($this->history);
        }

        sleep(1); // for example
        $this->history[] = new Memento([
                "state" => $this->originator->getState(),
                "date"  => $this->originator->getDate()
            ]
        );
    }

    private function setMemento(Memento $memento): void
    {
        $data = $memento->getMemento();
        $this->originator->restore($data["state"], $data["date"]);
    }
}
