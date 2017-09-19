<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeadsSaveRequest;
use Illuminate\Http\Request;
use App\Lead;

class LeadController extends Controller
{
    public function __construct(Lead $lead)
    {
        $this->lead = $lead;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function store(LeadsSaveRequest $request)
    {
        if($request->has('name'))
        {
            $words = explode(' ', $request->name);


            if(count($words) < 2)
            {
                return redirect()->back()->withInput()->with(['error'=>['name' => 'É necessário o nome completo']]);
            }
        }
        $this->lead->fill($request->all());
        $this->lead->ip = $request->ip();
        $this->lead->save();

        if($request->ebook)
        {
            return response()->download(public_path('/ebooks/o-guia-pratico-do-advogado-moderno-ebook.pdf'));
        }

        return redirect()->route('leads.success');
    }

    public function success()
    {
        return view('success');
    }

    public function show()
    {
        return view('dashboard.leads',[
            'leads' => $this->lead->orderBy('name')->paginate(),
        ]);
    }
}
