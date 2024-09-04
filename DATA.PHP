<?php

IF(ISSET($_POST['submit'])){
    INCLUDE("./CONFIG.PHP");
    $USER_NAME=$_POST['user_name'];
    $PHONE_NUMBER=$_POST['phone_number'];
    $EMAIL=$_POST['email'];
    $COMMENT=$_POST['comment'];


    // echo "USER NAME : ".$USER_NAME;
    // echo "</br>";
    // echo "MOBILE NO : ".$PHONE_NUMBER;
    // echo "</br>";
    // echo "EMAIL ID : ".$EMAIL;
    // echo "</br>";
    // echo "FEEDBACK : ".$COMMENT;
    // echo "</br>";

    $getdata=$conn->prepare("INSERT INTO CONTACT_US (USER_NAME,EMAIL_ID,PHONE_NUMBER,COMMENT) VALUES ('$USER_NAME','$EMAIL','$PHONE_NUMBER','$COMMENT')");
    $check=$getdata->execute();
if(!$check){
    echo "SOMETHING WENT WRONG";
    echo "</br>";
}
else{
    echo "THANK YOU FOR YOUR PRECIOUS FEEDBACK";
    ECHO "</BR>";
}

}


?>