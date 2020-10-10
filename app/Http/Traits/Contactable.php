<?php

namespace App\Http\Traits;
use Unirest;


trait Contactable{

    /**
     * Generates a token and puts it into a session which can be accessed globally. O
     */
    public function token(): void{
        $headers = array('Accept' => 'application/json');
        $query = array('username' => 'mtntad@contactable', 'password' => 'b32cd663-15d0-411b-b55d-7a7d97b7a40d1X', 'organization_code' => 'mtntad', 'email_address' => 'tumelobaloyi360@gmail.com');

        $response = Unirest\Request::post('https://mtntad.contactable.co.za/api/authentication/post_BearerToken', $headers, $query);

        $token = $response->body;

        cookie('contactable', $token->response_object->jwt_token, 30);
    }

    public function verify_identity($id){

    }

    public function selfie($avatar){

    }

    public function expired($token){

    }
}
