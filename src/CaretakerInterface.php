<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

interface CaretakerInterface
{
    public function undo(): MementoInterface;

    public function save(MementoInterface $memento): void;
}
