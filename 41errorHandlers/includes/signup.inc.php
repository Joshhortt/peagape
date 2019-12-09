<!-- 41: What Are Error Handlers in PHP -->

<?php
    if (isset($_POST['submit']))  {  // if we have a submit set (isset function), we re going to check for a superglobal called POST, then check for 'submit' the name of the button
        include_once 'dbh.inc.php';
        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];
    
            if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd))  {    // Did the user actually filled out the form
                header("Location: ../index.php?signup=empty");
             } 
             else  {  
             // Important: we should go through error messages first than success messages.                   
             if (filter_var($email, FILTER_VALIDATE_EMAIL))  {
                header("Location: ../index.php?signup=invalidemail");
             }
             else  {
                 echo "Sign up the user";
             }
          }            
        }
    else  {
        header("Location: ../index.php?signup=error");  // Did the user clicked the button. If he did than we can sign him up.
    }
    
    ?>