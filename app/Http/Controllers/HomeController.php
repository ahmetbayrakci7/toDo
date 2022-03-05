<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Core;
use App\Models\Task;
use App\Models\Developer;
use App\Services\DeveloperServices;
use App\Services\TaskServices;

class HomeController extends Controller
{
    public function index(){
        TaskServices::addTasks();
        $developers = Developer::all();
        $datas["developerTasks"] = DeveloperServices::getPlan($developers->toArray());
        return view("home",$datas);
    }
}
