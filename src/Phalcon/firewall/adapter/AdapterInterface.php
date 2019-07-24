<?php

namespace Phalcon\Firewall\Adapter;

/**
 * Interface for Phalcon\Mvc\Dispatcher\Firewall adapters
 */
interface AdapterInterface
{

    /**
     * Returns the default ACL access level
     *
     * @return int
     */
    public function getDefaultAccess(): int;

    /**
     * Gets role callback to fetch role name
     */
    public function getRoleCallback();

    /**
     * Gets always resolving role option
     *
     * @return bool
     */
    public function isAlwaysResolvingRole(): bool;

    /**
     * Sets always resolving role option
     *
     * @param bool $alwaysResolvingRole
     */
    public function setAlwaysResolvingRole(bool $alwaysResolvingRole);

    /**
     * Sets cache backend
     *
     * @param \Phalcon\Cache\Adapter\AdapterInterface $cache
     * @return AdapterInterface
     */
    public function setCache(\Phalcon\Cache\Adapter\AdapterInterface $cache): AdapterInterface;

    /**
     * Sets the default access level (Phalcon\Acl::ALLOW or Phalcon\Acl::DENY)
     *
     * @param int $defaultAccess
     * @return AdapterInterface
     */
    public function setDefaultAccess(int $defaultAccess): AdapterInterface;

    /**
     * Sets role callback to fetch role name
     *
     * @param mixed $callback
     * @return AdapterInterface
     */
    public function setRoleCallback($callback): AdapterInterface;

}