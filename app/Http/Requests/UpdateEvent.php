<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class UpdateEvent extends FormRequest
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
            'title' => 'required|max:200'
        ];
    }

    /**
     * @return array
     */
    public function data()
    {
        $inputs = [
            'title' => $this->get('title'),
            'meta_description' => $this->get('meta_description'),
            'content' => $this->get('content'),
            'event_date' => $this->get('event_date') ? Carbon::createFromFormat('Y-m-d H:m',$this->get('event_date')) : null,
            'is_published' => ($this->get('is_published') ? $this->get('is_published') : '') == 'on' ? '1' : '0',
            'is_notice' => ($this->get('is_notice') ? $this->get('is_notice') : '') == 'on' ? '1' : '0',
            'is_featured' => ($this->get('is_featured') ? $this->get('is_featured') : '') == 'on' ? '1' : '0'
        ];

        if ($this->has('publish')) {
            $inputs['is_published'] = true;
        }

        return $inputs;
    }
}
