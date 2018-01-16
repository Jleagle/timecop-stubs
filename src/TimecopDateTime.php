<?php

class TimecopDateTime extends DateTime
{
  /**
   * Time travel to specified timestamp and freeze
   *
   * @param DateTimeInterface|int $time
   *
   * @return bool
   */
  public static function freeze($time) { }

  /**
   * Time travel to specified timestamp
   *
   * @param DateTimeInterface|int $time
   *
   * @return bool
   */
  public static function travel($time) { }

  /**
   * @param float $scale
   */
  public static function scale($scale) { }

  /**
   * Return from time travel to current time
   */
  public static function return() { }
}
