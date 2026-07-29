const formulario = document.getElementById("formFelicitacion");
const modal = document.getElementById("modalExito");
const cerrar = document.getElementById("cerrarModal");
const contenedorCartas = document.getElementById("contenedorCartas");

async function cargarCartas(){

    const respuesta = await fetch("obtener_felicitaciones.php");
    const cartas = await respuesta.json();
    contenedorCartas.innerHTML = "";
    cartas.forEach(carta=>{

        contenedorCartas.innerHTML += `
        <div class="sobreCarta"

    data-foto="${carta.foto}"
    data-nombre="${carta.nombre}"
    data-mensaje="${carta.mensaje}"
    data-fecha="${carta.fecha}">
        <div class="contenidoCarta">
        <img src="${carta.foto}" alt="Foto">
        <h3>${carta.nombre}</h3>
        <p>${carta.mensaje}</p>
        <div class="fechaCarta">
            ${carta.fecha}
        </div>
    </div>
    <div class="cuerpoSobre"></div>
    <div class="solapa">
    </div>

    <div class="sello">💗</div>
    
</div>`;
    });

    document.querySelectorAll(".sobreCarta").forEach(sobre=>{
    sobre.addEventListener("click",()=>{
        document.getElementById("fotoCarta").src =
            sobre.dataset.foto;
        document.getElementById("nombreCarta").textContent =
            sobre.dataset.nombre;
        document.getElementById("mensajeCarta").textContent =
            sobre.dataset.mensaje;
        const fecha = new Date(
    sobre.dataset.fecha.replace(" ","T")
);

document.getElementById("fechaGrande").textContent =
    fecha.toLocaleDateString("es-MX",{
        day:"numeric",
        month:"long",
        year:"numeric"
    });
        const visor = document.getElementById("visorCarta");
        const cartaGrande = document.getElementById("cartaGrande");
        visor.style.display = "flex";
        
    });
    
});
document.getElementById("cerrarCarta").addEventListener("click",()=>{
    document.getElementById("visorCarta").style.display="none";
});
}

if(formulario){
    formulario.addEventListener("submit", async function(e){
        e.preventDefault();
        let datos = new FormData();
        datos.append("nombre",
            document.getElementById("nombre").value);
        datos.append("mensaje",
            document.getElementById("mensaje").value);
        if(document.getElementById("foto").files.length > 0){
            datos.append("foto",
                document.getElementById("foto").files[0]);
        }
        const respuesta = await fetch("guardar_felicitacion.php",{
            method:"POST",
            body:datos
        });
        const resultado = (await respuesta.text()).trim();
        if(resultado==="OK"){
            modal.style.display="flex";
            formulario.reset();
            cargarCartas();
        }
        else{
            alert(resultado);
        }
    });
}

if(cerrar){
    cerrar.addEventListener("click",()=>{
    modal.style.display = "none";
    document.getElementById("formulario").style.display = "none";
    const muro = document.getElementById("muro");
    muro.style.display = "block";
    window.scrollTo({
        top:0,
        behavior:"smooth"
    });
});
}
cargarCartas();
