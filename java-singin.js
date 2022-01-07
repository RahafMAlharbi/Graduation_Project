function isBlank(inputField){
    if(inputField.type=="checkbox"){
	if(inputField.checked)
	    return false;
	return true;
    }
    if (inputField.value==""){
	return true;
    
    }
    return false;
}

function makeRed(inputDiv){
   	inputDiv.style.backgroundColor=" #ffe5e5";
	inputDiv.parentNode.style.color="#af4444";
    
}
function makeClean(inputDiv){
	inputDiv.parentNode.style.backgroundColor="#ddd";
	inputDiv.parentNode.style.color="#000000";		
}

window.onload = function(){
    var mainForm = document.getElementById("singdiv");
    var requiredInputs = document.querySelectorAll(".sing-inp");
    for (var i=0; i < requiredInputs.length; i++){
	requiredInputs[i].onfocus = function(){
	    this.style.backgroundColor = "#ffdab7 ";
	}
    }
    mainForm.onsubmit = function(e){
	var requiredInputs = document.querySelectorAll(".sing-inp");
	for (var i=0; i < requiredInputs.length; i++){
	    if( isBlank(requiredInputs[i]) ){
		e.preventDefault();
		makeRed(requiredInputs[i]);
	    }
	    else{
		makeClean(requiredInputs[i]);
	    }
	}
    }
}