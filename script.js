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

document.getElementById('confirm').addEventListener('click', ()=>{
    document.getElementById('module').setAttribute("style","display:flex");
    // console.log('j rentre')
    
})
document.getElementsByClassName('close_modal')[0].addEventListener('click',()=>{
    document.getElementById('module').setAttribute("style","display:none");
    // console.log('j rentre')
})