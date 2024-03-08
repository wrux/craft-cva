<?php

namespace wrux\cva;

/**
 * Class ClassNames
 *
 * @method static ClassNames cx()
 * @author Callum Bonnyman <hello@wrux.com>
 * @copyright Callum Bonnyman
 * @license MIT
 */
class ClassNames
{
  /**
   * Generates a class name string.
   *
   * @param mixed ...$args
   * @return string
   */
  public static function cx(...$args): string
  {
    array_walk_recursive($args, function ($v, $key) use (&$flat) {
      if (gettype($v) === "boolean" && $v === true) {
        $flat[] = $key;
        return;
      }
      $flat[] = $v;
    });
    return implode(" ", array_filter($flat));
  }
}
