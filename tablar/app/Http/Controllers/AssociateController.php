<?php

namespace App\Http\Controllers;

use App\Models\Associate;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class AssociateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $associates = Associate::orderBy('id', 'desc')->paginate(10);
        return view('associate/index', compact('associates')); 
    }
    public function create(){
        return view('associate/modal-create');
    }

    public function store(Request $request){
        $associate = new Associate();

        $associate->id_type = $request->id_type;
        $associate->id_number = $request->id_number;
        $associate->first_name = $request->first_name;
        $associate->other_names = $request->other_names;
        $associate->first_lastname = $request->first_lastname;
        $associate->other_lastnames = $request->other_lastnames;
        $associate->gender = $request->gender;
        $associate->status = 'Activo';
        
        $associate->save();
        
        return redirect()->route('asociados.show', $associate);
        // return redirect()->route('asociados.index');
    }

    public function show($id){
        $associate = Associate::find($id);
        return view('associate.modal-edit', compact('associate'));
    }
    public function edit(Associate $associate){
        $associate = Associate::find($associate);
        return view('associate.modal-edit', compact('associate'));
    }
}
