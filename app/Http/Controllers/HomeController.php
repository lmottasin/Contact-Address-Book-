<?php

namespace App\Http\Controllers;


use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        return redirect()->route('contact.index');
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $all_data = Contact::where('user_id',Auth::user()->id)->get();
        $total_user_count = $all_data->count();

        $data = $all_data->keyBy('country');
        $country_count = $data->unique('country')->count();
//        return $country_count;

        $data = $all_data->keyBy('city');
        $city_count = $data->unique('city')->count();

        $data = $all_data->keyBy('state');
        $state_count = $data->unique('state')->count();


        return view('home',[
            'total' => $total_user_count,
            'country' => $country_count,
            'city'=>$city_count,
            'state'=>$state_count,
        ]);
    }
}
