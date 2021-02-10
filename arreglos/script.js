var count = 1

function sendData(){
    
    const form = document.querySelector('form')
    const formData = new FormData(form)

    if(hasValues(form) && isPositive(form) && allLetter(form)) {

        formData.append("nombre",form[0].value)

        formData.append("apellido",form[1].value)

        formData.append("cedula",form[2].value)

        formData.append("sueldo",form[3].value)

        formData.append("dep",form[4].value)

        formData.append("lg",form[5].value)

        formData.append("count",count++)
    
        const xhr = new XMLHttpRequest()

        xhr.onreadystatechange = function(){
            const res = document.getElementById("formData")
            if(xhr.readyState==4 && xhr.status==200) res.innerHTML +=this.responseText
        }

        xhr.open("POST", "array.php")
        xhr.send(formData)
        form.reset()
    }

     else { 
        let message = "Lo sentimos, Ocurrio un error, esto puede suceder por: \n -No ingresar todos los campos \n -Ingresar negativos o 0 \n -Ingresar números en vez de letras en los campos no-numéricos"
        alert(message)
        form.reset();
    } 
}

function hasValues(form) {
let a= true;
for(let i=0;i<form.length-1;i++){
    if(form[i].value=="") a=false;
}

return a;

}

function isPositive(form){

    let a = true;

    if(form[2].value<=0||form[3].value<=0) a= false

    return a
}

function allLetter(form) { 
      var letters = /^[A-Za-z]+$/;
      if(form[0].value.match(letters) && form[1].value.match(letters) && form[4].value.match(letters) && form[5].value.match(letters)) return true;
      
      else return false;
      
}