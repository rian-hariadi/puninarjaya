<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corporations extends Model
{
    //
    protected $table = 'CORPORATION' ;
     protected $primaryKey = 'ID_CORPORATION';

    // Get the Coloumn entire table
    // http://www.expertphp.in/article/how-to-get-table-name-and-table-column-names-from-model-in-laravel-5


    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
