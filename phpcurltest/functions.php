<?php

function envronment($str){
	if($str=='APP_DEBUG'){
		echo true;
	}else{
		echo false;
	}
	
}