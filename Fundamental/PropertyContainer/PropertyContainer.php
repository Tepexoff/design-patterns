<?php

namespace Fundamental\PropertyContainer;

class PropertyContainer implements PropertyContainerInterface
{
    private $properties = [];

    public function addProperty($name, $value)
    {
        if (isset($this->properties[$name]))
        {
            throw new \Exception("Такое свойство уже существует");
        }
        $this->properties[$name] = $value;
    }

    public function getProperty($name)
    {
        if(! isset($this->properties[$name]))
        {
            throw new \Exception("Такого свойства не существует");
        }
        return $this->properties[$name];
    }

    public function deleteProperty($name)
    {
        if(!isset($this->properties[$name]))
        {
            throw new \Exception("Такого свойства не существует");
        }
        unset($this->properties[$name]);
    }

    public function updateProperty($name, $value)
    {
        if(! isset($this->properties[$name]))
        {
            throw new \Exception("Такого свойства не существует");
        }
        $this->properties[$name] = $value;
    }

    public function getProperties(): array
    {
        return $this->properties;
    }
}