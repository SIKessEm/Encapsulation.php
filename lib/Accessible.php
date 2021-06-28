<?php namespace SIKessEm\Encapsulation;
/**
 * The accessible properties interface
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/encapsulation
 * @license Apache-2.0
 */
interface Accessible {
  /**
   * Get the value of a property
   *
   * @param string $name The name of the property
   * @return mixed The value of the property
   */
  public function __get(string $name): mixed;
}
