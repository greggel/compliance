<?php

namespace compliance\Http\Controllers;

use Illuminate\Http\Request;
use compliance\Environment;


class EnvironmentController extends Controller
{
    public function index()
    {
       $names = Environment::select('name')->get();
       $firstnames = Environment::select('firstname')->get();
       $emails = Environment::select('email')->get();

       /*return view('welcome')->withNames($names)->withFirstnames($firstnames)->withEmails($emails);
                     @foreach ($names as $name)
                <p>{{$name}}</p>
              @endforeach
          </span>
          <span id="firstnames">
              @foreach ($firstnames as $firstname)
                <p>{{$firstname}}</p>
              @endforeach
          </span>
           <span id="emails">  
              @foreach ($emails as $email)
                <p>{{$email}}</p>
              @endforeach
              */


       return $firstnames;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|max:500'
        ]);
        return Environment::create([ 'body' => request('body') ]);
    }

    public function destroy($id)
    {
        $environment = Environment::findOrFail($id);
        $environment->delete();
        return 204;
    }
}
