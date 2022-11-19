<?php 

    // collect value of input field
    // $name = $_POST['name'];
    $email = $_POST['email'];
    // $cnic = $_POST['cnic'];
    $phone = $_POST['phone'];
    $account = $_POST['accountnumber'];
    // $city = $_POST['city'];
    $country = $_POST['country'];
    $username = $_POST['username1'];
    // $Email = $_POST['Email'];
    $password = $_POST['password1'];
    $pincode = $_POST['pincode'];
    $currency = $_POST['select'];
    $method = $_POST['method'];
    $bank = $_POST['bankname'];
    $amount = $_POST['amount'];
    $transaction = $_POST['transaction'];
    
    // echo $city;
    echo $country;
    echo $method;

    // if (empty($name)) {
    //     echo "Name is empty";
    // } else {
    //     echo $name;
    // }

    if (empty($email)) {
        echo "email is empty.<br>";
    } else {
        echo $email."<br>";
    }


    // if (empty($cnic)) {
    //     echo "CNIC is empty";
    // } else {
    //     echo $cnic;
    // }

    if (empty($phone)) {
        echo "Phone number is empty.<br>";
    } else {
        echo $phone."<br>";
    }

    if (empty($account)) {
        echo "Account is empty.<br>";
    } else {
        echo $account."<br>";
    }


    if (empty($username)) {
        echo "username is empty.<br>";
    } else {
        echo $username."<br>";
    }


    // if (empty($Email)) {
    //     echo "email is empty.<br>";
    // } else {
    //     echo $Email."<br>";
    // }

    if (empty($password)) {
        echo "password is empty.<br>";
    } else {
        echo $password."<br>";
    }

    if (empty($pincode)) {
        echo "Pincode is empty.<br>";
    } else {
        echo $pincode."<br>";
    }


    if (empty($method)) {
        echo "Name is empty.<br>";
    } else {
        echo $method."<br>";
    }


    if (empty($bank)) {
        echo "Bank name  is empty.<br>";
    } else {
        echo $bank."<br>";
    }

    if (empty($amount)) {
        echo "Amount is empty.<br>";
    } else {
        echo $amount."<br>";
    }


    if (empty($transaction)) {
        echo "place is empty.<br>";
    } else {
        echo $transaction."<br>";
    }

    

?>