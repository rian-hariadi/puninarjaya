<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
       protected $table = 'LOCATION' ;
     protected $primaryKey = 'ID_LOCATION';

    // Get the Coloumn entire table
    // http://www.expertphp.in/article/how-to-get-table-name-and-table-column-names-from-model-in-laravel-5


    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
