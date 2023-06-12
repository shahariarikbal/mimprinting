<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Feedback;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\ServiceRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('created_at', 'desc')->take(6)->get();
        $projects = Portfolio::orderBy('id', 'desc')->paginate(20);
        $feedbacks = Feedback::orderBy('created_at', 'desc')->get();
        $sliders = Slider::orderBy('created_at', 'desc')->get();
        return view('frontend.home.index', compact('services', 'projects', 'feedbacks', 'sliders'));
    }

    public function list()
    {
        $services = Service::orderBy('created_at', 'desc')->get();
        return view('frontend.service.services', compact('services'));
    }

    public function details($id, $slug)
    {
        $service = Service::find($id);
        $services = Service::orderBy('created_at', 'desc')->get();
        return view('frontend.service.details', compact('service', 'services'));
    }

    public function serviceRequest(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'number' => 'required',
            'schedule_date' => 'required',
            'message' => 'required',
        ]);

        $serviceRequest = new ServiceRequest();
        $serviceRequest->name = $request->name;
        $serviceRequest->service_id = $request->service_id;
        $serviceRequest->email = $request->email;
        $serviceRequest->number = $request->number;
        $serviceRequest->schedule_date = $request->schedule_date;
        $serviceRequest->message = $request->message;
        $serviceRequest->save();
        return redirect()->back()->with('success', 'Your request has been submitted. We will contact you very soon.');
    }

    public function contact()
    {
        return view('frontend.contact.contact');
    }

    public function contactStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->with('success', 'Thank you for your contact.');
    }

    public function showAllProject(){
        $projects = Portfolio::get();
        return view('frontend.project.all-project', compact('projects'));
    }
}
