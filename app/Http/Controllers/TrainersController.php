<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TrainersRequest;
use App\Models\Trainer;

class TrainersController extends Controller
{
    public function submit(TrainersRequest $request) {
        $trainer = new Trainer();
        $trainer->name = $request->input('name');
        $trainer->surname = $request->input('surname');
        $trainer->phone = $request->input('phone');
        $trainer->special = $request->input('special');
        $trainer->save();
        return redirect()->route('all-trainers')->with('success','Тренер был успешно добавлен');
    }

    public function allData() {
        return view('trainers', ['data' => Trainer::all()]);
    }
}
