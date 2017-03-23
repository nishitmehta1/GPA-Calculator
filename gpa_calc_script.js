creditsarray=new Array();
gradesarray=new Array();
var num=3;
function addrow(){
var norows=document.getElementById("gpatable").rows.length;
if (norows>=0 && norows<12) {
		num=num+1;
		var table = document.getElementById("gpatable");
		var row = table.insertRow(norows);
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		var cell4 = row.insertCell(3);
		cell1.innerHTML = "<tr><strong><th scope=\"row\">"+norows+"</th></strong>";
		cell2.innerHTML = "<td class=\"td\"><input type=\"text\" name=\"subname\" class=\"form-control col-md-8\"></td>";
		cell3.innerHTML = " <td class=\"td\"><select onchange=\"updatecreditarray(this.id)\" id=\"select_credits"+num+"\" class=\"custom-select\"><option selected value=\"0\">-</option><option value=\"1\">1.00</option><option value=\"2\">2.00<option value=\"3\">3.00</option><option value=\"4\">4.00</option></select>";
		cell4.innerHTML = " <td class=\"td\"> <select id=\"select_grades"+num+"\" class=\"custom-select\"><option selected value=\"0\">-</option><option value=\"4\">A+</option><option value=\"3.75\">A</option><option value=\"3.5\">A-</option><option value=\"3.25\">B+</option><option value=\"3\">B</option><option value=\"2.75\">B-</option><option value=\"2.5\">C+</option><option value=\"2.25\">C</option><option value=\"2\">C-</option><option value=\"0\">F</option></td> ";
	}
}

function subrow(){
	var norows=document.getElementById("gpatable").rows.length;
	if (norows>2){
   		document.getElementById("gpatable").deleteRow(norows-1);
   }
}

function updatecreditarray(nooselect){
	var valuer=document.getElementById(nooselect);
	var strUser = valuer.options[valuer.selectedIndex].value;
	creditsarray.push(strUser);
}	

function sumcreditarray(){
	var sum=0;
	for (var i = 0; i < creditsarray.length; i++) {
		sum=sum+ parseInt(creditsarray[i]);
	}
	return sum;
}

function multiplyadd() {
	var tbody = document.getElementById("gpatable");
	var answer=0,answer1=0,j=0;
	var dropbox = document.getElementsByClassName('custom-select'); //this will get elements with class custom-select
	for(var i = 1, row; row = tbody.rows[i]; i++) {
	   	if (i==1) {
			var credits = dropbox[i-1].options[dropbox[i-1].selectedIndex].value; // this will get Credits element value
			var grades = dropbox[i].options[dropbox[i].selectedIndex].value; // this will get Grade element value	
			j++;   		
	   	}
	   	else{
			var credits = dropbox[i+j-1].options[dropbox[i+j-1].selectedIndex].value; // this will get Credits element value
			var grades = dropbox[i+j].options[dropbox[i+j].selectedIndex].value; // this will get Grade element value
			j++;
	   	}
	   	// alert(credits + ' ' +grades);
		if (credits!=undefined && grades!=undefined) {
		    var answer1 = ((credits) * (grades));
		    answer=answer+answer1;
	    }
	}
	// alert(answer);
	return answer;
}

function calculator(){
	var mulanswer=multiplyadd();
	var sumanswer=sumcreditarray();
	var gpa=(mulanswer)/(sumanswer);
	document.getElementById("result").innerHTML=gpa;
}
