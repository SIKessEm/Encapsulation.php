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
   * Properties accessing error code
   */
  public const ACCESSING = 0x01;

  /**
   * Properties mutation error code
   */
  public const MUTATION = 0x02;

}
