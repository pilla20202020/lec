<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admissions extends Model
{
    //
    // protected $primaryKey = 'admission_id';
    protected $fillable = [
        'prior_prog_1',
        'prior_prog_2',
        'name',
        'dob_n',
        'gender',
        'email',
        'tel_no',
        'mobile',
        'zone',
        'district',
        'vdc',
        'ward',
        'tol',
        'c_zone',
        'c_district',
        'c_vdc',
        'c_ward',
        'c_tol',
        'f_name',
        'f_occupation',
        'm_name',
        'm_occupation',
        'p_email',
        'p_tel',
        'p_mob',
        'guardian',
        'r_guardian',
        'g_tel',
        'g_mobile',
        'slc_board_uni',
        'slc_year',
        'slc_division',
        'slc_score',
        'slc_remarks',
        'college_board_uni',
        'college_year',
        'college_division',
        'college_score',
        'college_remarks',
        'ioe_roll',
        'ioe_score',
        'ioe_rank',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function documents()
    {
        return $this->morphMany(Document::class, 'documentable');
    }

    public function getNameAttribute($value){
        return strtoupper($value);
    }
    public function getDistrictAttribute($value){
        return strtoupper($value);
    }
}
