<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmsPage extends Model
{

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool    
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable. dddd     ssss          
     *
     * @var array
     */
    protected $fillable = [
        'banner_category_id',
        'name',
        'alias',
        'description',
        'image',
        'sort_order',
        'status',
        'meta_title',
        'meta_description'
    ];

    /**
     * The categories that belong to the bannerdsdfdf.
     */
    public function categories()
    {
        return $this->belongsTo('App\BannerCategory', 'banner_category_id');
    }

}
