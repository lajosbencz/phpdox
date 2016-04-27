<?php

namespace Src2;

/**
 * Class Source
 * @package Src2
 * @property bool $SomeProperty
 * @property int OtherProperty
 * @property @static bool $SomeStaticProperty
 * @method void SomeMethod
 * @method @static void SomeStaticMethod
 */
class Source
{
    /** @var string */
    protected $_path;

    /** @var bool Lorem ipsum */
    public $foo = true;

    /** @var bool Static ipsum */
    public static $bar = false;

    /**
     * Source constructor.
     */
    public function __construct()
    {
    }

    /**
     * Returns path of object
     * @return string
     */
    public function getPath()
    {
        return $this->_path;
    }

    /**
     * Sets path of object
     * @param string $path
     * @return Source
     */
    public function setPath($path)
    {
        $this->_path = $path;
        return $this;
    }


}