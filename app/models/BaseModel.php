<?php
use Carbon\Carbon;

class BaseModel extends Eloquent
{
	public function getCreatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);

	   	return $utc->setTimezone('America/Chicago');

	   	//'America/Chicago' should be $this->timezone
	   	// so that time can be set by the user
	}
	public function getUpdatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);

	   	return $utc->setTimezone('America/Chicago');

	   	//'America/Chicago' should be $this->timezone
	}
	public function setCreatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);

	   	return $utc->setTimezone('UTC');
	}
	public function setUpdatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);

	   	return $utc->setTimezone('UTC');
	}

}









