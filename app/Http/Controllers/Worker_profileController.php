<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Review;
use App\Models\Project;
use App\Models\Service;
use App\Models\ServiceOrder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreFieldRequest;
use App\Http\Requests\UpdateFieldRequest;

class Worker_profileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::id();

        $user = User::find($id);
        $mostPreferredService = ServiceOrder::select('services.id', 'services.title', DB::raw('COUNT(service_orders.id) as order_count'))
        ->join('services', 'service_orders.services_id', '=', 'services.id')
        ->where('services.user_id', $id)
        ->groupBy('services.id', 'services.title')
        ->orderByDesc('order_count')
        ->first();
        $accountCreatedAt = $user->created_at;
                $currentDate = now();
                $years = $accountCreatedAt->diffInYears($currentDate);
                $accountCreatedAt->addYears($years);
                $days = $accountCreatedAt->diffInDays($currentDate);
                $usageDuration = $years . " year" . ($years == 1 ? '' : 's') . " " . $days . " day" . ($days == 1 ? '' : 's');
                $services = Service::where('user_id', $id)->pluck('id');


    $reviews = Review::whereIn('ServiceOrder_id', function ($query) use ($services) {
        $query->select('id')
            ->from('service_orders')
            ->whereIn('services_id', $services);
    })->get();

    // Calculate the average rating
    $totalRating = $reviews->sum('rating');
    $averageRating = $reviews->isEmpty() ? 0 : $totalRating / $reviews->count();
    $service = Service::where('user_id',$id)->get();
        return view('worker.WorkerHomePage', ['user'=>$user, 'mostprefferedservice'=>$mostPreferredService, 'experienceapp'=>$usageDuration, 'averagerating'=>$averageRating, 'countrating'=> $reviews->count(), 'allservice'=>$service]);

    }

    public function clicked($id)
    {

        $user = User::find($id);
        $mostPreferredService = ServiceOrder::select('services.id', 'services.title', DB::raw('COUNT(service_orders.id) as order_count'))
        ->join('services', 'service_orders.services_id', '=', 'services.id')
        ->where('services.user_id', $id)
        ->groupBy('services.id', 'services.title')
        ->orderByDesc('order_count')
        ->first();
        if ($user->created_at) {
            $accountCreatedAt = $user->created_at;
            $currentDate = now();
            $years = $accountCreatedAt->diffInYears($currentDate);
            $accountCreatedAt->addYears($years);
            $days = $accountCreatedAt->diffInDays($currentDate);
            $usageDuration = $years . " year" . ($years == 1 ? '' : 's') . " " . $days . " day" . ($days == 1 ? '' : 's');
        } else {
            $usageDuration = 'N/A'; // Or any other default value
        }
                $services = Service::where('user_id', $id)->pluck('id');


    $reviews = Review::whereIn('ServiceOrder_id', function ($query) use ($services) {
        $query->select('id')
            ->from('service_orders')
            ->whereIn('services_id', $services);
    })->get();
    $totalRating = $reviews->sum('rating');
    $averageRating = $reviews->isEmpty() ? 0 : $totalRating / $reviews->count();
    $service = Project::where('user_id',$id)->get();
        return view('worker.WorkerProfile', ['user'=>$user, 'mostprefferedservice'=>$mostPreferredService, 'experienceapp'=>$usageDuration, 'averagerating'=>$averageRating, 'countrating'=> $reviews->count(), 'allservice'=>$service]);

    }
    public function profile()
    {
        $id = Auth::id();
        $user = User::find($id);
        $mostPreferredService = ServiceOrder::select('services.id', 'services.title', DB::raw('COUNT(service_orders.id) as order_count'))
        ->join('services', 'service_orders.services_id', '=', 'services.id')
        ->where('services.user_id', $id)
        ->groupBy('services.id', 'services.title')
        ->orderByDesc('order_count')
        ->first();
        if ($user->created_at) {
            $accountCreatedAt = $user->created_at;
            $currentDate = now();
            $years = $accountCreatedAt->diffInYears($currentDate);
            $accountCreatedAt->addYears($years);
            $days = $accountCreatedAt->diffInDays($currentDate);
            $usageDuration = $years . " year" . ($years == 1 ? '' : 's') . " " . $days . " day" . ($days == 1 ? '' : 's');
        } else {
            $usageDuration = 'N/A'; // Or any other default value
        }
                $services = Service::where('user_id', $id)->pluck('id');


    $reviews = Review::whereIn('ServiceOrder_id', function ($query) use ($services) {
        $query->select('id')
            ->from('service_orders')
            ->whereIn('services_id', $services);
    })->get();
    $totalRating = $reviews->sum('rating');
    $averageRating = $reviews->isEmpty() ? 0 : $totalRating / $reviews->count();
    $service = Project::where('user_id',$id)->get();
        return view('worker.WorkerProfile', ['user'=>$user, 'mostprefferedservice'=>$mostPreferredService, 'experienceapp'=>$usageDuration, 'averagerating'=>$averageRating, 'countrating'=> $reviews->count(), 'allservice'=>$service]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function dashboard()
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        $serviceIds = Service::where('user_id', Auth::id())->pluck('id');
        $currentOrders = ServiceOrder::whereIn('services_id', $serviceIds)
            ->whereDate('created_at', $currentDate)
            ->get();
        return view('worker.dashboard', ['currentorder' => $currentOrders]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFieldRequest $request)
    {
        //
    }

    public function order_history() {
        return view('worker.order_history');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */

}
