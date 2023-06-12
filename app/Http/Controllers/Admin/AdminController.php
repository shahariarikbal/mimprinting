<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function clientFeedbackCreate()
    {
        return view('backend.client.create');
    }
    public function clientFeedback()
    {
        $feedbacks = Feedback::orderBy('id', 'desc')->get();
        return view('backend.client.index', compact('feedbacks'));
    }

    public function clientFeedbackStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'message' => 'required',
        ]);

        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->message = $request->message;
        $feedback->save();
        return redirect()->back()->with('message', 'Feedback has been created');
    }

    public function clientFeedbackDelete($id)
    {
        $feedbackDelete = Feedback::find($id);
        $feedbackDelete->delete();
        return redirect()->back()->with('message', 'Feedback has been deleted.');
    }
}
