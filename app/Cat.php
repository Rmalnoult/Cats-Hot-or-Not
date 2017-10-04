<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image',
    ];

    protected $visible = [
        'id', 'votes', 'image',
    ];

    public function votes()
    {
        return $this->hasMany('App\Vote');
    }

    public function score()
    {
    	$totalVotes = $this->votes()->count();
        return round($this->positiveVotes() / $totalVotes * 100);
    }

    public function positiveVotes()
    {
    	return $this->votes()->where('positive', '=', 1)->count();
    }
    public function negativeVotes()
    {
    	return $this->votes()->where('positive', '=', 0)->count();
    }
}
