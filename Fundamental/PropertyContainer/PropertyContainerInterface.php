<?php

namespace Fundamental\PropertyContainer;

interface PropertyContainerInterface
{
    function addProperty($name, $value);
    function getProperty($name);
    function deleteProperty($name);
    function updateProperty($name, $value);
}