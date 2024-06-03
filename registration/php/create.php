<?php

    if(isset($_POST['surname']) && isset($_POST['firstName']) && isset($_POST['middleName']) && isset($_POST['suffixName']) && isset($_POST['gender']) && isset($_POST['age']) && isset($_POST['birthdate']) && isset($_POST['statu']) && isset($_POST['classification']) && isset($_POST['specificNeedsType']) 
    && isset($_POST['workStatus']) && isset($_POST['educationalBackground']) && isset($_POST['img']));

    include "../db_conn.php";
    $surname = $_POST['surname'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $suffixName = $_POST['suffixName'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $birthdate = $_POST['birthdate'];
    $statu = $_POST['statu'];
    $classification = $_POST['classification'];
    $specificNeedsType = $_POST['specificNeedsType'];
    $workStatus = $_POST['workStatus'];
    $educationalBackground = $_POST['educationalBackground'];
    $img = $_POST['img'];

    if (empty ($surname )){
        header("Location: ../registration.php?ms=Dont leave blanks");
        exit();
    }
    $sql = "INSERT INTO register(surname, firstName, middleName, suffixName, gender, age, birthdate, statu, classification, specificNeedsType, workStatus, 
    educationalBackground, img ) Values('$surname', '$firstName', '$middleName', '$suffixName',
    '$gender', '$age', '$birthdate', '$statu', '$classification', '$specificNeedsType', '$workStatus', '$educationalBackground', '$img')";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        $ms = "Thank your for responce";
        header("Location: ../registration.php?ms=$ms");
        exit();
    }else{
        $ms = "error";
        header("Location: ../registration.php?ms=$ms");
        exit();
    }
