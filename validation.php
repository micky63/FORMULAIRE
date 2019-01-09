<?php

$logins = [
    "heloise", 
    "laurie", 
    'marc', 
    'fabrice', 
    'christophe', 
    'vincent', 
    'danielle',
    'theau'
];

//Récupère la valeur du champs login du formulaire
$formLogin = $_POST["login"];


if(checkIfLoginExist($formLogin, $logins) == true){ //Si le login existe deja
    header('Location: index.php?status=loginAU');
}else{ //Sinon
    header('Location: confirm-register.php?user='.$formLogin);
}


/*=====================================
    FUNCTIONS
=====================================*/

//Cherche dans un tableau si la valeur existe
function checkIfLoginExist($login, $loginTab)
{
    foreach($loginTab as $currentLogin){
        if($login === $currentLogin){
            return true;
        }
    }
    return false;
}