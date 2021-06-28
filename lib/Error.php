<?php namespace SIKessEm\Encapsulation;
/**
 * The error class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/encapsulation
 * @license Apache-2.0
 */
class Error extends \Error {
  /**
   * Accessing error code
   */
  public const ACCESSING = 0x01;

  /**
   * Mutation error code
   */
  public const MUTATION = 0x02;

}
