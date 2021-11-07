<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminInfo 
{
    public $name;
    public $age;
 

    function __construct($name,$age) {
        $this->name = $name;
        $this->age = $age;
      }
      function get_name() {
        return $this->name;
      }
      function get_age() {
        return $this->age;
      }
}
