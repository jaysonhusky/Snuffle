function getInstagram(){
	$("#thumb").hide();
	var e=location.search,t=e.split("=");
	console.log(t[1]);
	var a="https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20json%20where%20url%3D%22http%3A%2F%2Fapi.instagram.com%2Foembed%3Furl%3D"+encodeURIComponent(t[1])+"%22&format=json&diagnostics=true&callback=",o=new XMLHttpRequest;
	o.onreadystatechange=function(){
		if(4==o.readyState&&200==o.status){
			var e=JSON.parse(o.responseText),t=(e.query.results.json.media_id,e.query.results.json.thumbnail_url);
			setTimeout(function(){
				$("#tobalt").fadeOut(100),$("#thumb").html('<a href="'+t+'" target="_blank"><img src="'+t+'" alt="" /></a><i>Right click the image to download.<!--<br/> iOS 10 users need to tap the image once and then press and hold to save.--></i>'),$("#thumb").fadeIn(1e3)},3e3)
		}
	},o.open("GET",a,!0),o.send();
}
$('#submit').click(function(){
	if($.trim($('#url').val())==''){
		alert('URL required to download');
	}
});