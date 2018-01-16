<?php

/**
 * Time travel to specified timestamp and freeze
 *
 * @param DateTimeInterface|int $time
 *
 * @return bool
 */
function timecop_freeze($time) { }

/**
 * Time travel to specified timestamp
 *
 * @param DateTimeInterface|int $time
 *
 * @return bool
 */
function timecop_travel($time) { }

/**
 * @param float $scale
 */
function timecop_scale($scale) { }

/**
 * Return from time travel to current time
 */
function timecop_return() { }
