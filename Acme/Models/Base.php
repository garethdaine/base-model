<?php namespace Acme\Models;

use Eloquent;
use Str;

class Base extends Eloquent {
	
	// Return an array with camel cased properties
	public function toArrayCamel()
	{
		$array = $this->toArray();

		foreach ($array as $key => $value)
		{
			$return[Str::camel($key)] = $value;
		}

		return $return;
	}
	
	// Return an object with camel cased properties
	public function toObjectCamel()
	{
		return (object) $this->toArrayCamel();
	}
	
	// Return JSON with camel cased properties
	public function toJsonCamel()
	{
		return json_encode($this->toArrayCamel());
	}

}