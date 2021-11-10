<?php

require_once '../model/model.php';

if (isset($_POST['findUser'])) {
	
		echo $_POST['username'];

    try {
    	
    	$allSearchedUsers = Finduser($_POST['username']);
    	require_once '../view/ShowFindUser.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

