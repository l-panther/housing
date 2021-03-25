<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
	
	// Index page
    public function index()
    {
        return view('appPages.index');
    }

	// Account page
    public function account()
    {
        return view('appPages.account');
    }

	// About page
    public function about()
    {
        return view('appPages.about');
    }

	// Contact page
    public function contact()
    {
        return view('appPages.contact');
    }
	
	// Delete page
	public function deleteUer(Request $request, $id)
    {
		
		$user = User::findOrFail($id);
		$user->delete();
		
        return view('appPages.delete');
    }

	// Privacy page
    public function privacy()
    {
        return view('appPages.privacy');
    }

	// List property page
    public function listProperty()
    {
        return view('appPages.listproperty');
    }

	// View property page
    public function viewProperty()
    {
        return view('appPages.viewproperty');
    }

	// List favourite page
    public function listFavourite()
    {
        return view('appPages.listfavourite');
    }

	// View favourite page
    public function viewFavourite()
    {
        return view('appPages.viewfavourite');
    }

	// Map page
    public function map()
    {
        return view('appPages.map');
    }
}
