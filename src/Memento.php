<?php

declare(strict_types = 1);

/**
 * Date: 22.09.16
 * Time: 11:33
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2016, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Memento;

/**
 * Class Memento
 * @package Behavioral\Memento
 */
class Memento
{

    /**
     * @var
     */
    protected $state;

    /**
     * Memento constructor.
     * @param $state
     */
    public function __construct(string $state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getState(): string
    {
        return $this->state;
    }
}
