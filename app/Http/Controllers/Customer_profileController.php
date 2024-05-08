<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use App\Models\Service;
use App\Models\ServiceOrder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreFieldRequest;
use App\Http\Requests\UpdateFieldRequest;
class Customer_profileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::id();
        $user = User::find($id);
        $usersss = DB::table('users')
                ->inRandomOrder()
                ->limit(5)
                ->where('role_id',2)
                ->get();
                $project = Project::where('user_id', $id)->latest()->first();
                $accountCreatedAt = $user->created_at;
                $currentDate = now();
                $years = $accountCreatedAt->diffInYears($currentDate);
                $accountCreatedAt->addYears($years);
                $days = $accountCreatedAt->diffInDays($currentDate);
                $allprojects = Project::where('user_id', $id)->count();
                $usageDuration = $years . " year" . ($years == 1 ? '' : 's') . " " . $days . " day" . ($days == 1 ? '' : 's');
                $mostServiceOrdersWorker = ServiceOrder::select('users.id', 'users.name', DB::raw('COUNT(service_orders.id) as order_count'))
        ->join('services', 'service_orders.services_id', '=', 'services.id')
        ->join('users', 'services.user_id', '=', 'users.id')
        ->where('service_orders.user_id', $id)
        ->groupBy('users.id', 'users.name')
        ->orderByDesc('order_count')
        ->first();

        return view('customer.CustomerHomePage',['user'=>$user, 'recommended'=>$usersss, 'project'=>$project, 'usageDuration'=>$usageDuration, 'allprojects'=>$allprojects, 'mostServiceOrdersWorker'=>$mostServiceOrdersWorker]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFieldRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */

}
