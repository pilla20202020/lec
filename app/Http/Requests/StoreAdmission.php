<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdmission extends FormRequest
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
            'ioe_roll' => 'unique:admissions,ioe_roll',
            'ioe_rank' => 'unique:admissions,ioe_rank',
            'email'=>'required|unique:admissions,email'
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'The email has already been registered in our records.'
        ];
    }
    
    public function storeData()
    {
        $inputs = [
            'prior_prog_1'      => $this->get('programme1'),
            'prior_prog_2'      => $this->get('programme2'),
            'name'              => $this->get('name'),
            'gender'            => $this->get('gender'),
            'dob_n'             => $this->get('dob_n'),
            'email'             => $this->get('email'),
            'tel_no'            => $this->get('tel'),
            'mobile'            => $this->get('mobile'),
            'zone'              => $this->get('zone'),
            'district'          => $this->get('district'),
            'vdc'               => $this->get('vdc'),
            'ward'              => $this->get('ward'),
            'tol'               => $this->get('tol'),
            'c_zone'            => $this->get('c_zone'),
            'c_district'        => $this->get('c_district'),
            'c_vdc'             => $this->get('c_vdc'),
            'c_ward'            => $this->get('c_ward'),
            'c_tol'             => $this->get('c_tol'),
            'f_name'            => $this->get('father'),
            'f_occupation'      => $this->get('f_occupation'),
            'm_name'            => $this->get('mother'),
            'm_occupation'      => $this->get('m_occupation'),
            'p_email'           => $this->get('p_email'),
            'p_tel'             => $this->get('p_tel'),
            'p_mob'             => $this->get('p_mobile'),
            'guardian'          => $this->get('guardian'),
            'r_guardian'        => $this->get('relation'),
            'g_tel'             => $this->get('g_tel'),
            'g_mobile'          => $this->get('g_mobile'),
            'slc_board_uni'     => $this->get('slc_board_uni'),
            'slc_year'          => $this->get('slc_year'),
            'slc_division'      => $this->get('slc_division'),
            'slc_score'         => $this->get('slc_score'),
            'slc_remarks'       => $this->get('slc_remarks'),
            'college_board_uni' => $this->get('college_board_uni'),
            'college_year'      => $this->get('college_year'),
            'college_division'  => $this->get('college_division'),
            'college_score'     => $this->get('college_score'),
            'college_remarks'   => $this->get('college_remarks'),
            'ioe_roll'          => $this->get('ioe_roll'),
            'ioe_score'         => $this->get('ioe_score'),
            'ioe_rank'          => $this->get('ioe_rank')
        ];

        return $inputs;
    }
    
    
}
