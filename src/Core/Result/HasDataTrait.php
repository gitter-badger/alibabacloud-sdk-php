<?php
namespace AlibabaCloud\Core\Result;

/**
 * Trait implementing ToArrayInterface, \ArrayAccess, \Countable, and
 * \IteratorAggregate
 */
trait HasDataTrait
{
    /** @var array */
    private $data = [];

	/**
	 * @return \ArrayIterator
	 */
    public function getIterator()
    {
        return new \ArrayIterator($this->data);
    }

    /**
     * This method returns a reference to the variable to allow for indirect
     * array modification (e.g., $foo['bar']['baz'] = 'qux').
     *
     * @param $offset
     *
     * @return mixed|null
     */
    public function & offsetGet($offset)
    {
        if (isset($this->data[$offset])) {
            return $this->data[$offset];
        }

        $value = null;
        return $value;
    }

	/**
	 * @param $offset
	 * @param $value
	 */
    public function offsetSet($offset, $value)
    {
        $this->data[$offset] = $value;
    }

	/**
	 * @param $offset
	 *
	 * @return bool
	 */
    public function offsetExists($offset)
    {
        return isset($this->data[$offset]);
    }

	/**
	 * @param $offset
	 */
    public function offsetUnset($offset)
    {
        unset($this->data[$offset]);
    }

	/**
	 * @return array
	 */
    public function toArray()
    {
        return $this->data;
    }

	/**
	 * @return int
	 */
    public function count()
    {
        return count($this->data);
    }
}
