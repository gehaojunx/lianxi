<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>天气</title>
	<!-- //引入jQuery -->
	<script src="jquery-1.12.4.min.js"></script>
</head>
<body>
	<center>
	城市<input type="text" name="city" id="city">
	</center>
</body>
</html>
<script>
$(function(){
	$('#city').on('blur',function(){
		var city = $('#city').val();
		if(city == '' || $.trim(city).lenght==0){
			alert('文本框为空')
			return;
		}
		if(city.length>30){
			alert('文本框中数据长度超过30了，不能超过30个字符！');
			return;
		}
		var reg=/^[A-Za-z0-9\u4e00-\u9fa5]+$/i;
		if(!reg.test(city)){
			alert('您输入城市有误');
			return;
		}
		$.ajax({
			url:'process.php',
			type:'get',
			dataType:'json',
			data:{'city':city},
			success:function(data){
				var resultArr=new Array();
				var tempArr=new Array();
				data=eval(data);
				for(var i=0;i<data.length;i++){
					tempArr.push(data[i]['date']);		
					var max=data[i]['tmp_max'];
					var min=data[i]['tmp_min'];

					var arr=[max,min];
					var tmpArr=arr.map(Number);	
					resultArr.push(tmpArr);	
			}
			showWeather(tempArr,resultArr);
		});
	})
});
function showWeather(tempArr,resultArr){
	var options={
		chart:{
			type:'columnrange',
			inverted: true,	
			},
		title:{text:'温度变化范围'},
		xAxis: {categories: tempArr},
		yAxis:{title:{text:'温度值'}},

	    plotOptions: {
	        columnrange: {
	            dataLabels: {
	                enabled: true,
	                formatter: function () {
	                    return this.y + '°C';
	                }
	            }
	        }
	    },	
	    series:[
		{name:'随机数据',data:resultArr}
		]
	};	
	var chart=Highcharts.chart('container',options);
</script>