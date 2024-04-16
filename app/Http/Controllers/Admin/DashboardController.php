<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(Request $request){
        return view("admin.dashboard");
    }
    public function countries(Request $request)
    {
        $query_param = [];
        $search = $request->search;
        $iso = $request->iso;
        if ($request->has('search')) {
            $countries = Country::query()->where('name', 'like', "%$search%")
                ->orWhere('iso', 'like', "%$search%");
            $query_param = ['search' => $request['search']];
        } else {
            $countries = new Country();
        }
        $countries = $countries->orderByDesc('created_at')->paginate(20)->appends($query_param);

        return view('admin.country',[
            'items'=>$countries
        ]);
    }
}
