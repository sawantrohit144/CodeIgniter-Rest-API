<?php

namespace App\Models;

use CodeIgniter\Model;

class MobileModel extends Model{

  protected $table = 'mobile';
  protected $primarykey = 'id';
  protected $allowedFields = ['name','price','status','description'];

}
