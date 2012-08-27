function data_get(id){
	var id = id;
	var page = $("input:[name="+id+"_page]").val();
	var url = $("input:[name="+id+"_url]").val();
	var update = '';
	
	$("#"+id+"_fresh").html('<img style="height:20px;padding-top:5px;" src="images/ajax-loader.gif">');
	$.get("dele_data.php",
			{id:id},
			function(data){
			location.reload(true);
	});
}

//获取当前日期
function currentTime(){
	var d = new Date(),str = '';
	str += d.getFullYear()+'-';
	str  += addzero(d.getMonth() + 1) + '-';
	str  += addzero(d.getDate())+'<br/>';
	str += addzero(d.getHours())+':';
	str  += addzero(d.getMinutes())+':';
	str+= addzero(d.getSeconds());
	return str;
}

//给数字前加0
function addzero(digit){
	var digit = digit;
	if(digit < 10){
		digit = '0'+digit;
	}
	return digit;
}


