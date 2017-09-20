function home() {
		
	var xmlhttp1=new XMLHttpRequest();
	xmlhttp1.onreadystatechange=function() {

    	if (xmlhttp1.readyState==4 && xmlhttp1.status==200) {
	document.getElementById("main").innerHTML = xmlhttp1.responseText;
    	}
  	}
  	xmlhttp1.open("GET","home.html",false);
  	xmlhttp1.send();
	startTime();
}
function prgallery() {
		
	var xmlhttp1=new XMLHttpRequest();
	xmlhttp1.onreadystatechange=function() {

    	if (xmlhttp1.readyState==4 && xmlhttp1.status==200) {
	document.getElementById("main").innerHTML = xmlhttp1.responseText;
    	}
  	}
  	xmlhttp1.open("GET","prgallery.html",false);
  	xmlhttp1.send();
}
function trgallery() {
		
	var xmlhttp1=new XMLHttpRequest();
	xmlhttp1.onreadystatechange=function() {

    	if (xmlhttp1.readyState==4 && xmlhttp1.status==200) {
	document.getElementById("main").innerHTML = xmlhttp1.responseText;
    	}
  	}
  	xmlhttp1.open("GET","trgallery.html",false);
  	xmlhttp1.send();
}
function ina() {
		
	var xmlhttp1=new XMLHttpRequest();
	xmlhttp1.onreadystatechange=function() {

    	if (xmlhttp1.readyState==4 && xmlhttp1.status==200) {
	document.getElementById("main").innerHTML = xmlhttp1.responseText;
    	}
  	}
  	xmlhttp1.open("GET","ina.html",false);
  	xmlhttp1.send();
}
function contact() {
		
	var xmlhttp1=new XMLHttpRequest();
	xmlhttp1.onreadystatechange=function() {

    	if (xmlhttp1.readyState==4 && xmlhttp1.status==200) {
	document.getElementById("main").innerHTML = xmlhttp1.responseText;
    	}
  	}
  	xmlhttp1.open("GET","contact.html",false);
  	xmlhttp1.send();
}
function assoc() {
		
	var xmlhttp1=new XMLHttpRequest();
	xmlhttp1.onreadystatechange=function() {

    	if (xmlhttp1.readyState==4 && xmlhttp1.status==200) {
	document.getElementById("main").innerHTML = xmlhttp1.responseText;
    	}
  	}
  	xmlhttp1.open("GET","assoc.html",false);
  	xmlhttp1.send();
}
function hod() {
		
	var xmlhttp1=new XMLHttpRequest();
	xmlhttp1.onreadystatechange=function() {

    	if (xmlhttp1.readyState==4 && xmlhttp1.status==200) {
	document.getElementById("main").innerHTML = xmlhttp1.responseText;
    	}
  	}
  	xmlhttp1.open("GET","hod.html",false);
  	xmlhttp1.send();
}

function mam() {
		
	var xmlhttp1=new XMLHttpRequest();
	xmlhttp1.onreadystatechange=function() {

    	if (xmlhttp1.readyState==4 && xmlhttp1.status==200) {
	document.getElementById("main").innerHTML = xmlhttp1.responseText;
    	}
  	}
  	xmlhttp1.open("GET","mam.html",false);
  	xmlhttp1.send();
}

function about() {
		
	var xmlhttp1=new XMLHttpRequest();
	xmlhttp1.onreadystatechange=function() {

    	if (xmlhttp1.readyState==4 && xmlhttp1.status==200) {
	document.getElementById("main").innerHTML = xmlhttp1.responseText;
    	}
  	}
  	xmlhttp1.open("GET","about.html",false);
  	xmlhttp1.send();
}

function trigger() {
		
	var xmlhttp1=new XMLHttpRequest();
	xmlhttp1.onreadystatechange=function() {

    	if (xmlhttp1.readyState==4 && xmlhttp1.status==200) {
	document.getElementById("main").innerHTML = xmlhttp1.responseText;
    	}
  	}
  	xmlhttp1.open("GET","trigger.html",false);
  	xmlhttp1.send();
}


function prayatna() {
		
	var xmlhttp1=new XMLHttpRequest();
	xmlhttp1.onreadystatechange=function() {

    	if (xmlhttp1.readyState==4 && xmlhttp1.status==200) {
	document.getElementById("main").innerHTML = xmlhttp1.responseText;
    	}
  	}
  	xmlhttp1.open("GET","prayatna.html",false);
  	xmlhttp1.send();
}


function contact() {
		
	var xmlhttp1=new XMLHttpRequest();
	xmlhttp1.onreadystatechange=function() {

    	if (xmlhttp1.readyState==4 && xmlhttp1.status==200) {
	document.getElementById("main").innerHTML = xmlhttp1.responseText;
    	}
  	}
  	xmlhttp1.open("GET","contact.html",false);
  	xmlhttp1.send();
}


function load_pevent() {
		
	var xmlhttp1=new XMLHttpRequest();
	xmlhttp1.onreadystatechange=function() {

    	if (xmlhttp1.readyState==4 && xmlhttp1.status==200) {
	document.getElementById("area").innerHTML = xmlhttp1.responseText;
    	}
  	}
  	xmlhttp1.open("GET","event_p.html",false);
  	xmlhttp1.send();
}

function startTime() {
    var today = new Date();
    var h = today.getHours();
	if(h>12)
	  h=h%12;
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('time').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

$(document).ready()
{
startTime();
};