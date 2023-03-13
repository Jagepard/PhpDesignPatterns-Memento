<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

interface CaretakerInterface
{
    /**
     * @return void
     */
    public function undo(): void;

    /**
     * @return void
     */
    public function save(): void;
}
