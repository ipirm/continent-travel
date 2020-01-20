<?php

namespace App\Http\Controllers;

use App\About;
use App\Activity;
use App\Activity2;
use App\Choose;
use App\Cities;
use App\Footer;
use App\Language;
use App\MainTour;
use App\Plan;
use App\Review;
use App\Slider;
use App\Social;
use App\Ticket;
use App\Tour;
use Illuminate\Http\Request;
use \App\Title;
use App\Favorite;
use App\FavoriteSlider;
use Illuminate\Support\Facades\App;
use Mail;
use App\Mail\SendEmail;
use App\Mail\SendContact;
use Carbon\Carbon;

class TitleController extends Controller
{
    public function index()
    {
        $social = Social::first();
        $tours = Tour::take(6)->get();
        $sliders = Slider::all();
        $chooses = Choose::all();
        $reviews = Review::take(4)->get();
        $activities = Activity::all();
        $tickets = Ticket::all();
        $tours_mains = Tour::where('main_tour', false)->get();
        return view('index', compact('sliders', 'tours', 'chooses', 'reviews', 'activities', 'tickets', 'tours_mains', 'social'));
    }

    public function mail(Request $request)
    {
        Mail::to('info@continent.az')->send(new SendEmail($request->email));
        return response()->json(['success' => 'Got Simple Ajax Request.']);
    }

    public function mail_contact(Request $request)
    {
        Mail::to('info@continent.az')->send(new SendContact($request));
        return response()->json(['success' => 'Got Simple Ajax Request.']);
    }

    public function tours(Request $request)
    {
        $social = Social::first();
        $tours = Tour::paginate(12);
        $cities = Cities::all();
        return view('tours', compact('tours', 'social', 'cities'));
    }

    public function search(Request $request)
    {
        if ($request->title !== null || $request->price !== null || $request->day !== null
            || $request->city !== null || $request->type !== null || ($request->day1 !== null && $request->day2 !== null)) {
            $tours = Tour::query();
            if ($request->title != '') {
                $tours->where('title', 'like', '%' . $request->title . '%');
            }
            if ($request->price != '') {
                $tours->where('price', 'like', '%' . $request->price . '%');
            }
            if ($request->city != '') {
                $tours->where('city', 'like', '%' . $request->city . '%');
            }
            if ($request->type != '') {
                $tours->where('type', 'like', '%' . $request->type . '%');
            }
            if ($request->day1 != '' && $request->day2 != '') {
                $tours = $tours->paginate(12);

                $date1 = $request->day1;
                $date2 = $request->day2;

                $car1 = Carbon::parse($date1);
                $date_car = Carbon::parse($date2);
                $days = $date_car->diffInDays($car1);
                $tours->setCollection($tours->getCollection()->filter(function ($item) use ($days) {

                    return count(json_decode($item->days, true)) == $days;

                }));
            } else {
                $tours = $tours->paginate(12);
            }
            $tours_array = [];
            foreach ($tours as $tour) {
                $o = [];
                array_push($o, $tour->title);
                array_push($tours_array, $o);
            }
            if($request->ajax()) {
                return $tours_array;
            }else {
                $cities = Cities::all();
                $social = Social::first();
                return view('tours', compact('tours', 'social', 'cities'));
            }
        } else {
            $tours = Tour::paginate(12);
            $cities = Cities::all();
            $social = Social::first();
            $tours_array = [];
            foreach ($tours as $tour) {
                $o = [];
                array_push($o, $tour->title);
                array_push($tours_array, $o);
            }
            if($request->ajax()) {
                return $tours_array;
            }else {
                return view('tours', compact('tours', 'social', 'cities'));
            }
        }

    }

    public function item($slug)
    {
        $tours_mains = Tour::where('main_tour', false)->get();
        $social = Social::first();
        $tour = Tour::where('slug', $slug)->first();
        return view('tour', compact('tour', 'social', 'tours_mains'));
    }

    public function about()
    {
        $social = Social::first();
        $abouts = About::all();
        return view('about', compact('abouts', 'social'));
    }

    public function contact()
    {
        $socials = Social::all();
        return view('contact', compact('socials'));
    }

    public function changeLang($lang)
    {
        $language = Language::where('language', $lang)->exists();

        if ($language) session(['locale' => $lang]);
        return redirect()->back();
    }

    public function service($slug)
    {
        $social = Social::first();
        $activity = Activity::where('slug', $slug)->first();
        $tours_mains = Tour::where('main_tour', false)->get();
        return view('sections.service', compact('activity', 'social', 'tours_mains'));
    }

    public function ticket($slug)
    {
        $social = Social::first();
        $activity = Ticket::where('slug', $slug)->first();
        return view('sections.service', compact('activity', 'social'));
    }
}
