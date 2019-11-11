<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Holiday;
use Validator;

class OrderFormController extends Controller
{

    public function input() {

        $first_deliday = Carbon::now()->addWeekdays(7);
        $deli_days = [];

        for ($i = 0; $i <= 30; $i++) {
            $deli_day = $first_deliday->copy()->addweekdays($i);

                if ($deli_day === Holiday::select('holiday_date')->get()){
                    $deli_days = $deli_day->adddays(1);
                }
            $deli_days[] = $deli_day->format('Y-m-d');
        }

        return view('input', compact('deli_days'));
    }

    public function post(Request $request) {

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $delivery = $request->input('delivery');
        
        
        $vali_rule = [
            'name' => 'required|max:10',
            'email' => 'required|max:30',
            'phone' => 'required|max:12',
            'address' => 'required|max:30',
            'delivery' => 'required',
        ];

        $message = [
            'name.required' => '名前が入力されてません',
            'name.max' => '10文字以上入力されています',
            'email.required' => 'E-mailが入力されてません',
            'email.max' => '30文字以上入力されています',
            'phone.required' => '電話番号が入力されてません',
            'phone.max' => '20文字以上入力されています',
            'address.required' => '届先住所が入力されてません',
            'address.max' => '30文字以上入力されています',
            'delivery.required' => '配達希望日が入力されてません',
        ];

        $validator = Validator::make($request->all(), $vali_rule, $message);

        if ($validator->fails()) {
            return redirect('order')
            ->withErrors($validator)
            ->withInput();

        }

        return view('confirm', compact('name','email','phone','address','delivery'));
    }

    public function confirm(Request $request) {

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $delivery = $request->input('delivery');

        return view('confirm', compact('name','email','phone','address','delivery'));
    }

    public function complete() {
        return view('complete');
    }
}