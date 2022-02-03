<?php

Namespace App\Validation;

class ForUpdate
{
   /**
    * Validation rules defination.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'fullName' => 'required|min:6|max:20',
            'email' => 'email|required',
            'phone' => 'required',
            'gender' => 'required',
            'class' => 'required',
            'subject' => 'required',

            'parentFullName' => 'required',
            'parentEmail' => 'email|required',
            'parentPhone' => 'required',

            'county' => 'required',
            'city' => 'required',
            'address' => 'required',
        ];
    }

   /**
    * Error messages mappings.
    *
    * @param string|null $rule
    * @return array
    */
    public function messages($rule = null)
    {
        $messages = [

        ];

        return  $messages[$rule] ?? $messages;
    }



}
