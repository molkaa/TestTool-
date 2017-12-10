 function bloqueTouche(e) {
 
  var alt=window.event.altKey; 
  if (event.keyCode==8|| event.keyCode==116 || alt && event.keyCode==115) { 
           event.keyCode=0; 
           event.cancelBubble=true; 
           return false; 
           } 
     

}
document.onkeydown=bloqueTouche;
document.onkeydown=bloqueTouche;


