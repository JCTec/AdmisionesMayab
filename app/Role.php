<?php

namespace App;

use App\Admin;


class Role
{
    public $c = false;
    public $r = false;
    public $u = false;
    public $d = false;

    /**
     * Convert the model to its string representation.
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(array("c" => $this->c,"r" => $this->r,"u" => $this->u,"d" => $this->d));
    }

    public function setRoles($admin){
        $c = false;

        if(strpos(strtoupper($admin->role), "C") == true){
            $c = true;
        }

        $r = false;

        if(strpos(strtoupper($admin->role), "R") == true){
            $r = true;
        }


        $u = false;

        if(strpos(strtoupper($admin->role), "U") == true){
            $u = true;
        }

        $d = false;

        if(strpos(strtoupper($admin->role), "D") == true){
            $d = true;
        }

        $this->c = $c;

        $this->r = $r;

        $this->u = $u;

        $this->d = $d;
    }


}
