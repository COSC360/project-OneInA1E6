
var testingValid = function(event) {
    var recItems = document.getElementsByClassName("required");
    for(var i=0; i < recItems.length; i++){
        if(recItems[i].value == ''){
            event.preventDefault();
            recItems[i].classList.add("empty");
        }
        else{
            recItems[i].classList.remove("empty");
        }
       
    }
}


window.onload = function() {
    var form = document.getElementById("mainForm");
    console.log("test");
    var recItems = document.getElementsByClassName("required");
   
    for(var i=0; i < recItems.length; i++){
	    recItems[i].onchange = function(){
	    this.classList.remove('empty');
	    }
    }
    form.addEventListener("submit", testingValid);
}