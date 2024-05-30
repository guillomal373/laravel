<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Associate extends Model
{
    use HasFactory, Notifiable;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_type',
        'id_number',
        'first_name',
        'other_names',
        'first_lastname',
        'other_lastnames',
        'gender',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'fullName' => $this->getFullName,
            'created_at' => 'date:Y-m-d',
            'updated_at' => 'date:Y-m-d'
        ];
    }

    //Accessors
    public function getNameAttribute()
    {
        return ucfirst($this->attributes['first_name']);    
    }

    //Mutators
    public function setNameAttribute($value)
    {
        $this->attributes['first_name'] = strtoupper($value);
    }

    // protected function created_at():Attribute{
    //     return new Attribute(
    //         get: fn($value) => $this->attributes['created_at']
    //     );
    // }


}