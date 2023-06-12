<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Http\Requests\ServiceRequestUpdate;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('id', 'desc')->paginate(30);
        return view('backend.service.services', compact('services'));
    }

    public function create()
    {
        return view('backend.service.create');
    }

    public function store(ServiceRequest $request)
    {
        if ($request->file('image')){
            $image = time().'.'. $request->image->extension();
            $request->image->move('service/', $image);
        }
        $service = new Service();
        $service->title = $request->title;
        $service->slug = str_replace(' ', '-', strtolower($request->title));
        $service->short_description = $request->short_description;
        $service->long_description = $request->long_description;
        $service->image = $image;
        $service->save();
        return redirect()->back()->with('message', 'Service has been inserted');
    }

    public function edit(Service $service)
    {
        return view('backend.service.edit', compact('service'));
    }

    public function update(ServiceRequestUpdate $request, Service $service)
    {
        if ($service == null){
            return redirect()->back()->with('error', 'Service has been empty.');
        }
        if (isset($request->image)){
            if ($service->image && file_exists('service/'.$service->image)){
                unlink('service/'.$service->image);
            }
            $updateServiceImage = time().'.'. $request->image->extension();
            $request->image->move('service/', $updateServiceImage);
            $service->image = $updateServiceImage;
        }
        $service->title = $request->title;
        $service->slug = str_replace(' ', '-', strtolower($request->title));
        $service->short_description = $request->short_description;
        $service->long_description = $request->long_description;
        $service->save();
        return redirect()->back()->with('message', 'Service has been updated');
    }

    public function destroy(Service $service)
    {
        if ($service->image && file_exists('service/'.$service->image)){
            unlink('service/'.$service->image);
        }
        $service->delete();
        return redirect()->back()->with('error', 'Service has been successfully deleted.');
    }


    //Service list
    public function service_list()
    {
        $service_requests = \App\Models\ServiceRequest::with('services')->orderBy('created_at', 'desc')->paginate(30);
        return view('backend.service.request-list', compact('service_requests'));
    }

    public function service_delete($id)
    {
        $service_delete = \App\Models\ServiceRequest::find($id);
        $service_delete->delete();
        return redirect()->back()->with('message', 'Service Request has been successfully deleted.');
    }

    public function contactList()
    {
        $contacts = Contact::orderBy('id', 'desc')->paginate(50);
        return view('backend.contact.list', compact('contacts'));
    }

    public function contactListDelete($id)
    {
        $contactDelete = Contact::find($id);
        $contactDelete->delete();
        return redirect()->back()->with('error', 'Contact has been deleted');
    }
}
