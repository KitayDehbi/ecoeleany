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
    <form action="/ajouterReservation" method="post">
    @csrf
    <div id="form" class=" border border-2 rounded" >
        <h4 style="text-align: center;">vous souhaitez Reserver : <br>{{$service->nom}}</h4>
        <input type="text" hidden value="{{$service->id}}" name="service">
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
            <label for="tel" class="h6">Votre Tel</label>
            <textarea type="text" class="form-control" id="tel" name="adresse" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="qte" class="h6">Date</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="mb-3">
           <button type="submit" class="btn btn-success">reserver</button>
        </div>

    </div>
    </form>
</body>

</html>