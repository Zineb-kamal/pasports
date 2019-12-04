<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Pasport;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\SendtoMail;
class PasportController extends Controller
{
 public function _construct(){
    $this->middleware('auth');
 }
 public function store(Request $rq)
    {  
         $this->validate($rq,[
            'nom'=>'required|alpha',
            'prenom'=>'required|alpha',
            'Num'=>'required|min:5',
        'email'=>'required|email'
        ]);
     	$ps=new Pasport();
    	$ps->nom=$rq->input('nom');
    	$ps->prenom=$rq->input('prenom');
    	$ps->Num_Pasport=$rq->input('Num');
    	$ps->email=$rq->input('email');
    	$ps->save();
        return redirect('index')->with('success','le pasport a été bien enregister');
    }

public function index()
{
    $ps=Pasport::all();
    return view('pasport.index',['ps'=>$ps]);
}
public function send(Request $rq)
{
    $this->validate($rq,[
        'email'=>'required|email',
        'body'=>'required']);
        $email=$rq->input('email');
        $body=$rq->input('body');
    Mail::to('zinebkamal073@gmail.com')->send(new SendMail($email,$body));
        return redirect("/email")->with('success','message a été envoyer');
}
public function sendTo(Request $rq)
{
    $ps=Pasport::all();
    $this->validate($rq,[
        'img'=>'image|mimes:jpeg,png,jpg,gif|max:2048',
        'body'=>'required']);
    $Subject=$rq->input('subject');
    $body=$rq->input('body');
     $img=$rq->file('img');
    if(isset( $img)){
    $img->store('image');
}
    foreach ($ps as $p) {
        Mail::to($p->email)->send(new SendtoMail($Subject,$body,$img));
    }
    
        return redirect("/emailTo")->with('success',' message a été envoyer');
}
public function edit($id)
{
    $ps=Pasport::find($id);
    return view('pasport.edit',['p'=>$ps]);
}
public function update($id,Request $rq)
{
    $this->validate($rq,[
            'nom'=>'required|alpha',
            'prenom'=>'required|alpha',
            'Num'=>'required|min:5',
        'email'=>'required|email'
        ]);
    $ps=Pasport::find($id);
    $ps->nom=$rq->input('nom');
    $ps->prenom=$rq->input('prenom');
    $ps->Num_Pasport=$rq->input('Num');
    $ps->email=$rq->input('email');
    $ps->save();
    return redirect('index')->with('success','Pasport à été bien  Modifier');
}
public function destory($id)
{
   $p= Pasport::find($id);
   $p->delete();
   return redirect('index')->with('success','la suppression avec succée');
}
/*public function action(Request $req)
{
   if($req->ajax()) 
   {
    $data=Pasport::search($req->get('full_text_search_query'))->get();
    return response()->json($data);
   }
}*/
public function search(Request $req){
    $ps=Pasport::where('Num_Pasport',$req->input('full-text-search'))->get();
    return view('pasport.index',['ps'=>$ps]);
}
}
