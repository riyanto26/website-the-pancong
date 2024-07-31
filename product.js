let openShopping = document.querySelector('.shop');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', () => {
    body.classList.add('active');
});
closeShopping.addEventListener('click', () => {
    body.classList.remove('active');
});

let products = [
    { id: 1, name: 'Pancong Original', image: 'menu1pro.png', price: 10000 },
    { id: 2, name: 'Pancong Keju Aja', image: 'menu2pro.png', price: 12000 },
    { id: 3, name: 'Pancong Cokelat', image: 'menu3pro.png', price: 13000 },
    { id: 4, name: 'Pancong Kacang', image: 'menu4pro.png', price: 11000 },
    { id: 5, name: 'Pancong Susu', image: 'menu1pro.png', price: 12500 },
    { id: 6, name: 'Pancong Durian', image: 'menu2pro.png', price: 15000 },
    { id: 7, name: 'Pancong Kacang', image: 'menu4pro.png', price: 11000 },
    { id: 8, name: 'Pancong Susu', image: 'menu1pro.png', price: 12500 },
    { id: 9, name: 'Pancong Durian', image: 'menu2pro.png', price: 15000 }
];

let listCards = [];

function initApp() {
    products.forEach((value, key) => {
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="images/${value.image}" alt="${value.name}">
            <div class="title">${value.name}</div>
            <div class="price">Rp ${value.price.toLocaleString()}</div>
            <button onclick="addToCart(${key})">Tambahkan ke Keranjang</button>`;
        list.appendChild(newDiv);
    });
}
initApp();

function addToCart(key) {
    if (listCards[key] == null) {
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCart();
}

function reloadCart() {
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key) => {
        if (value != null) {
            totalPrice += value.price * value.quantity;
            count += value.quantity;
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="images/${value.image}" alt="${value.name}"/></div>
                <div>${value.name}</div>
                <div>Rp ${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
            listCard.appendChild(newDiv);
        }
    });
    total.innerText = `Rp ${totalPrice.toLocaleString()}`;
    quantity.innerText = count;
}

        total.addEventListener('click', () => {
            if (listCards.length > 0) {
            window.location.href = "payment.html";
            
            } else {
            window.location.href = "cart.html";
            }
        });

        closeShopping.addEventListener('click', () => {
            if (listCards.length > 0) {
              window.location.href = "cart.html";
            } else {
              window.location.href = "cart.html";
            }
          });

function changeQuantity(key, quantity) {
    if (quantity == 0) {
        delete listCards[key];
    } else {
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCart();
}
