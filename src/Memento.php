<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

class Memento implements MementoInterface
{
    /**
     * @var string
     */
    private $state;

    /**
     * Memento constructor.
     * @param OriginatorInterface $originator
     */
    public function __construct(OriginatorInterface $originator)
    {
        $this->state = $originator->getState();
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
}
