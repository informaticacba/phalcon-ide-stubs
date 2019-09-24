<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Forms\Element;

use Phalcon\Forms\Form;
use Phalcon\Messages\Messages;

/**
 * This is a base class for form elements
 */
abstract class AbstractElement implements ElementInterface
{

    protected $attributes;


    protected $filters;


    protected $form;


    protected $label;


    protected $messages;


    protected $name;


    protected $options;

    /**
     * @var array
     */
    protected $validators = array();


    protected $value;


    /**
     * Phalcon\Forms\Element constructor
     *
     * @param string $name Attribute name (value of 'name' attribute of HTML element)
     * @param array $attributes Additional HTML element attributes
     */
    public function __construct(string $name, array $attributes = array())
    {
    }

    /**
     * Magic method __toString renders the widget without attributes
     *
     * @return string
     */
    public function __toString(): string
    {
    }

    /**
     * Adds a filter to current list of filters
     *
     * @param string $filter
     * @return ElementInterface
     */
    public function addFilter(string $filter): ElementInterface
    {
    }

    /**
     * Adds a validator to the element
     *
     * @param \Phalcon\Validation\ValidatorInterface $validator
     * @return ElementInterface
     */
    public function addValidator(\Phalcon\Validation\ValidatorInterface $validator): ElementInterface
    {
    }

    /**
     * Adds a group of validators
     *
     * @param \Phalcon\Validation\ValidatorInterface[] $validators
     * @param bool $merge
     * @return ElementInterface
     */
    public function addValidators(array $validators, bool $merge = true): ElementInterface
    {
    }

    /**
     * Appends a message to the internal message list
     *
     * @param \Phalcon\Messages\MessageInterface $message
     * @return ElementInterface
     */
    public function appendMessage(\Phalcon\Messages\MessageInterface $message): ElementInterface
    {
    }

    /**
     * Clears element to its default value
     *
     * @return ElementInterface
     */
    public function clear(): ElementInterface
    {
    }

    /**
     * Returns the value of an attribute if present
     *
     * @param string $attribute
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getAttribute(string $attribute, $defaultValue = null)
    {
    }

    /**
     * Returns the default attributes for the element
     *
     * @return array
     */
    public function getAttributes(): array
    {
    }

    /**
     * Returns the default value assigned to the element
     *
     * @return mixed
     */
    public function getDefault()
    {
    }

    /**
     * Returns the element filters
     *
     * @return mixed
     */
    public function getFilters()
    {
    }

    /**
     * Returns the parent form to the element
     *
     * @return \Phalcon\Forms\Form
     */
    public function getForm(): Form
    {
    }

    /**
     * Returns the element label
     *
     * @return string
     */
    public function getLabel(): string
    {
    }

    /**
     * Returns the messages that belongs to the element
     * The element needs to be attached to a form
     *
     * @return \Phalcon\Messages\Messages
     */
    public function getMessages(): Messages
    {
    }

    /**
     * Returns the element name
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Returns the value of an option if present
     *
     * @param string $option
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getUserOption(string $option, $defaultValue = null)
    {
    }

    /**
     * Returns the options for the element
     *
     * @return array
     */
    public function getUserOptions(): array
    {
    }

    /**
     * Returns the validators registered for the element
     *
     * @return array|\Phalcon\Validation\ValidatorInterface[]
     */
    public function getValidators(): array
    {
    }

    /**
     * Returns the element's value
     *
     * @return mixed
     */
    public function getValue()
    {
    }

    /**
     * Checks whether there are messages attached to the element
     *
     * @return bool
     */
    public function hasMessages(): bool
    {
    }

    /**
     * Generate the HTML to label the element
     *
     * @param array $attributes
     * @return string
     */
    public function label(array $attributes = array()): string
    {
    }

    /**
     * Returns an array of prepared attributes for Phalcon\Tag helpers
     * according to the element parameters
     *
     * @param array $attributes
     * @param bool $useChecked
     * @return array
     */
    public function prepareAttributes(array $attributes = array(), bool $useChecked = false): array
    {
    }

    /**
     * Sets a default attribute for the element
     *
     * @param string $attribute
     * @param mixed $value
     * @return ElementInterface
     */
    public function setAttribute(string $attribute, $value): ElementInterface
    {
    }

    /**
     * Sets default attributes for the element
     *
     * @param array $attributes
     * @return ElementInterface
     */
    public function setAttributes(array $attributes): ElementInterface
    {
    }

    /**
     * Sets a default value in case the form does not use an entity
     * or there is no value available for the element in _POST
     *
     * @param mixed $value
     * @return ElementInterface
     */
    public function setDefault($value): ElementInterface
    {
    }

    /**
     * Sets the element filters
     *
     * @param array|string $filters
     * @return ElementInterface
     */
    public function setFilters($filters): ElementInterface
    {
    }

    /**
     * Sets the parent form to the element
     *
     * @param \Phalcon\Forms\Form $form
     * @return ElementInterface
     */
    public function setForm(\Phalcon\Forms\Form $form): ElementInterface
    {
    }

    /**
     * Sets the element label
     *
     * @param string $label
     * @return ElementInterface
     */
    public function setLabel(string $label): ElementInterface
    {
    }

    /**
     * Sets the validation messages related to the element
     *
     * @param \Phalcon\Messages\Messages $messages
     * @return ElementInterface
     */
    public function setMessages(\Phalcon\Messages\Messages $messages): ElementInterface
    {
    }

    /**
     * Sets the element name
     *
     * @param string $name
     * @return ElementInterface
     */
    public function setName(string $name): ElementInterface
    {
    }

    /**
     * Sets an option for the element
     *
     * @param string $option
     * @param mixed $value
     * @return ElementInterface
     */
    public function setUserOption(string $option, $value): ElementInterface
    {
    }

    /**
     * Sets options for the element
     *
     * @param array $options
     * @return ElementInterface
     */
    public function setUserOptions(array $options): ElementInterface
    {
    }
}