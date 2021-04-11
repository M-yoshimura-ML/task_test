<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use Illuminate\Support\Facades\DB;
use App\Services\CheckFormData;
use App\Http\Requests\StoreContactForm;
class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = DB::table('contact_forms');

        if($search !== null){
            //全角スペースを半角に
            $search_split = mb_convert_kana($search, 's');
            //空白で区切る
            $search_split2 = preg_split('/[\s]+/', $search_split);
            //単語をループで回す
            foreach ($search_split2 as $value) {
                $query->where('your_name', 'like', '%'.$value.'%');
            }
        };

        // $contacts = DB::table('contact_forms')->select('id', 'your_name', 'title', 'created_at')->paginate(20);
        //dd($contacts);
        
        $query->select('id', 'your_name', 'title', 'created_at')->orderBy('id', 'asc')->orderBy('created_at', 'asc');;
        $contacts = $query->paginate(20);

        return view('contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *StoreContactForm   validation check
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactForm $request)
    {
        // $_POST[]
        $contact = new ContactForm;
        $contact->your_name = $request->input('your_name');
        $contact->title = $request->input('title');
        $contact->email = $request->input('email');
        $contact->url = $request->input('url');
        $contact->gender = $request->input('gender');
        $contact->age = $request->input('age');
        $contact->contact = $request->input('contact');
        $contact->save();
        //dd($your_name);

        return redirect('contact/index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $contact = ContactForm::find($id);
        $gender = CheckFormData::checkGender($contact);
        $age = CheckFormData::checkAge($contact);

        return view('contact.show', compact('contact', 'gender', 'age'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contact = ContactForm::find($id);
        if($contact->gender == 0){
            $gender = '男性';
        } else {
            $gender = '女性';
        }

        if($contact->age == 0){
            $age = '～19歳';
        } else if ($contact->age == 1){
            $age = '20歳～29歳';
        } else if ($contact->age == 2){
            $age = '30歳～39歳';
        } else if ($contact->age == 3){
            $age = '40歳～49歳';
        } else if ($contact->age == 4){
            $age = '50歳～59歳';
        } else {
            $age = '60歳～';
        }

        return view('contact.edit', compact('contact', 'gender', 'age'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $contact = ContactForm::find($id);
        $contact->your_name = $request->input('your_name');
        $contact->title = $request->input('title');
        $contact->email = $request->input('email');
        $contact->url = $request->input('url');
        $contact->gender = $request->input('gender');
        $contact->age = $request->input('age');
        $contact->contact = $request->input('contact');
        $contact->save();
        //dd($your_name);

        return redirect('contact/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = ContactForm::find($id);
        $contact->delete();


        return redirect('contact/index');


    }
}
