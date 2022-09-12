var num="";
var last=num;
/*var x=setInterval(function(){[lo de abajo]}, 1000);*/
function bkg(source, code) {
	document.getElementById("link").href = source;
	document.getElementsByTagName("body")[0].style = "background-image:url('/imgs/" +  code + "');";
}
function setBkg() {
	num=Math.floor(Math.random()*2);
	if (num==0) {
		if(num!=last){
			bkg("https://pixabay.com/photos/id-2528359/",
			"carpincho.jpg");
			last=num;
		}else{
			setBkg();
		}
	} else if(num==1) {
		if(num!=last){
			bkg("https://www.redbubble.com/es/people/triinamariia/works/15636707-graphic-design-is-my-passion-rainbow-comic-sans",
			"passion.jpg");
			last=num;
		}else{
			setBkg();
		}
	}
}
setBkg();
document.getElementById("sBtxt").innerHTML="&#x21BB;";
