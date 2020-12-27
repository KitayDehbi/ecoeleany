var totalPrice = document.getElementById("totalPrice");
var qte = document.getElementById("qte");
var price = document.getElementById("price");

qte.addEventListener('input', (event) => {
  var temp =qte.value*price.value;
console.log(temp);
  if(temp > 350){
    totalPrice.textContent= temp +"DH  + Livraison gratuite";
  }
  else{
    totalPrice.textContent= temp +"DH  + 19 DH pour la livraison ";
  }
  });