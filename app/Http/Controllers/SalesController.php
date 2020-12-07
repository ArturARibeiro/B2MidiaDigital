<?php

namespace App\Http\Controllers;
use App\Models\Sales;
use App\Models\Address;
use App\Models\Product;
use App\Models\Provider;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    //Redirecionamento

    public function View(Sales $sale, Product $products){
        $sales = Sales::paginate(5);
        $products = Product::all();
        return view('layouts\sales', ['sales' => $sales, 'products' => $products]);
    }

    public function addSale(Request $requests, Address $address, Sales $sales, Provider $providers, Product $products){

        // Verificação de informalidade no envio de informalções
        if(isset($requests->CEP) || isset($requests->street) || isset($requests->neighborhood) || isset($requests->number) ||
         isset($requests->city) || isset($requests->UF) || isset($requests->name0) || isset($requests->price0) || isset($requests->qtde0)){

            $name = "";

            for($i = 0; $i < 10; $i++){
                if($requests->get('name'.$i) != ""){
                    $name = $name.$requests->get('name'.$i)." / R$ ". $requests->get('price'.$i)." / Quantidade: ". $requests->get('qtde'.$i)."  ||  ";
                }
                else{
                    break;
                }
            }

            $sales = new Sales(); 
            $sales->name = $name;
            $sales->provider = "";
            $sales->amount = $requests->get('amount');
            $sales->save();

            $id = Sales::count('id');

            $address = new Address();
            $address->sale_id = $id;
            $address->provider_id = 0;  
            $address->street = $requests->street;
            $address->neighborhood = $requests->neighborhood;
            $address->city = $requests->city;
            $address->number = $requests->number;
            $address->UF = $requests->UF;
            $address->CEP = $requests->CEP;
            $address->save();

            

            $sales = Sales::paginate(5);
            $products = Product::all();
            return view('layouts\sales', ['sales' => $sales, 'products' => $products]);
                        
            }else{
                $sales = Sales::paginate(5);
                $products = Product::all();
                return view('layouts\sales', ['sales' => $sales, 'products' => $products]);
            }

            echo "Valor Final: ".$requests->get('amount');
                        
    }
}
