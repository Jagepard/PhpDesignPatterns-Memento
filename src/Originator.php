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

    public function setState(string $state, string $date = null): void
    {
        $this->state = $state;
        $this->date  = $date ?? date("d-m-Y H:i:s");
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getDate(): string
    {
        return $this->date;
    }
}
