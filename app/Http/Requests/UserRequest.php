<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3'
        ];
    }

    public function attributes() {
        return [
            'name' => '名前',
            'email' => 'メールアドレス',
            'password' => 'パスワード'
        ];
    }

    public function messages() {
        return [
            'name.required' => ':attributeを入力してください。',

            'email.required' => ':attributeを入力してください。',
            'email.email' => ':attributeにはメールアドレスを入力してください。',

            'password.required' => ':attributeを入力してください。',
            'password.min' => ':attributeは:min文字以上で入力してください。'
        ];
    }

    protected function failedValidation(Validator $validator) {
        $response['data']    = [];
        $response['status']  = 'NG';
        $response['summary'] = 'Failed validation.';
        $response['errors']  = $validator->errors()->toArray();

        throw new HttpResponseException(
            response()->json( $response, 422 )
        );
    }

}
