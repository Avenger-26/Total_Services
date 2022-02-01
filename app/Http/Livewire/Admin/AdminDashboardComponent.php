<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use App\Models\Contact;
use App\Models\Paytm;
use Livewire\Component;
use App\Models\ServiceCategory;
use App\Models\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class AdminDashboardComponent extends Component
{

    public function render()
    {
        $totalServiceProvider = User::where('u_type', 'SPV')->count();
        $totalUser = User::where('u_type', 'CST')->count();
        $totalServiceCategories = ServiceCategory::count();
        $totalAmount = Paytm::all()->sum('price');
        $total = ($totalAmount * 10) / 100;
        $users = User::where('u_type', 'CST')->paginate(5);
        $sproviders = User::where('u_type', 'SPV')->paginate(5);

        $result = DB::select(DB::raw("select count(*) as total_user, u_type from users group by u_type"));
        $chartData = "";
        foreach ($result as $list) {
            if ($list->u_type !== 'ADM') {
                $chartData =     $chartData .= "['" . $list->u_type . "'," . $list->total_user . "],";
            }
        }

        $arr = rtrim($chartData, ",");
        return view('livewire.admin.admin-dashboard-component', ['totalServiceProvider' => $totalServiceProvider, 'totalUser' => $totalUser, 'totalServiceCategories' => $totalServiceCategories, 'total' => $total, 'chartData' => $arr, 'sproviders' => $sproviders, 'users' => $users])->layout('FrontEnd.layouts.guest');
    }
}
