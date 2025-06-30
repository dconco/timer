<?php

use phpSPA\Component;

return (new Component(function()
{
	$time = date('h:i:s'); // format: Hours:Minutes:Seconds

	return <<<HTML
	   <h2>Current Time</h2>
	   <h3>{$time}</h3>
	HTML;
}))
	->title('Timer HomePage')
	->route('/')
	->reload(1000); // every 1 seconds
