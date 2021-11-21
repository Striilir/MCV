<link href="../css/style.css" rel="stylesheet" type="text/css"/>
<?php
foreach (($A_vue['data']) as $key => $data) {
    echo '<table class="groupe"><thead><tr><th>Groupe ' .
        ($key + 1);
    echo '<tr>';
    foreach ($data as $ligne) {
        echo '<td>';
        $element = str_replace(";", " ", $ligne);
        echo implode(' ',$element);
        echo '</br>';
    }
    echo '</tbody></table>';
    echo '</th></tr></thead><tbody>';
}
