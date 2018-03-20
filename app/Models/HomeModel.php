<?php
/**
 * Created by PhpStorm.
 * User: BEHUONG
 * Date: 3/20/2018
 * Time: 3:11 PM
 */

namespace app\Models;


class HomeModel extends BaseModel
{
    function getNames()
    {
        $dbh = $this->db->prepare("SELECT * FROM student WHERE 1");
        $dbh->execute();
        if ($dbh->rowCount()) {
            return $dbh->fetchAll();
        }
    }
}