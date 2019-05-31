<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
      protected $table = 'POWER_UNIT_TYPE' ;
     protected $primaryKey = 'ID_POWER_UNIT_TYPE';

    // Get the Coloumn entire table
    // http://www.expertphp.in/article/how-to-get-table-name-and-table-column-names-from-model-in-laravel-5


    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
