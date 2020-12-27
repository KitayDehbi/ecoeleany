<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;

class HomeController extends Controller
{
    public function index(){
        $services = Service::all();
        $produits =Produit::all();
        
        return view ("home", [
            'services' =>$services,
            'produits'=>$produits
        ]);
    }
    public function reservationForm($id){
        $services = Service::findOrfail($id);
       
        
        return view ("reservation", [
            'service' =>$services,
           
        ]);
    }
    public function CommandForm($id){
        $produit = Produit::findOrfail($id);
        
        return view ("commande", [
            'produit'=>$produit
        ]);
    }

    public function ajouterCommande(Request $request){
        $prix= $request->qte * $request->price;;
        if ($prix < 120){
            $prix = $prix +19;
        }

        $id = DB::table('commandes')->insertGetId(
            ['produit_id' => $request->produit,
            'email' => $request->email ,
            'nom' => $request->nom ,
            'tel' => $request->tel ,
            'prix' => $prix ,
            'quantite' => $request->qte ,
            'created_at'=> date("Y/m/d"),
            ]
        );
        return redirect('/');
    }
    public function ajouterReservation(Request $request){
        $id = DB::table('reservations')->insertGetId(
            ['service_id' => $request->service,
            'email' => $request->email ,
            'nom' => $request->nom ,
            'tel' => $request->tel ,
            'date'=> $request->date,
            'adresse' => $request->adresse
            ]
        );
        return redirect('/');
    }
}
