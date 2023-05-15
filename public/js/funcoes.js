// ---------- BTN-VER MAIS ----------

function verMais(){

    document.querySelector("#textoCompleto").classList.toggle("d-none");
    document.querySelector("#textoCurto").classList.toggle("d-none");
    document.querySelector("#btnvermais").classList.toggle("d-none");
    document.getElementById("btnvermenos").classList.toggle("d-none");

}

// ---------- REDES SOCIAIS ICONS ----------
function instaHover(img){
    img.src="./public/imgs/desktop/instagram2.svg";
}

function instaOut(img){
    img.src="./public/imgs/desktop/instagram1.svg";
}

function faceHover(img){
    img.src="./public/imgs/desktop/facebook2.svg";
}

function faceOut(img){
    img.src="./public/imgs/desktop/facebook1.svg";
}

function linkHover(img){
    img.src="./public/imgs/desktop/linkedin2.svg";
}

function linkOut(img){
    img.src="./public/imgs/desktop/linkedin1.svg";
}

// ---------- LIVROS ----------

function submenu(){
    setTimeout(SubmenuLivros, 400);
}

function SubmenuLivros(){
    $("#menu-principal").dropdown("toggle");
}

