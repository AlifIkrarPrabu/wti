<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function dataCentre()
    {
        return view('services.data-centre');
    }

    public function enterpriseNetwork()
    {
        return view('services.enterprise-network');
    }

    public function enterpriseSecurity()
    {
        return view('services.enterprise-security');
    }

    public function profesionalService()
    {
        return view('services.profesional-service');
    }

    public function iot()
    {
        return view('services.internet-of-things');
    }

    public function wasteDisposal()
    {
        return view('services.waste-disposal');
    }
}
