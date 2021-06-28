<?php namespace SIKessEm\Encapsulation;
/**
 * The mutator trait
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/encapsulation
 * @license Apache-2.0
 */
trait Mutator {
  /**
   * @return array The list of mutable properties
   */
  abstract public function mutable_properties(): array;

  /**
   * Set the value of a property
   *
   * @param string $name The name of the property
   * @param mixed $value The value of the property
   */
  public function __set(string $name, mixed $value) {
    if(in_array($name, $this->mutable_properties())) {
      if(method_exists($this, $set = 'set' . ucFirst($name)))
        return $this->$set($value);
      return $this->$name = $value;
    }
    throw new Error('Unable to set property ' . $this::class . "::$name", Error::MUTATION);
  }
}
