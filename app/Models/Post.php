<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Cloudder;

class Post extends Model
{
    protected $table = "posts";

    public $fillable = [
    	'title',
    	'short_description',
    	'description',
    	'author',
        'image',
    ];

    public function setTitleAttribute($value)
    {
    	$this->attributes['title'] = $value;
    	$this->attributes['slug'] = str_slug($value, $separator = '-');
    }

    public function uploadImage($image){
        $name = $this->slug.'-'.Carbon::now()->timestamp;
        Cloudder::upload($image, 'posts/'.$this->slug.'/images/'.$name, [], ['posts', $this->slug]);
        $this->attributes['image'] = Cloudder::getResult()['url'];
    }

    public function destroyImage($image){
        Cloudder::destroyImage($image);
        Cloudder::delete($image);
    }
}
