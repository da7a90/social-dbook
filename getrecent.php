<?php
$db = new mysqli('localhost', 'root', '', 'social');
include("functions.php");

$sql = "select * from `recent` ORDER BY `time` DESC LIMIT 20";
	$result = $db->query($sql);
	foreach($result as $row){
		$salt=$row['salt'];
		$data=$row['data'];
		$time = $row['time'];
		$pid = $row['pid'];
		$uid = $row['uid'];
		
	if($pid == "0")
	{
	$pid = salt($salt);
	}
	echo '
                                <a href="post.php?pid='.$pid.'" class="list-group-item">
								<img class="pull-left" src="images/'.image($uid).'" style="margin-right:6px;margin-bottom:2px;margin-top:-6px;" width="32px" height="32px" alt="">
                                      '.$data.'
                                    <span class="pull-right text-muted small"><em>'.ago($time).'</em>
                                    </span>
                                </a>';
		}
		
?>