<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use App\Http\Requests\FeedbackRequest;

class FeedbackController extends Controller
{
    public function index() {
        $feedbacks = Feedback::orderBy('id', 'desc')->paginate(10);
        return view('feedback.index', compact('feedbacks'));
    }

    public function create() {
        return view('feedback.create');
    }

    public function store(FeedbackRequest $request) {
        $feedback = new Feedback();
        
        $feedback->name = $request['name'];
        $feedback->email = $request['email'];
        $feedback->message = $request['message'];

        return response()->json([
            'success' => $feedback->save()
        ]);
    }

    public function destroy($id) {
        $feedback = Feedback::find($id);
        $feedback->delete();
        return redirect(action('FeedbackController@index'));
    }
}
