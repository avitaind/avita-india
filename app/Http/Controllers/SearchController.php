<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NewServiceCenter;
use App\ProductModel;

use DB;


class SearchController extends Controller
{
    public function index(){

        $searchResults = NewServiceCenter::all();
        $productModels = ProductModel::all();
        return view('search', compact('searchResults','productModels'));
       
    }


    public function search(Request $request)
    { 
       
        if($request->ajax())
        {
            $output="";
            $shops = DB::table('new_service_centers')->where('address', 'LIKE', '%'.$request->search.'%')
                                                   ->orWhere('city','LIKE','%'.$request->search.'%')
                                                   ->orWhere('state','LIKE','%'.$request->search.'%')
                                                   ->orWhere('pin','LIKE','%'.$request->search.'%')->get();
                                                   
                  if($shops)
                      {
                foreach($shops as $key => $shop)
                {
                    $output.='<div class="col-md-6">
                         <div>
                        <i class="fa fa-map icon"></i>'
                        .$shop->address.
                    '</div>
                    <div>
                        <i class="fa fa-clock-o icon"></i>'
                        .$shop->opening_hour.
                    '</div>
                    <div>
                        <i class="fa fa-phone icon"></i>'
                        .$shop->phone.
                    '</div>
                    
             </div>';
                            
                                        
                   }
                return Response($output);
                                         
          }
   
        }
    }


}
