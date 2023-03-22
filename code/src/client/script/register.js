// var testingValid = function(event) {
//     var recItems = document.getElementsByClassName("required");
//     for(var i=0; i < recItems.length; i++){
//         if(recItems[i].type == "checkbox"){
//             if(recItems[i].checked == false){
//                 event.preventDefault();
//                 recItems[i].parentNode.classList.add("empty");
//             }else{
//                 recItems[i].parentNode.classList.remove("empty");
//             }
//         }
//         if(recItems[i].value == ''){
//             event.preventDefault();
//             recItems[i].classList.add("empty");
//         }
//         else{
//             recItems[i].classList.remove("empty");
//         }
       
//     }
// }


// window.onload = function() {
//     var form = document.getElementById("mainForm");
//     var recItems = document.getElementsByClassName("required");
   
//     for(var i=0; i < recItems.length; i++){
// 	    recItems[i].onchange = function(){
// 	    this.classList.remove('empty');
// 	    }
//     }
//     form.addEventListener("submit", testingValid);
// }