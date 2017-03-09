<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class harambe_crud extends Model
{
    protected $table = 'harambe_post';


    public function getbirthdateAttribute(){

return ucfirst($this->bmonth). ' ' . ucfirst($this->bday). ', ' . ucfirst($this->byear);
    
}


    public function getfullnameAttribute(){

return ucfirst($this->firstname). ' ' . ucfirst($this->lastname);
}
}

 