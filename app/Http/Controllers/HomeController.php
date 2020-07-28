<?php

namespace App\Http\Controllers;

use App\Country;
use App\Product;
use App\ProductModel;
use App\RepairTerm;
use App\ServiceCenter;
use App\Settings;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function redirectToHome( ) {

       return view('home');

    }

    public function entry(){
        return view('global');
    }

    public function sitemap(){
        return response()->view('sitemap')
            ->header('Content-Type', 'xml');
    }

    public function getHome(){
		$country = 'in';
        $supported_countries = array_keys( config('constants.countries') );

        if (in_array($country, $supported_countries)) {
            return view('home');
        } else {

            // unset country
            session(['country' => null]);
            return redirect()->to('/');
        }


    }

    public function getTerms( ){

        $locale = app()->getLocale();

        if ( $locale == 'id' ) {
            $view_name = 'pages.terms_and_conditions_id';
        } elseif ( $locale == 'th')  {
            $view_name = 'pages.terms_and_conditions_thai';
        } else {
            $view_name = 'pages.terms_and_conditions';
        }

        return view($view_name);
    }

    public function getAboutUs( ) {
        return view('pages.about_us');
    }


/*
    public function getSupportSearch(Request $request)
      {
        if($request->ajax())
        {
         $output = '';
         $query = $request->get('query');
         if($query != '')
         {
          $data = DB::table('service_center_translations')
            ->where('name', 'like', '%'.$query.'%')
            ->orWhere('address', 'like', '%'.$query.'%')
            ->orWhere('city', 'like', '%'.$query.'%')
            ->orWhere('postal_code', 'like', '%'.$query.'%')
            ->orderBy('service_center_id', 'desc')
            ->get();
            
         }
         else
         {
          $data = DB::table('service_center_translations')
            ->orderBy('service_center_id', 'desc')
            ->get();
         }
         $total_row = $data->count();
         if($total_row > 0)
         {
          foreach($data as $row)
          {
           $output .= '
           <tr>
            <td>'.$row->name.'</td>
            <td>'.$row->address.'</td>
            <td>'.$row->city.'</td>
            <td>'.$row->postal_code.'</td>
          </tr>
           ';
          }
         }
         else
         {
          $output = '
          <tr>
           <td align="center" colspan="5">No Data Found</td>
          </tr>
          ';
         }
         $data = array(
          'table_data'  => $output,
          'total_data'  => $total_row
         );
   
         echo json_encode($data);
        }
       }

       public function getSupport( ){

        $productModels = ProductModel::all();

        $country = 'in';
        $serviceCenters = ServiceCenter::whereCountry($country)->get();

        return view('pages.support-new', compact('productModels', 'serviceCenters'));
    }
*/
    public function getSupport( ){

        $productModels = ProductModel::all();

        $country = 'in';
        $serviceCenters = ServiceCenter::whereCountry($country)->get();

        return view('pages.support', compact('productModels', 'serviceCenters'));
    }

    public function handleSupportRedirect(Request $request) {
        $this->validate($request, [
            'product_number'   => 'required',
            'product_model'  => 'required',
            'type'             => 'required',
            'series'           => 'required',
            'marketing_number' => 'required',
        ]);

        $product_model = $request->get('product_model');

        $product_number = $request->get('product_number');
        $product_type = $request->get('type');
        $product_series = $request->get('series');

        // Finding the short code

        $short_code = 'liber';

        $params = ['slug'   => $short_code,
                   'model'  => $product_model,
                   'pn'     => $product_number,
                   'type'   => $product_type,
                   'series' => $product_series,
                   'marketing_number' => $request->get('marketing_number')];

        return redirect()->route('product.support', $params);
    }

    public function getSearch_result( ){
        return view('pages.search_result');
    }

    public function showCountrySelections( ){
        return view('pages.global');
    }

    public function getContactUs( ){

        // Determine which contact_us page by region

        $country_code = session('country', 'hk');

        $view_name = 'pages.contact-us-'.$country_code;

        if ( !\View::exists($view_name) ) {
            $view_name = 'pages.contact-us';
        }

        return view( $view_name );

    }

    public function getPromotionVanillaAir( ) {
        return view('pages.promotion_vanilla_air');
    }

    public function getRepairTerms( ){

     $title = __('site.footer-repair-tnc');
	            return view('pages.repair-tnc', ['title' => $title]);


    }

    public function getImago(Request $request) {
        return view('product.imago');
    }

    public function getImagoSpec(Request $request){
        return view('product.imago_spec');
    }

    public function getModus() {
        return view('product.modus');
    }
}
