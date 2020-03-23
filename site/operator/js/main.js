var cpage = "";
function include(jsfile){
  document.write('<script type="text/javascript" src="' + jsfile + '"></script>'); 
}
function initFrame(){
	document.getElementById("right_frame").style.width =  (s_width - document.getElementById("left_frame").style.width) + "px";
	document.getElementById("right_frame").style.height =  s_height + "px";
}
var $ = function(id){
	return document.getElementById(id);
}
include("js/net.js");
include("js/editor.js");