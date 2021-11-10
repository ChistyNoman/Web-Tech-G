<?php 

require_once ('../model/model.php');

function fetchAlluser(){
	return ShowAllUser();

}
function fetchuser($id){
	return Showuser($id);

}
