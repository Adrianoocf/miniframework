<?php

    namespace App\Models;
    use MF\Model\Model;

    class Info extends Model
    {
       public function getInfo()
       {
            $query = "select descricao,titulo from tb_info";
            return $this->db->query($query)->fetchAll();
       }
    }
       
?>