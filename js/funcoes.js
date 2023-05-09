// ---------- BTN-VOLTAR ----------


// ---------- LIVROS ----------

function submenu(){
    setTimeout(SubmenuLivros, 400);
}

function SubmenuLivros(){
    $("#menu-principal").dropdown("toggle");
}

// ---------- SCROLL MAIN ----------
function fazerScroll(){
    if(pagina != "home"){
        document.getElementById("#main").scrollIntoView();
    }  
}