<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger\Formatter;

use Phalcon\Logger\Item;
use Phalcon\Support\Helper\Str\AbstractStr;

/**
 * Class AbstractFormatter
 *
 * @property string $dateFormat
 */
abstract class AbstractFormatter extends AbstractStr implements \Phalcon\Logger\Formatter\FormatterInterface
{
    /**
     * Default date format
     *
     * @var string
     */
    protected $dateFormat = 'c';

    /**
     * Default date format
     *
     * @return string
     */
    public function getDateFormat(): string
    {
    }

    /**
     * Default date format
     *
     * @param string $dateFormat
     */
    public function setDateFormat(string $dateFormat)
    {
    }

    /**
     * Returns the date formatted for the logger.
     *
     * @param Item $item
     *
     * @return string
     */
    protected function getFormattedDate(\Phalcon\Logger\Item $item): string
    {
    }
}
