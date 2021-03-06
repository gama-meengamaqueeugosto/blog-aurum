<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeadsSaveRequest;
use Illuminate\Http\Request;
use App\Lead;
use Converter;

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
        $this->lead->ip = $this->getIp();
        $this->lead->save();

        // if ($request->card) 
        // {
        //     if ($request->card == 2) {
        //         $html = 'cards.two';
        //         $name =  'cartao-de-visita-advogado-moderno-m-2.pdf';
        //     }else{
        //         $html = 'cards.one';
        //         $name =  'cartao-de-visita-advogado-moderno-m-1.pdf';
        //     }

        //     Converter::make(view($html)->render())
        //         ->toPng()
        //         ->download('yahoo.png');
        // }
        
        if($request->ebook)
        {
            return response()->download(public_path('/ebooks/o-guia-pratico-do-advogado-moderno-ebook.pdf'));
        }

        if($request->pesquisa)
        {
            return view('final-pesquisa');
        }

        return view('newsletterSuccess');
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

    public function destroy($id)
    {
        $lead = $this->lead->findOrFail($id);

        $lead->destroy($id);

        return redirect()->route('site.leads.show')->with(['status' => 'Lead excluído']);
    }

    public function edit($id)
    {
        return view('leads.edit', ['lead' => $this->lead->findOrFail($id)]);
    }

    public function csv(){
        $leads = $this->lead->select('name as nome', 'email', 'ip', 'type as tipo', 'created_at as data_hora')->get();
        return view('dashboard.leads.csv', ['leads' => $leads]);
    }

    public function getIp()
    {
 
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
        {
     
            $ip = $_SERVER['HTTP_CLIENT_IP'];
     
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
     
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
     
        }
        else{
     
            $ip = $_SERVER['REMOTE_ADDR'];
     
        }
     
        return $ip;
     
    }
}
