//Lo que esté dentro de esta función se ejecutará
//cuando la página este cargada completamente
window.addEventListener('DOMContentLoaded', async ()=>{
    const contenedor = document.querySelector(".container-fluid > .row");
    const molde = document.querySelector(".moldes > div");
    let res = await axios.get("api/personajes/get.php");
    personajes = res.data;
    personajes.forEach(p=>{
        //Todo el codigo que esté escrito aqui se hará por cada personaje
        //Cada uno de los personajes pasará por esta variable p
        let divPersonaje = molde.cloneNode(true);
        divPersonaje.querySelector('.card-title').innerText = p.nombre;
        divPersonaje.querySelector('.card-footer').innerText = p.raza;
        divPersonaje.querySelector('.card-body > img').src = `img/${p.imagen}`;
        contenedor.appendChild(divPersonaje);
    })
});