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
 * Phalcon\Forms\Element\Email
 *
 * Component INPUT[type=email] for forms
 */
class Email extends \Phalcon\Forms\Element\AbstractElement
{
    /**
     * @var string
     */
    protected $method = 'inputEmail';
}
