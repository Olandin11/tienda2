//variables
const carrito = document.querySelector('#carrito');
const contenedorCarrito = document.querySelector('#lista-carrito tbody');
const vaciarCarritoBtn =document.querySelector('#vaciar-carrito');
const listaCursos = document.querySelector('#lista-cursos');
const pagar = document.querySelector('#pagar');
//arreglo de articulos
let articulosCarrito= [];




cargarEventListeners();
function cargarEventListeners(){
    //agregar al carrito
    listaCursos.addEventListener('click',agregarCurso);
    //elimina datos del carrito
    carrito.addEventListener('click', eliminarCurso);

    //vacia el carrito
    vaciarCarritoBtn.addEventListener('click', () => {
        articulosCarrito=[];
        limpiarHTML();
    });

    //pagar
    pagar.addEventListener('click', pagamiento);

}
//eliminar curso el carrito
function eliminarCurso(e){
    if (e.target.classList.contains('borrar-curso')) {
        const cursoId = e.target.getAttribute('data-id');
        //eliminacion del arreglo
        articulosCarrito = articulosCarrito.filter(curso => curso.id !== cursoId);
        carritoHTML();
    }
}

function agregarCurso(e){
   
    
    if (e.target.classList.contains('agregar-carrito')) {
         e.preventDefault();
        const cursoSeleccionado = e.target.parentElement.parentElement;
        console.log( e.target.parentElement.parentElement)
       leerDatosCurso(cursoSeleccionado);
    }
  
    
}

//lee el contenido del html y extrae la informacion del curso
 function leerDatosCurso(curso){
    //crear un objeto con el contenido actual del curso
    const infoCurso={
        imagen: curso.querySelector('img').src,
        titulo: curso.querySelector('h4').textContent,
        precio: curso.querySelector('.precio').textContent,
        unidades: curso.querySelector('.unidades').textContent,
        id: curso.querySelector('.agregar-carrito').getAttribute('data-id'),
        cantidad: 1
        
    }
    //revisar si algun elemento ya existe en el carrito
    const existe = articulosCarrito.some(curso => curso.id === infoCurso.id);
    if (existe) {
        //actualizar la cantidad
        const cursos = articulosCarrito.map(curso => {
            if (curso.id === infoCurso.id) {
                    curso.cantidad++;
                    return curso;//objeto duplicados
            }else{
                return curso;
            }
        })
    }else{
        //lo agregamos al carrito
         //Agregar elementos al carrito
    articulosCarrito=[...articulosCarrito, infoCurso];
    }
    
    const otra= localStorage.getItem("long");
    
    localStorage.setItem('Carrito', articulosCarrito);
    var jObject={};
    for(i in articulosCarrito)
    {
        jObject[i] = articulosCarrito[i];
    }
    //Luego lo paso por JSON  a un archivo php llamado js.php
    jObject= JSON.stringify(jObject);
    //console.log(jObject);
    localStorage.setItem('Carro', jObject);
    //console.log(localStorage.getItem("Carro"));
    carritoHTML();



}
    

    
 //Muestra por pantalla el carrito de compras

 function carritoHTML(){
     //limpiar el html
        limpiarHTML();
        let datos,nuevo= [];
        
        datos=JSON.parse(localStorage.getItem("Carro"));
        nuevo = Object.entries(datos);
        const largo = nuevo.length;
        //console.log(articulosCarrito);
        
        localStorage.setItem('long', largo);
        var saber=localStorage.getItem("long");
        let ver=localStorage.getItem("Carrito");
        console.log(ver);
        console.log(articulosCarrito);


        //console.log(nuevo);
     //recorre el arreglo de objetos
        articulosCarrito.forEach(  curso => {
        const {imagen, titulo, precio, cantidad, id}= curso;
        const row =document.createElement('tr');
        row.innerHTML=`
        <td>
            <img src="${imagen}" width="100"> 
        </td>
        <td>${titulo}</td>
        <td>${precio}</td>
        <td>${cantidad}</td>
        <td>
        <a href="#" class="borrar-curso" data-id="${id}">X</a>
        </td>
        <td>
        <a href="pagar.php" class="pagar" data-id="${id}">$</a>
        </td>
        `;

        //agrega el HTML del carrito al tbody
        contenedorCarrito.appendChild(row);
    })
    
 }

 //eliminar los cursos el tbody
 function limpiarHTML(){
     //forma lenta
     //contenedorCarrito.innerHTML='';

     while(contenedorCarrito.firstChild){
         contenedorCarrito.removeChild(contenedorCarrito.firstChild)
     }
 }
 function pagamiento(e){
 //Lo convierto a objeto
    var jObject={};
    for(i in articulosCarrito)
    {
        jObject[i] = articulosCarrito[i];
    }

    //Luego lo paso por JSON  a un archivo php llamado js.php
    jObject= JSON.stringify(jObject);
    console.log(jObject);
    localStorage.setItem('Carro', jObject);
    
        
    
 }
 function carropelon(){
    var objeto={};
    localStorage.setItem('Carro',objeto);
 }
//window.onload=carritoHTML();
