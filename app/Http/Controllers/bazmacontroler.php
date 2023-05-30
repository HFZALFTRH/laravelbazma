<?php
namespace App\Http\Controllers;

use illuminate\Http\Request;

class bazmacontroler extends Controller
{
    public function responsefunction()
    {
        return response("ini adalah bentuk response");
    }
    /**
     * Summary of responseheader
     * @return mixed
     */
    public function responseheader(){
        $bodyresponse = [
            'name' => 'bayupm',
            'school'=> 'smk ti bazma'
        ];
        return response(json_encode($bodyresponse),200)
        ->header('content-type', 'application/json')
        ->withheaders([
            'app' => 'bayu priambada',
            'classes' => "XI",
            'WEB' => 'laravel'
        ]);
    }
    public function encryptiondata()
    {
        $encrypt = encrypt("ini adalah enkripsi");
        $decrypt = decrypt($encrypt);
        dd($encrypt);
        return $encrypt . $decrypt;
    }
    public function redirectto(){
        return "redirect to";

    }
    public function reddirectfrom()
    {
        return redirect("/redirect/to");
    }
    public function redirecttonamerooute()
    {
        return "redirect to with named route";
    }
    public function redirectfromnamedroute()
    {
        return redirect(route("redirect.from"));
    }
}
