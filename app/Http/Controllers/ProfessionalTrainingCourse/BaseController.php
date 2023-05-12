<?php

namespace App\Http\Controllers\ProfessionalTrainingCourse;

use App\Http\Controllers\Controller;
use App\Services\ProfessionalTrainingCourse\Service;

class BaseController extends Controller
{

    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
