<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'event_name', 'event_date'
    ];

    public function centre()
    {
        $this->belongsTo('App\Model\Centre');
    }

    public function user()
    {
        $this->belongsTo('App\Model\User');
    }
}
