<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];

if (isset($_POST['submit'])) {





//First Name Validation
    if (empty($firstName)) {
        $errors['firstNameError'] = 'يرجى ادخال الاسم الأول';
// Last Name Validation 
    } if (empty($lastName)) {
        $errors['lastNameError'] = 'يرجى ادخال الاسم الأخير';
// E-Mail Validation
    } if (empty($email)) {
        $errors['emailError'] = 'يرجى ادخال البريد الإلكتروني';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['emailError'] = 'يرجى ادخال بريد إلكتروني صحيح';
    }

// No-Error Validation 
if(!array_filter($errors)){
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName  = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email     = mysqli_real_escape_string($conn, $_POST['email']);

    //echo $firstName . ' ' . $lastName . ' ' . $email;
    $sql = "INSERT INTO users(firstName, lastName, email) 
    VALUES ('$firstName', '$lastName', '$email')";
       
       
       
       if (mysqli_query($conn, $sql)) {
            header('location: ' . $_SERVER['PHP_SELF']);
        } else {
            echo 'Error:' . mysqli_error($conn);
        }/* mysqli_query($conn, $sql);
    }  
        */
}
}