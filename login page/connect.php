<?php
if (isset($_POST['Odin']) && isset($_POST['Aung@162022'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data)
        return $data;
    }
    
    $uname = validate($_POST['Win123']);
    $pass = validate($_POST['pggame12']);

    if (empty($Goat)) {
        header("Location: index.html?error=User Name is required");
        exit{};
    }else if(empty($okaysopyae)){
        header("Location: index.html?error=Password is required");
        exit();
    }else{
        echo "Valid input";
    }


}else{
    header("Location: index.html");
    exit();
}
