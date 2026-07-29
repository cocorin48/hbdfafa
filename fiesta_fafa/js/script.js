const btnEntrar = document.getElementById("btnEntrar");
const bienvenida = document.getElementById("bienvenida");
const musica = document.getElementById("musica");

btnEntrar.addEventListener("click", () => {
    iniciarFiesta();
});

function iniciarFiesta(){

    musica.play().catch(()=>{});

    bienvenida.style.transition = "1s";
    bienvenida.style.opacity = "0";
    bienvenida.style.transform = "scale(.92)";

    setTimeout(()=>{

        bienvenida.style.display="none";
        const formulario = document.getElementById("formulario");
        formulario.style.display = "block";
        formulario.style.opacity = "0";
        formulario.style.transform = "translateY(40px)";
        setTimeout(()=>{
            formulario.style.transition = ".8s";
            formulario.style.opacity = "1";
            formulario.style.transform = "translateY(0px)";
        },100);
        // Aqui formulario
        }
    )}

window.onload = ()=>{
    crearEstrellas();
    crearCopos();
    crearMedusas();
};

function crearEstrellas(){
    const contenedor = document.getElementById("estrellas");
    for(let i=0;i<20;i++){
        const estrella = document.createElement("img");
        estrella.src="img/estrella.png";
        estrella.className="estrella";
        estrella.style.left=Math.random()*100+"%";
        estrella.style.top=Math.random()*100+"%";
        estrella.style.width=(8+Math.random()*10)+"px";
        estrella.style.animationDelay=(Math.random()*5)+"s";
        contenedor.appendChild(estrella);
    }
}

function crearCopos(){
    const contenedor=document.getElementById("nieve");
    for(let i=0;i<25;i++){
        const copo=document.createElement("img");
        copo.src="img/copo.png";
        copo.className="copo";
        copo.style.left=Math.random()*100+"%";
        copo.style.top=(-Math.random()*100)+"vh";
        copo.style.width=(10+Math.random()*18)+"px";
        copo.style.animationDuration=(8+Math.random()*8)+"s";
        copo.style.animationDelay=(Math.random()*8)+"s";
        contenedor.appendChild(copo);
    }
}

function crearMedusas(){
    const contenedor=document.getElementById("medusas");
    for(let i=0;i<5;i++){
        const medusa=document.createElement("img");
        medusa.src=(i%2==0)
        ?"img/medusa1.png"
        :"img/medusa2.png";
        medusa.className="medusa";
        medusa.style.left=Math.random()*100+"%";
        medusa.style.top=Math.random()*90+"%";
        medusa.style.width=(70+Math.random()*60)+"px";
        medusa.style.animationDuration=(18+Math.random()*10)+"s";
        medusa.style.animationDelay=(Math.random()*8)+"s";
        contenedor.appendChild(medusa);
    }
}