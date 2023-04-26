<?php 

class UnitManager {

    public static function userStatus($status_id = null)
    {
        if (!empty($status_id)) {
            switch ($status_id) {
                case 0: return 'Non-active';
                case 1: return 'Active';
            }
        } else {
            return array(
                0 => 'Non-active',
                1 => 'Active'
            );
        }
    }  

}