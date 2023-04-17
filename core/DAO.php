<?php

abstract class DAO
{

    public function create($model)
    {
        $db_connect = connectToDB();
        $client = new Client('', '', '', '', '');
        $marchandise = new Marchandise('','','');
        $a =  $marchandise->getAttributes();
        $fields = $client->getAttributes();
        afficheResult($fields);

        unset($fields['numero']);

        foreach ($a as $key => $field){
            afficheResult($key);
        }
       
       
        afficheResult($fields);


        // $requete = $db_connect->prepare('INSERT INTO clients (civilite, nom, email, adresse) VALUES (?, ?, ?, ?)');
        // $requete->execute([$civilite,$nom,$email,$adresse]);   

          // function array_kshift(&$arr)
        // {
        //     list($k) = array_keys($arr);
        //     $r = array($k => $arr[$k]);
        //     unset($arr[$k]);
        //     return $r;
        // }
    }


}