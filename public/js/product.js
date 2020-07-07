function FileInit(){
    $(".drop-zone > .caption").html("<strong>Selecciona una imagen</strong> o suéltala acá");
    $(".drop-zone > .files").html("Ninguna imagen seleccionada");
}

function FileEditInit(){
    var imageUrl = document.getElementById('image-url').value;
    document.querySelector(".my-img").style.backgroundImage ="url("+imageUrl+")";
    document.querySelector('.drop-zone').style.opacity = "0";
}

function FileSelect(files, element){
    var file = files[0];
    var drop = document.querySelector(".my-img");
    var reader  = new FileReader();
    reader.onloadend = function () {
        drop.style.backgroundImage = "url("+reader.result+")";
        document.querySelector('.drop-zone').style.opacity = "0";
    }
    if (file) {
        reader.readAsDataURL(file);
    } else {
        drop.style.backgroundImage = "none";
        document.querySelector('.drop-zone').style.opacity = "1";
    }
}

function Eliminar(){
    var confirmacion = confirm("¿Realmente desea eliminar este registro?");
    if(confirmacion)
        document.getElementById('delete-form').submit();
}

function AddToCart(id){
    var elements = Metro.session.getItem("cart", 0);
    var include = false;
    if (elements == 0){
        elements = [];
        var boton = document.getElementById(id);
        boton.innerHTML = "Quitar";
        boton.onclick= Remove;
        elements.push({
            id:id,
            name:boton.dataset.name,
            price:boton.dataset.price,
            photo:boton.dataset.photo
        });
        Metro.session.setItem("cart", elements);
        cargarCarrito(elements);
    }else{
        for (let index = 0; index < elements.length; index++) {
            const el = elements[index].id;
            if(id==el){
                include = true;
                break;
            }
        }
        if(include)
            console.log('Ya se agregó al carrito');
        else{
            
            var boton = document.getElementById(id);
            boton.innerHTML = "Quitar";
            boton.onclick= Remove;
            elements.push({
                id:id,
                name:boton.dataset.name,
                price:boton.dataset.price,
                photo:boton.dataset.photo
            });
            Metro.session.setItem("cart", elements);
            cargarCarrito(elements);
        }
    }
}

function AddAgain(evt){
    var id = evt.target.id;
    AddToCart(id);
}

function Remove(evt){
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
                cargarCarrito(elements);
                break;
            }
        }
    }
}

function cargarCarrito(TheElements){
    var cartElements='';
    TheElements.forEach(function(el){
        cartElements += '<li>'+el.name+'</li>';
    });
    document.getElementById('my-cart').innerHTML = cartElements;
}
