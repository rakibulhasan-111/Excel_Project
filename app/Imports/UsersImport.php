<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $uniqueNumber = mt_rand(1000, 9999);

        $lastId = DB::table('users')->latest()->value('id');
        
        $lastId = $lastId+1;
        $email = 'user_'.$lastId.'@example.com';
        return new User([
            'name'=>$row[0],
            'number'=>$row[1],
            'email'=>$email,
            'password'=>bcrypt($row[2])
        ]);
    }
}
