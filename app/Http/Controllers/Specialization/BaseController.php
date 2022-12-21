<?php

namespace App\Http\Controllers\Specialization;

use App\Http\Controllers\Controller;
use App\Services\Specialization\Service;

class BaseController extends Controller
{

    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
