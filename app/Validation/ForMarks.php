<?php

Namespace App\Validation;

class ForMarks
{
   /**
    * Validation rules defination.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'class' => 'required',
            'term' => 'required',
            'english' => 'required',
            'math' => 'required',
            'kiswahili' => 'required',
            'science' => 'required',
            'social_studies' => 'required',
            'CRE' => 'required',
            'total' => 'required',
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
