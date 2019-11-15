window.onload=function(){
var items = document.getElementsByClassName('item');
var goPreBtn = document.getElementById('pre');
var goNextBtn = document.getElementById('next');
var index= 0;
var clearActive = function(){
	for(var i=0;i<items.length;i++){
		items[i].className = 'item';
	}
}
var goIndex = function(){
	clearActive();
	items[index].className = 'item active';
}
var goNext = function(){
		if(index<4){
			index++;
		}
		else{
			index=0;
		}
	
	
	goIndex();
}
var goPre = function(){
	if(index==0){
		index=4;
	}
	else{
		index--;
	}
	goIndex();
}
 goNextBtn.addEventListener('click',function(){
	goNext();
})
 goPreBtn.addEventListener('click',function(){
	goPre()();
})
 setInterval(function(){
	goNext();
},4000)
}
