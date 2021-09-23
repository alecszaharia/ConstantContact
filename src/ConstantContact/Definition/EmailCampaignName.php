<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var string $name The updated email campaign name. The email campaign name must be unique.
	 */

class EmailCampaignName extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'name' => 'string',

	];

	protected static array $maxLength = [
		'name' => 80,

	];
	}