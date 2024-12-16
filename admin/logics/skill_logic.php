<?php

include "common.php";

if (isset($_POST['card-form-btn'])) {
    $title=mysqli_real_escape_string($connection,$_POST['title']);
    $category=mysqli_real_escape_string($connection,$_POST['category']);
    $description=mysqli_real_escape_string($connection,$_POST['description']);
    $level=mysqli_real_escape_string($connection,$_POST['level']);
    $experience_description=mysqli_real_escape_string($connection,$_POST['expdesc']);
    $contact=mysqli_real_escape_string($connection,$_POST['contact-number']);
    $whatsapp=mysqli_real_escape_string($connection,$_POST['whatsapp-number']);
    $address=mysqli_real_escape_string($connection,$_POST['address']);
    
    $userid=$_SESSION["id"];

    $sql = "INSERT INTO `skillcards` (`skill_id`, `skill_name`, `skill_number`, `skill_wnumber`, `skill_location`, `skill_experience`, `skill_description`, `skill_img`, `skill_category`, `skill_docs`, `skill_likes`, `skill_views`, `skill_user_id`, `skill_date`) VALUES (NULL, '{$title}', '{$contact}', '{$whatsapp}', '{$address}', '{$level}', '{$description}', '', '{$category}', 'hhh.pdf', '0', '0', '{$userid}', current_timestamp());";

    if (mysqli_query($connection,$sql)) {
        header("Location: ".BASE_URL."pages/add_skill_card.php?status=true&msg='Your Card Has Been Added'");
    }else{
        header("Location: ".BASE_URL."pages/add_skill_card.php?status=false&msg='Your Card Has Not Been Added'");
    }
}

?>