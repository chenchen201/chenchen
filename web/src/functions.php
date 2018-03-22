<?php

function env($str){
	if($str=='APP_DEBUG'){
		echo true;
	}else{
		echo false;
	}
	
}