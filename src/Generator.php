<?php

namespace LaravelGreatApi\Helpers;

use Illuminate\Support\Str;

class Generator
{
	/**
	 * Undocumented function
	 *
	 * @param integer $length
	 * @return void
	 */
	public static function id($length = 16)
	{
		return Str::upper(static::generateId($length));
	}

	private static function generateId($length)
	{
		return Str::random($length);
	}
}
