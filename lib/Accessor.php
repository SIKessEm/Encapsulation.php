<?php namespace SIKessEm\Encapsulation;
/**
 * The accessor trait
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/encapsulation
 * @license Apache-2.0
 */
trait Accessor {
  /**
   * @return array The list of accessible properties
   */
  abstract public function accessible_properties(): array;

  /**
   * Get the value of a property
   *
   * @param string $name The name of the property
   * @return mixed The value of the property
   */
  public function __get(string $name): mixed {
    if(in_array($name, $this->accessible_properties())) {
      if(method_exists($this, $get = 'get' . ucFirst($name)))
        return $this->$get();
      return $this->$name ?? null;
    }
    throw new Error('Unable to get property ' . $this::class . "::$name", Error::ACCESSING);
  }
}
