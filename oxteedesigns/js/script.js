//define Product

let productDom = document.querySelector(".product-container");
let shopingCartIcon = document.querySelector(".shopingCart");
let cartProduct = document.querySelector("#carts-product div");
let addcart = document.querySelectorAll('.addcart')
let badgeDom = document.querySelector(".badge")

let product = [
{
    id: 1,
    title: 'second grade squad shirt',
    imageUrl: 'image/product1.jpg',
    btn:  'buy-1'
},
{
    id: 2,
    title: 'fourth grade flock shirt',
    imageUrl: 'image/product2.jpg',
    btn:  'buy-2'
},
{
    id: 3,
    title:'Teach like a pineapple shirt',
    imageUrl: 'image/product3.jpg',
    btn:  'buy-3'
}
]
let i = 1
addcart.forEach((cart) => {
    cart.addEventListener('click' , () => {
        let badge = document.querySelector('.badge')
        badge.classList.add('badgeshow')
        badge.innerHTML = i++;
    })

} )

// let addItem = []
// function addToCart(id){
//     let cartProud = document.querySelectorAll("#carts-product div p");
//     let chosenItem = product.find((item) => item.id === id);
//     cartProduct.innerHTML += `<p>${chosenItem.title}</p>`;

//     addItem = [...addItem , chosenItem];
//     localStorage.getItem('productInCart', JSON.stringify(addItem));

//     badgeDom.style.display="block";
//     badgeDom.innerHTML = cartProud.length + 1;
// }
// console.log('hello')
