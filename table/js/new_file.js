var count=0;
function add()
{
	
	var a = document.createElement("tr");
	var tab = document.getElementById("biao");
	var name = document.getElementById("name").value;
	var num = document.getElementById("num").value;
	tab.innerHTML+=
	"<tr id='"+count+"'>"+
	"<td>"+name+"</td>"+
	"<td>"+num+"</td>"+
	'<td><a href="javascript:delet('+count+')">'+
	"删除"+
	"</a></td>"+
	"</tr>";
	count++;
}
function delet(count){
    var row = document.getElementById(count);
    row.remove(count);
}