function hide(){
	if (document.getElementById){
		var obj = document.getElementById('more');
		obj.style.display="none";
	}
}
function more(){
    if (document.getElementById){
		var obj = document.getElementById('more');      
		var obj2 = document.getElementById('lnk');      
        if (obj.style.display == "none"){
            obj.style.display = "";
            obj2.innerHTML = "-";
        } else {
            obj.style.display = "none";
            obj2.innerHTML = "+";
        }
    }
}
window.onload = hide;
