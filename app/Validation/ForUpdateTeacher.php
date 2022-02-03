<?php

Namespace App\Validation;

class ForUpdateTeacher
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
