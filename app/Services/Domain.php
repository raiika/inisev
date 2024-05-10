<?php

namespace App\Services;

class Domain
{
	public function __construct(
		protected $domain
	) {}

	public function get()
	{
		return $this->domain;
	}
}