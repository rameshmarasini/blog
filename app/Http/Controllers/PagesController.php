<?php
namespace App\Http\Controllers;
class PagesController extends Controller{

public function getindex(){
	return view('Pages.welcome');
 
}

public function getabout(){

	$first='Ramesh';
	$last='Marasini';

	$fullname=$first." ".$last;
	$email='ramesh.marasini@gmail.com';
	$data['email']=$email;
	$data['fullname']=$fullname;
	return view('Pages.about')->withEmail($email)->
	withData($data);



}
Public function getcontact(){
	return view("Pages.contact");
}

}