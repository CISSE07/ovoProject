// script au click du buton hamburger
document.getElementById("check").addEventListener("click", function(evt){
    if (evt.currentTarget.dataset.valeur=='change') {
        // console.log('j rentre')
        document.getElementById('nav').setAttribute("style","display:flex");
        document.getElementById('btnHead').setAttribute("style","display:flex");
        evt.currentTarget.dataset.valeur="reset";     
    }else{
        document.getElementById('nav').setAttribute("style","display:none");
        document.getElementById('btnHead').setAttribute("style","display:none");
        evt.currentTarget.dataset.valeur="change";     
    }
});