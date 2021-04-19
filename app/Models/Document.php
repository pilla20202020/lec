<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'name',
        'size',
        'extension',
        'path',
        'documentable_id',
        'documentable_type'
    ];

    protected $appends = [ 'filename', 'link', 'original_path' ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function documentable()
    {
        return $this->morphTo();
    }

    public function getFilenameAttribute()
    {
        return $this->name . '.' . $this->extension;
    }

    public function getLinkAttribute()
    {
        return asset('uploads/documents' . $this->path);
    }

    public function getOriginalPathAttribute()
    {
        return 'uploads/documents' . $this->path;
    }
}
