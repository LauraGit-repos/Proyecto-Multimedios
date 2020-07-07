document.addEventListener("DOMContentLoaded",function(){
    var cartElements="";
    var elements = Metro.session.getItem("cart", 0);
    var buttons = document.querySelectorAll("button[data-button]");
    for (let i = 0, len = buttons.length; i<len; i++) {
        var btn = buttons[i];       
        if (elements == 0){
            break;
        }
        var include = false;
        for (let index = 0; index < elements.length; index++) {
            const el = elements[index].id;
            if(btn.id==el){
                include = true;
                break;
            }
        }
        if(include){
            btn.innerHTML="Quitar";
            btn.onclick = Quitar;
        }
    }
    if(elements != 0){
        elements.forEach(function(el){
            cartElements += '<li>'+el.name+'</li>';
        });

        document.getElementById('my-cart').innerHTML = cartElements;
    }
});

function Quitar(evt){
    var id = evt.target.id;
    var elements = Metro.session.getItem("cart", 0);
    if(elements != 0){
        for (let i = 0, len = elements.length; i<len; i++) {
            const element = elements[i];
            if(element.id==id){
                elements.splice(i, 1);
                document.getElementById(id).innerHTML="Agregar";
                document.getElementById(id).onclick = AddAgain;
                Metro.session.setItem("cart", elements);
                loadCart(elements);
                break;
            }
        }
    }
    
}

function AnadirNuevo(evt){

}

function loadCart(TheElements){
    var cartElements='';
    TheElements.forEach(function(el){
        cartElements += '<li>'+el.name+'</li>';
    });
    document.getElementById('my-cart').innerHTML = cartElements;
}