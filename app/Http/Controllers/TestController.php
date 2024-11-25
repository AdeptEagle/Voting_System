<?php

namespace App\Http\Controllers;
use App\Models\Create_Test_Table;
use Illuminate\Http\Request;


class TestController extends Controller
{
 public function index() {
    $test= "string";
    return view ("Voting.test",compact("test"));
 }

 public function amongus(Request $request) {
$test = new Create_Test_Table();
$test->FirstName = $request->input('FirstName');
$test->LastName = $request->input('LastName');
$test->Position = $request->input('Position');
$test->save();

 dd($request->all());
 }
}
