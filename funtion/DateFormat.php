<?php

//判断一个时间字符串的时间是否符合时间格式，即20191115

//时间字符串
$time = '20191115';

//判断哪种时间类型格式，就设置为1
$year = 1;
$month = 1;
$day = 1;


	//判断是否为年月日格式
	if($day){
		$format = 'Ymd';
		if( date($format,strtotime($time))  != $time ) {
			echo '不符合年月日格式';echo '<br />';
		}
		else{
			echo '符合年月日格式';echo '<br />';
		}
	}

	//判断是否为年月格式
	if($month){
		$format = 'Ym';
		$time1 = $time . '01';
		if( !date($format,strtotime($time))  != $time ) {
			echo '不符合年月格式';echo '<br />';
		}
		else{
			echo '符合年月格式';echo '<br />';
		}
	}

	//判断是否为年格式
	if($year){
		$format = 'Y';
		$time1 = $time . '0101';
        if( !date($format,strtotime($time))  != $time ) {
        	echo '不符合年格式';echo '<br />';
		}
		else{
			echo '符合年格式';echo '<br />';
		}
	}