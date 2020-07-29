<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;


class SearchController extends Controller
{
    public function index(){
        return view('search');  
    }


    public function search(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $shops = DB::table('shop_translations')->where('name', 'LIKE', '%'.$request->search.'%')
                                                   ->orWhere('address','LIKE','%'.$request->search.'%')->get();
                                                   
          if($shops)
          {
              foreach($shops as $key => $shop)
              {
                  $output.='<tr>'.
                         '<td>'.$shop->id.'</td>'.
                         '<td>'.$shop->name.'</td>'.
                         '<td>'.$shop->locale.'</td>'.
                         '<td>'.$shop->address.'</td>'.
                          '</tr>';
              }
              return Response($output);
              

          }

        }

    }


}
