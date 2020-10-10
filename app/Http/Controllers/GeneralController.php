<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function changeLanguage($locale)
    {
        try {

            if (array_key_exists($locale, config('locale.languages'))) {
                Session::put('locale', 'ar');
                App::setLocale('ar');
                return redirect()->back();
            }

            return redirect()->back();

        } catch (\Exception $exception) {
            return redirect()->back();
        }

    }
}
