<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <style>
        #form {
            width: 50%;
            height: 70%;
            margin-top: 5% ;
            margin-left: 25%;
            padding: 2% 2% 2% 2%;
        }
    </style>
</head>

<body>
    <form action="/ajouterCommande" method="post">
    @csrf
    <div id="form" class=" border border-2 rounded" >
        <h4 style="text-align: center;">vous souhaitez commander : <br>{{$produit->nom}}</h4>
        <input type="text" hidden value="{{$produit->id}}" name="produit">
        <div class="mb-3">
            <label for="nom" class="h6">Votre nom</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="mb-3">
            <label for="email" class="h6">Votre email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="nom@exemple.com">
        </div>
        <div class="mb-3">
            <label for="tel" class="h6">Votre Tel</label>
            <input type="text" class="form-control" id="tel" name="tel">
        </div>
        <div class="mb-3">
            <label for="qte" class="h6">Quantité</label>
            <input type="number" class="form-control" id="qte" name="qte">
        </div>
        <button type="submit" class="btn btn-success">commander</button>

        <!-- <div class="mb-3">
           <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="pk_test_RLf74SAurjb5dJ7N13xHRUEB00XsiYtrsb" 
                    
                    data-name="EcoClean" data-description="payer" 
                    data-image="{{asset('img/logooo.png')}}"
                    data-locale="auto" 
                    data-currency="MAD">
                </script>
    
        </div> -->
        <input value="{{$produit->prix}}" id="price" name="price" hidden>

        <div class="mb-3">
           <h4 id ="totalPrice"></h4>
        </div>

    </div>
    <script src="{{asset('js/commande.js')}}"></script>
    </form>
    

</body>

</html>