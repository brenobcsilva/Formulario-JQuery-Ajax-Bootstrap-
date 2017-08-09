<?php
if(strcasecmp('formularioAjax', $_POST['metodo'])==0){
    $html = 'Nome: '.$_POST['exampleInputNome'];
    $html .= '\nEmail: '.$_POST['exampleInputEmail'];
    $html .= '<br>';
    
    echo $html;
}
?>