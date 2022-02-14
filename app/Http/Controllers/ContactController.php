<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ContactController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['all_contacts'] = Contact::where('user_id',Auth::user()->id)->get();

        return view('contact.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request;
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required','email',
                Rule::unique('contacts')->where(function ($query) {
                    return $query->where('user_id', Auth::user()->id);
                })
            ],
            'phone' => ['required','numeric',
                Rule::unique('contacts')->where(function ($query) {
                    return $query->where('user_id', Auth::user()->id);
                })],
            'telephone' => 'numeric',
            'gender' => 'required',
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
            'address' => 'required',
        ]);

        //store data
        Contact::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'telephone' => $request->telephone,
            'gender' => $request->gender,
            'country' => $request->country,
            'city' => $request->city,
            'state' => $request->state,
            'address' => $request->address,
            'user_id' => Auth::user()->id,
        ]);
        $notification = array(
            'message' => 'Contacted Created Successfully!',
            'alert-type' => 'success'
        );


        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
//        return $contact;
        return view('contact.show',[
            'single_data'=>$contact
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('contact.edit',[
            'single_data'=> $contact
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
//        return $request;
        $email_validation =[];
        if($contact->email == $request->email){
            $email_validation[]= 'required';
        }
        else{
            $email_validation= ['required','email',
                Rule::unique('contacts')->where(function ($query) {
                    return $query->where('user_id', Auth::user()->id);
                })
            ];
        }

        //phone validation
        $phone_validation =[];
        if($contact->phone == $request->phone){
            $phone_validation[]= 'required';
        }
        else{
            $phone_validation =  ['required','numeric',
                Rule::unique('contacts')->where(function ($query) {
                    return $query->where('user_id', Auth::user()->id);
                })];
        }

        //return $email_validation;
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => $email_validation,
            'phone' =>$phone_validation,
            'telephone' => 'numeric',
            'gender' => 'required',
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
            'address' => 'required',
        ]);

        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->telephone = $request->telephone;
        $contact->gender = $request->gender;
        $contact->country = $request->country;
        $contact->city = $request->city;
        $contact->state = $request->state;
        $contact->address = $request->address;

        $contact->update();

        $notification = array(
            'message' => 'Updated Successfully!',
            'alert-type' => 'success'
        );


        return redirect()->back()->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        $notification = array(
            'message' => 'Contacted Deleted!',
            'alert-type' => 'warning'
        );


        return redirect()->back()->with($notification);
    }

    /**
     * @param $type
     */
    public function dropDownItem($type){

            $data = Contact::where('user_id',Auth::user()->id)->get();
//            return $data;
            $data = $data->keyBy($type);

            $array = [];
            foreach ( $data as  $key=>$value){
                $array[]= $key;
            }
            return $array;

    }
    public function filterIndex(Request $request){
        //return $request;
        $data['all_contacts'] = Contact::where('user_id',Auth::user()->id)->where($request->type,$request->drop_down_list)->get();

        return view('contact.index', $data);
    }
}
