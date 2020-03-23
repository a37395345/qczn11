var ns6=document.getElementById&&!document.all;
var s_height = ns6? window.innerHeight : iecompattest().clientHeight;

function iecompattest(){
	return (!window.opera && document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body;
}
function expandIt(id){
	var obj = document.getElementById("item"+id);
	if (obj.style.display == "none" || obj.style.display == "") {
			for(var i=0;i<window.folders.length;i++){
				objOther = document.getElementById("item"+i);
				objOther.style.display = "none";
				//alert(objOther);
			}
            obj.style.display = "block";
    }else {
            obj.style.display = "none";
   }
}
function close_all(){
	for(var i=0;i<window.folders.length;i++){
			objOther = document.getElementById("item"+i);
			objOther.style.display = "none";
	}
}
function makeitem(){
	//var doc = document.getElementsByTagName("body").item(0);
	//var doc = document.getElementsByTagName("body").item(0);
	var doc = document.getElementById("main");
	//alert(doc.innerHTML);
	//var i = 1;
	var item = "";
	//alert(window.folders);
	for(var i=0;i<window.folders.length;i++){
			forlder = window.folders[i];
			child  = "<div class='item'><B><a href='javascript:expandIt("+i+")'>"+forlder[0]+"</a></B></div>";
			child += "<div id='item"+i+"'>";
			for(var x=1;x<forlder.length;x++){
				child += "<div class='list'><a href='"+forlder[x][1]+"' target='"+forlder[x][2]+"'>"+forlder[x][0]+"</a></div>";
			}
			child += "</div>";
			item += child; 
	}
	//alert(item);
	doc.innerHTML = "<div class='top'><b>"+eval("window.title")+"</b></div>"+item;
	document.getElementById("main").style.height =  s_height*0.9 + "px";
}
//alert("ok");
makeitem();
close_all();