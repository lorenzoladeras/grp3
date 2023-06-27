
//tried connecting to the seller database but no luck in doing the logic
// for calling and changing the variables here.
window.onload = function() {
    localStorage.removeItem('totalue');
};

const product = 

[
  {
        id: 0,
        imageUrl: 'assets/images/products/ltd1.png',
        name: 'Limited Edition Bronya',
        price: 999,
    },
    {
        id: 1,
        imageUrl: 'assets/images/products/ltd2.png',
        name: 'Limited Edition Gepard',
        price: 999,
    },
    {
        id: 2,
        imageUrl: 'assets/images/products/trd1.png',
        name: 'Special Card March 7th',
        price: 580,
    },
    {
        id: 3,
        imageUrl: 'assets/images/products/trd2.png',
        name: 'The Great Hook',
        price: 199,
    },
];


const categories = [...new Set(product.map((item)=>
    {return item}))]
    let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>
{
    var {imageUrl, name, price} = item;
    return(
        `<div class='box'>
            <div class='img-box'>
                <img class='images' src= ${imageUrl}></img>
            </div>
            <div class ='bottom'>
            <p>${name}</p>
            <h2>$ ${price}.00</h2>`+
            "<button onclick='addtocart("+(i++)+")'>Add to Cart</button>"+ 
            `</div>
            </div>`
        )
}).join('')

var cart =[]

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}

function delElement(a){
    cart.splice(a,1);
    displaycart();
}

function displaycart(a){
    let j = 0, total=0;
    document.getElementById("count").innerHTML=cart.length;
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "$ "+0+".00";
    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((items) =>
        {
            var {imageUrl, name, price} = items;
            total=total+price;
            document.getElementById("total").innerHTML = "$ "+total+".00";
            localStorage.setItem("totalue", total);
            return(
                `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${imageUrl}>
                </div>
                <p style='font-size:12px; width:100px; '>${name}</h2>
                <p style='font-size:12px;' id="cost" name="cost" class="cost">$ ${price}.00</h2>`+
                "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
            );
        }).join('');
    }
}



