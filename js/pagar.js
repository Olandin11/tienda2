const pagar = document.querySelector('#pagar');
const enviar = document.querySelector('#info');
let final= [];
cargarEventListeners();
final=JSON.parse(localStorage.getItem("Carro"));
function cargarEventListeners(){
    //pagar
    pagar.addEventListener('click', pagamiento);
    enviar.addEventListener('click', confirmacion);

}
 function pagamiento(e){
 //Lo convierto a objeto
    window.location.href = "datos.php";
    
      }  

       function confirmacion(e){
 //Lo convierto a objeto
    var jObject={};
    for(i in final)
    {
        jObject[i] = final[i];
    }
    console.log(jObject);

    //Luego lo paso por JSON  a un archivo php llamado js.php
    jObject= JSON.stringify(jObject);
    console.log(jObject);
    $.post("confirmar.php",{arrayDeValores:jObject},function(data) {
 
			// Mostramos el texto devuelto por el archivo php
			alert(data);
		});
    
        
    
 }
    