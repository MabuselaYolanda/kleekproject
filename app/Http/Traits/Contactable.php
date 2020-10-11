<?php

namespace App\Http\Traits;
use Unirest;


trait Contactable{

    /**
     * Generates a token and puts it into a session which can be accessed globally. Which returns the token should the session change not be detected
     */
    public function token(): string{
        $headers = array('Accept' => 'application/json');
        $query = array('username' => 'mtntad@contactable', 'password' => 'b32cd663-15d0-411b-b55d-7a7d97b7a40d1X', 'organization_code' => 'mtntad', 'email_address' => 'tumelobaloyi360@gmail.com');

        $response = Unirest\Request::post('https://mtntad.contactable.co.za/api/authentication/post_BearerToken', $headers, $query);

        $token = $response->body;

        session()->put('contactable', $token->response_object->jwt_token);

        return $token->response_object->jwt_token;
    }

    public function verify_identity($id){

        $token = (!is_null(session('contactable'))) ? session('contactable') : $this->token();

        $headers = array('Accept' => 'application/json', 'Authorization' => 'Bearer ' .$token);
        $query = array('identityNumber' => $id);

        $body = Unirest\Request\Body::json($query);

        return $body;

        $response = Unirest\Request::post('https://mtntad.contactable.co.za/api/integration/ValidateId', $headers, $body);

        return $response->body;
    }

    public function selfie($avatar){

    }
}
