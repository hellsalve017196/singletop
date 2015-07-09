<?php
	require_once 'DB.php';
	$user = DB::getInstance()->query("SELECT * FROM finish");
	
	if($user->count())
	{
		foreach($user->results() as $user)
		{
			echo $user->last.'<br>';
		}
	}
?>