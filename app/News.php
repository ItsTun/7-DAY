<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
     protected $fillable = [
        'title', 'section_id','summary','content','imageurl', 'videourl','caption','pubDate','issue_no','author','breakingnews',
    ];

    public function section()
    {
    	return $this->belongsTo('App\Section','section_id');
    }
}
