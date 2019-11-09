<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    public function getData()
    {
        return $this->holiday_date;
    }
}
