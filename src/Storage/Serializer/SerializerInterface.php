<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Storage\Serializer;

use Serializable;

/**
 * Interface SerializerInterface
 *
 * @package Phalcon\Storage\Serializer
 */
interface SerializerInterface extends \Serializable
{
    /**
     * @return mixed
     */
    public function getData();

    /**
     * @param mixed $data
     * @return void
     */
    public function setData($data): void;
}
