<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeadsSaveRequest;
use Illuminate\Http\Request;

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
        $this->lead->fill($request->all());
        $this->lead->save();

        return redirect()->route('leads.success');
    }

    public function success()
    {
        return view('success');
    }
}
