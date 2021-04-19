<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    use Sluggable;

    protected $table = 'downloads';

    protected $path ='uploads/document';

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug',
        'title',
        'category_id',
        'document',
        'is_published'
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $appends = [
        'document_path'
    ];

    function getDocumentPathAttribute(){
        return $this->path.'/'. $this->document;
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
