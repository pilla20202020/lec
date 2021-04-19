<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function data()
    {
        $inputs = [
            'title' => $this->get('title'),
            'designation' => $this->get('designation'),
            'description' => $this->get('description'),
            'facebook' => $this->get('facebook'),
            'twitter' => $this->get('twitter'),
            'instagram' => $this->get('instagram'),
            'linkedin' => $this->get('linkedin'),
            'is_published' => ($this->get('is_published') ? $this->get('is_published') : '') == 'on' ? '1' : '0',
            'is_featured' => ($this->get('is_featured') ? $this->get('is_featured') : '') == 'on' ? '1' : '0'
        ];

        return $inputs;
    }

}
