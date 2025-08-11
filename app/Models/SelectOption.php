<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectOption extends Model
{
    /** @use HasFactory<\Database\Factories\SelectOptionFactory> */
    use HasFactory;

    protected $fillable = [
        'text',
        'is_correct'
    ];

    protected $casts = [
        'is_correct' => 'bool'
    ];

    

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_answers')->withPivot('selected_option_id');
    }
}
