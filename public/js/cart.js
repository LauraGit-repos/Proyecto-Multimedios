var template = 
`
<div  class="grid ml-auto mr-auto mw-100-sm mw-100 mw-75-md mw-50-lg mw-50-xl mw-50-xxl pl-10-md pr-10-md pr-15-xl pl-15-xl">
        <% if(this.products==0) { %>
            <h4 class="text-center">No añadió productos al carrito</h4>
        <% } else { %>
            <% for(var i = 0; i < this.products.length; i++) { %>
                <div class="row flex-align-center flex-justify-center mb-9" >
                    <div class="cell-md-6 cell-12 mb-2 mb-0-md">
                        <img src="<% this.products[i].photo %>" alt="---" class="mw-100 w-100">
                    </div>
                    <div class="cell-md-6 cell-12">
                        <div class="row flex-align-center">
                            <div class="cell">Producto:</div>
                            <div class="cell"><% this.products[i].name %></div>
                        </div>
                        <div class="row">
                            <div class="cell">Precio:</div>
                            <div class="cell">$<% this.products[i].price %></div>
                        </div>
                        <div class="row">
                            <div class="cell">Cantidad:</div>
                            <div class="cell">
                                <input type="number" oninput="changeTotal()" class="w-100" name="amount" min="1" value="1">
                            </div>
                        </div>
                    </div>
                </div>
            <% } %>
            <br>
            <p class="text-center">Total a pagar: $<span id="purchase-total"><% this.total %></span> </p>
        <% } %>   
    </div>
`;
var p= Metro.session.getItem("cart", 0);

var result = Metro.template(template,{
    products: p,
    total: p.reduce(function(a, b){ return parseFloat(a.price) + parseFloat(b.price);})
});

$("#cart-body").html(result);

function calculateTotal(){
    var prod= Metro.session.getItem("cart", 0);
    var total = 0;
    if(prod==0){
        return total;
    }
    var amounts = document.getElementsByName('amount');
    for (let i = 0, len = amounts.length; i<len; i++) {
        const amount =  parseInt(amounts[i].value);
        const price = parseFloat(prod[i].price);
        total += amount * price;
    }

    return total;
}

function changeTotal(){
    $('#purchase-total').html(""+calculateTotal());
}
