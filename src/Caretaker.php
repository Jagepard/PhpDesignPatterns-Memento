<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

class Caretaker implements CaretakerInterface
{
    private OriginatorInterface $originator;
    private array $history = [];

    public function __construct(OriginatorInterface $originator)
    {
        $this->originator = $originator;
    }

    public function undo(): void
    {
        $memento = array_pop($this->history)->getMemento();
        $this->originator->setState($memento["state"], $memento["date"]);
    }

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
