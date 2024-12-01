<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(RegisterRequest $request)
    {
        // هنا يتم حفظ البيانات أو تنفيذ أي عملية
        // كمثال:
        // User::create($request->validated());

        return redirect()->route('register.create')->with('success', 'تم التسجيل بنجاح!');
    }
}
