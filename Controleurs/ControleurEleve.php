<?php

final class ControleurEleve
{
    public function defautAction()
    {
        Vue::montrer('eleve/voir', array());
    }

    public function gigaAction()
    {
        $file = file_get_contents($_FILES['liste']['tmp_name']);
        $nbr = $_POST['taillegrp'];
        file_put_contents('tgigatnano',$file);
        $O_group = new Eleve();
        Vue::montrer('helloworld/voir', array('data' => $O_group->creationGroupe($nbr)));
    }
    public function testformAction(array $A_parametres = null, array $A_postParams = null)
    {

        Vue::montrer('eleve/voir', array('formData' => $A_postParams));

    }
}