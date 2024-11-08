<?php
namespace App\Models;

use App\Core\Model;

class User extends Model {
    public static function all() {
        return 'All Users';
    }
    public function getUsers() {
        return $this->db->from('users')->where('status', '=', 1)->all();
    }
}