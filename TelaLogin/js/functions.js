function formatDateToString(date){
   dd = (date.getDate() < 10 ? '0' : '') + date.getDate();
   MM = ((date.getMonth() + 1) < 10 ? '0' : '') + (date.getMonth() + 1);
   yyyy = date.getFullYear();
   newDate= (MM + "/" + dd + "/"  + yyyy);
}


function formClear(id=0){
document.forms[id].reset();
}

function formPass(){

	document.getElementById("password").focus();
}

function ValidatePass(){
       let x=document.getElementById("password").value;
  let y=document.getElementById("password-repeat").value;
    if(x!=y){
alert('Os passwords precisam ser iguais');
document.getElementById("password").value="";
document.getElementById("password-repeat").value="";
 formPass();

    }

}

