<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var PHPFUI\ConstantContact\Definition\Next2 $next Contains the next page link, if applicable.
	 */

class Links2 extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'href' => 'string',
		'next' => 'PHPFUI\\ConstantContact\\Definition\\Next2',

	];
	}