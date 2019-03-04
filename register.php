<?php



if($_POST['username']){

    if($_POST['email']){

        if($_POST['phone']){

            if($_POST('organization')){

                if($_POST('add')){

                    if($_POST('password')){

                        if($_POST['confirmpassword']){

                            if($_POST['password'] == $_POST['confirmpassword']){

                                echo "Your registration form has been successfull !";

                            }else{
                                echo "Your password doesn't match";
                            }
                        }else{
                            echo "you have to confirm your password";
                        }
                    }else{
                        echo "you have to type a password";
                    }
                }else{
                    echo "you have to type an address";
                }
                
            }else {
                echo "you have to type an organization name";
            }


        }else{
            echo "you have to type a phone number";
        }
    }else {
        echo "you have to type an email";
    }
}else{
    echo "you have to type a username"
}




?>