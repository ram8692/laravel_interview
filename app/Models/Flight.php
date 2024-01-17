<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    // Specify the table name for this model (defaults to "flights" based on convention)
    protected $table = 'my_flights';

    // Define the columns that are guarded and cannot be mass-assigned (usually the primary key)
    protected $guarded = ['id'];  //this code u can use when you are using create method for data save 
    // protected $guarded = [];

    // Define the columns that are fillable and can be mass-assigned
    protected $fillable = [   //data must have in optional case u can get array i will recomment you use above guard property 
        'name', 'email', 'password'
    ];

    // Specify the custom primary key for the model (defaults to "id" based on convention)
    protected $primaryKey = 'flight_id';

    // Disable automatic incrementing of the primary key (assuming flight_id is not an auto-incrementing key)
    public $incrementing = false;

    // Disable the timestamps columns (created_at and updated_at)
    public $timestamps = false;

    // Specify the custom name for the created_at column
    const CREATED_AT = 'creation_date';

    // Specify default attribute values for the model
    protected $attributes = [
        'name' => 'avatar',
    ];

}
