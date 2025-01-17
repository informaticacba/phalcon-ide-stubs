<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Forms\Element;

use Phalcon\Tag;

/**
 * Phalcon\Forms\Element\Hidden
 *
 * Component INPUT[type=hidden] for forms
 */
class Hidden extends \Phalcon\Forms\Element\AbstractElement
{
    /**
     * @var string
     */
    protected $method = 'inputHidden';
}
