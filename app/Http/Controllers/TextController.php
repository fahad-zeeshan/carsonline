<?php

namespace App\Http\Controllers;
use App\Http\Requests\TextRequest;
use App\Models\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
    //
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function text()
    {
        $texts = Text::all();
        return view('admins.add-text', compact('texts'));
    }

    public function store(TextRequest $request)
    {
       $text = new Text();
       $text->text = $request->text;
       $text->description= $request->description;
       $text->save();
       return redirect()->back();
    }
}
