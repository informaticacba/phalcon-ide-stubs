<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Events;

/**
 * Phalcon\Events\EventsAwareInterface
 *
 * This interface must for those classes that accept an EventsManager and
 * dispatch events
 */
interface EventsAwareInterface
{
    /**
     * Returns the internal event manager
     *
     * @return ManagerInterface|null
     */
    public function getEventsManager(): ?ManagerInterface;

    /**
     * Sets the events manager
     *
     * @param ManagerInterface $eventsManager
     * @return void
     */
    public function setEventsManager(ManagerInterface $eventsManager): void;
}
