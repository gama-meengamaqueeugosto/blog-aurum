<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";

    public $fillable = [
    	'title',
    	'short_description',
    	'description',
    	'author',
        'image'
    ];

    public function uploadImage($image){
        $name = $this->slug.'-'.Carbon::now()->timestamp;
        Cloudder::upload($request->image, 'posts/'.$this->slug.'/images/'.$name, [], ['posts', $this->slug]);
        $this->attributes['image'] = Cloudder::getResult()['url'];
    }

    public function destroyImage($image){
        Cloudder::destroyImage($image);
        Cloudder::delete($image);
    }
}
