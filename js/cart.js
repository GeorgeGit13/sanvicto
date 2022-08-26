function countCart(){
    var cart = JSON.parse(localStorage.getItem('cart'));

    if (cart == null) {
        cart = [];
    }

    var count = 0;

    for (var i = 0; i < cart.length; i++) {
        count++;
    }

    document.getElementById("count-cart").innerHTML = count;  
}
countCart();
function addToCart(id, name, price) {

    var cart = JSON.parse(localStorage.getItem('cart'));

    if (cart == null) {
        cart = [];
    }

    var product = {
        id: id,
        name: name,
        price: price
    };

    cart.push(product);

    localStorage.setItem('cart', JSON.stringify(cart));

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      }) 

     Toast.fire({
        icon: 'success',
        title: `${name} agregado al carrito`
    }) 

    countCart(); 

    totalPriceOfProductsInLocalStorage();
}
function removeToCart(id) {

    var cart = JSON.parse(localStorage.getItem('cart'));

    if (cart == null) {
        cart = [];
    }

    for (var i = 0; i < cart.length; i++) {
        if (cart[i].id == id) {
            cart.splice(i, 1);
            break;
        }
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      }) 
      
    Toast.fire({
        icon: 'info',
        title: `Producto eliminado del carrito`
    }) 

    countCart();

    totalPriceOfProductsInLocalStorage();
}

function totalPriceOfProductsInLocalStorage(){
    
    var cart = JSON.parse(localStorage.getItem('cart'));

    if (cart == null) {
        cart = [];
    }
    
    var newArr = cart.map(function(item){
        return Number(item.price);
    });

    var total = newArr.reduce(function(a, b){
        return a + b;
    }, 0);

    document.getElementById("total-cart").innerHTML = new Intl.NumberFormat().format(total);  

}
totalPriceOfProductsInLocalStorage();

var cart = JSON.parse(localStorage.getItem('cart'));
      
const groupByCategory = cart.reduce((group, product) => {
const { name } = product;
group[name] = group[name] ?? [];
group[name].push(product);
return group;
}, {});

const products = Object.entries(groupByCategory).map(([name, products]) => ({
name,
quantity: products.length,
total: products.reduce((total, product) => total + Number(product.price), 0),
}));

const ticket = document.getElementById('ticket');

if(ticket){
ticket.innerHTML = "";

for (let product of products) {
const { name, quantity, total } = product;
const element = document.createElement('li');
element.innerHTML = `
<strong>${quantity}</strong> ${name} <span>$${new Intl.NumberFormat().format(total)}</span>
`;
ticket
.appendChild(element);
}   

const ticketTotal = document.getElementById('ticket-total');
ticketTotal.innerHTML = `$${new Intl.NumberFormat().format(products.reduce((total, product) => total + Number(product.total), 0))}`;
}
