<?php

class Eleve
{
    public function creationGroupe($nbr)
    {
        $handle = fopen("tgigatnano", "r");
         $list = [];
         while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
             $list[] = $data;
         }
         shuffle($list);
         $groupEleve = array_chunk($list, $nbr);

         return $groupEleve;
    }

}