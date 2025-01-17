<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger;

use DateTimeImmutable;

/**
 * Phalcon\Logger\Item
 *
 * Represents each item in a logging transaction
 *
 * @property array             $context
 * @property string            $message
 * @property int               $level
 * @property string            $levelName
 * @property DateTimeImmutable $datetime
 */
class Item
{
    /**
     * @var array
     */
    protected $context = [];

    /**
     * @var string
     */
    protected $message;

    /**
     * @var int
     */
    protected $level;

    /**
     * @var string
     */
    protected $levelName;

    /**
     * @var DateTimeImmutable
     */
    protected $dateTime;

    /**
     * @return array
     */
    public function getContext(): array
    {
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
    }

    /**
     * @return string
     */
    public function getLevelName(): string
    {
    }

    /**
     * @return mixed
     */
    public function getDateTime()
    {
    }

    /**
     * Item constructor.
     *
     * @param string            $message
     * @param string            $levelName
     * @param int               $level
     * @param DateTimeImmutable $datetime
     * @param array             $context
     * @param \DateTimeImmutable $dateTime
     */
    public function __construct(string $message, string $levelName, int $level, \DateTimeImmutable $dateTime, array $context = [])
    {
    }
}
