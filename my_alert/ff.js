// MY ALERT : php-javascript alert service
// BY SHAFIUL AZAM, PROGMAATIC DEVELOPER NETWORK
// i.shafiul@gmail.com
// License: Free to Use. Author-information should be kept intact for legal use.

// SETUP //
var domain_name = "worldwidewilly.net/projects/ideaink";

// No need to change below this. You need to put the folder "my_alert" in your root to work it properly!
var stop_scroll = false ;
var opacity = 0;
window.onscroll = scrolltop;
var redurl = "nil";

// Load images

var img_arr = new Array();
for(i=0;i<3;i++)
{
	img_arr[i] = new Image();
	img_arr[i].src = "http://" + domain_name + "/my_alert/img/" + i + ".png";
}

function scrolltop()
{
	
	if(stop_scroll == true)
		scroll(0,0);
}


function animate(rev)
{
	if(rev)
	{
		if(opacity != 0)
		{
			opacity -= 0.1;
			document.getElementById('blankbg').style.opacity = opacity;
			setTimeout("animate(1)",100);
		}
	}		
	else
		if(opacity != .7)
		{
			opacity += 0.1;
			document.getElementById('blankbg').style.opacity = opacity;
			setTimeout("animate()",100);
		}
	
}
function bg_off()
{
	document.getElementById('blankbg').style.display = 'none';
	opacity = 0;
}


function hidedivs()
{
	var arr = document.getElementById('mymsgbox');	
	
	if(arr.style.display == 'block')
	{
		//terminate
		animate(1);
		arr.style.display = 'none';	
		stop_scroll = false;
		goto = redurl;
		if(redurl && (redurl != "nil"))
			window.location = redurl;
		setTimeout("bg_off()",1000);
	
	}
	else
	{
		//init
		arr.style.display = 'block';	
		stop_scroll = true;		
		arr = document.getElementById('blankbg');
		arr.style.display = 'block';
		animate();
		
	}
}

function my_alert(title, msg, stat, goto)
{
	if(!stat)
		stat = "0";
	var statz = document.getElementById('msgboxImg').innerHTML + "/img/" + stat + ".png";
	document.getElementById('msgboxHead').innerHTML = "<img width = '16' height = '16' border = '0' src = '" + statz + "' />&nbsp;&nbsp;" + title;
	document.getElementById('msgboxBody').innerHTML = msg;
	redurl = goto;
	hidedivs();
}
