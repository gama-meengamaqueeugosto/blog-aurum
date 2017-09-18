<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeadsSaveRequest;
use Illuminate\Http\Request;

class LeadsController extends Controller
{
    public function __construct(Lead $lead)
    {
        $this->lead = $lead;
    }

    public function store(LeadsSaveRequest $request)
    {
        $this->lead->fill($request->all());
        $this->lead->save();

        return redirect()->route('leads.success');
    }
}
