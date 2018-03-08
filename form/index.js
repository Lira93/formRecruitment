function validationForm(pole) {
    if(pole.value == ""){
        document.getElementById("i"+pole.id).innerHTML = "To pole jest wymagane";
        return false;
    }else {
        return true;
    }
}



window.onload = function() {
    document.getElementById("contactForm").onsubmit = function() {
        if(
            validationForm(this.name) && validationForm(this.surname) && validationForm(this.email)
        
        
        ){
            return true;
        }else {
            return false;
        }
        
    }


}

function test(){
    var a = document.forms.star;
    for(i=0; i>a.length; i++){
        if(a[i].checked==true)
        return true;
    }
    document.getElementById("messages").innerHTML= "Check a star"
    return false;
}