<?php namespace SIKessEm\Encapsulation;
/**
 * The mutable properties interface
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/encapsulation
 * @license Apache-2.0
 */
interface Mutable {
  /**
   * Set the value of a property
   *
   * @param string $name The name of the property
   * @param mixed $value The value of the property
   */
  public function __set(string $name, mixed $value);
}
