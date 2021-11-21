<link href="css/style.css" rel="stylesheet" type="text/css"/>
<?php
echo "<form class='form' action='Eleve/giga' method='post' enctype='multipart/form-data'>".
    "<h2 class='title'>Selectionner un fichier et la taille des groupes</h2>".
"<input class='custom-file-input' type='file' id='liste' name='liste' accept='csv'>" .
"<input placeholder='Taille des groupes' class='input' type='number' id='taillegrp' name='taillegrp'>".
    "<input  class='submit' type='submit' value='Envoyer'></input>".
"</form>";