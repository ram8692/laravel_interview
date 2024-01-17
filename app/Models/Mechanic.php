<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    public function carOwner(){
        //return $this->hasOneThrough(Owner::class,Car::class);

        //incase u have different name mentioned of foriegn key
       /* return $this->hasOneThrough(Owner::class,Car::class,
    'mecanic_id', //foreighn key on the car table
'car_id', //foreign key on the owner table
'id', //local key on the mechanic table
'id'); //local key on the car table */
    }

    //function name will be car which has direct relation with mecanic table and owner has direct relationship with car
    //so name of function will be carOwner 
    //and in hasonethrough we have to reverse the order of table name so in this case owner will be first and car will be second
}
