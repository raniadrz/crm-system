<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Organization;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Get counts for different task statuses
        $openCount = Task::where('status_id', 1)->count();
        $inProgressCount = Task::where('status_id', 2)->count();
        $closedCount = Task::where('status_id', 3)->count();

        //Get counts for different Projects statuses
        $openCount2 = Project::where('status_id', 1)->count();
        $inProgressCount2 = Project::where('status_id', 2)->count();
        $closedCount2 = Project::where('status_id', 3)->count();

        return view('control-panel.dashboard.index', [
            'statistics' => [
                'Users' => User::count(),
                'Clients' => Client::count(),
                'Organizations' => Organization::count(),
                'Projects' => Project::count(),
                'Tasks' => Task::count(),
            ],
            //tasks statistics
            'statistics2' => [
                'Open Tasks' => $openCount,
                'In Progress Tasks' => $inProgressCount,
                'Closed Tasks' => $closedCount,
            ],
            //projects statistics
            'statistics3' => [
                'Open Projects' => $openCount2,
                'In Progress Projects' => $inProgressCount2,
                'Closed Projects' => $closedCount2,
            ],

        ]);
    }
}
