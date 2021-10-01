<?php 

session_start();

$_SESSION['height'] = $_POST['height'];
$_SESSION['weight'] = $_POST['weight'];
$_SESSION['age'] = $_POST['age'];
$_SESSION['nbWorkout'] = $_POST['nbWorkout'];
$_SESSION['objectif'] = $_POST['objectif'];


$lastname = $_SESSION['lastname'];
$firstname = $_SESSION['firstname'];
$civility = $_SESSION['civility'];
$email = $_SESSION['email'];
$height = $_SESSION['height'];
$weight = $_SESSION['weight'];
$age = $_SESSION['age'];
$nbWorkout = $_SESSION['nbWorkout'];
$objectif = $_SESSION['objectif'];
$finalCaloriesPerDay = 0;

if($civility == 'male')
{
    $caloriesPerDay = (13.7516*$weight);
    $caloriesPerDay = $caloriesPerDay + (500.33*$height);
    $caloriesPerDay = $caloriesPerDay - (6.7550*$age);
    $caloriesPerDay = $caloriesPerDay + 66.473;
}
else if($civility == 'female')
{
    $caloriesPerDay = (9.5634*$weight);
    $caloriesPerDay = $caloriesPerDay + (184.96*$height);
    $caloriesPerDay = $caloriesPerDay - (4.6756*$age);
    $caloriesPerDay = $caloriesPerDay + 655.0955;
}


if($nbWorkout == 12)
{
    $caloriesPerDay * 1.37;
}
else if($nbWorkout == 34)
{
    $caloriesPerDay = $caloriesPerDay* 1.55;
}
else if($nbWorkout == 56)
{
    $caloriesPerDay * 1.80;
}





if($objectif == 'loseWeight')
{
    $percentage = ($caloriesPerDay * 10) / 100;
    $finalCaloriesPerDay = $caloriesPerDay - $percentage;
}

else if($objectif == 'gainMuscle')
{
    $percentage = ($caloriesPerDay * 10) / 100;
    $finalCaloriesPerDay = $caloriesPerDay + $percentage;
}

else if($objectif == 'maintain')
{
    $finalCaloriesPerDay = $caloriesPerDay;
}

$finalCaloriesPerDay = round($finalCaloriesPerDay);



$_SESSION['proteinPerDayGrams'] = 2*$weight;
$_SESSION['lipidsPerDayGrams'] = 1*$weight;
$proteinCalories = $_SESSION['proteinPerDayGrams']*4;
$lipidsCalories = $_SESSION['lipidsPerDayGrams']*9;
$totalCalories = $proteinCalories + $lipidsCalories;
$_SESSION['carbsPerDayCal'] = $finalCaloriesPerDay - $totalCalories;
$_SESSION['proteinPerDayCal'] = $_SESSION['proteinPerDayGrams'] * 4;
$_SESSION['lipidsPerDayCal'] = $_SESSION['lipidsPerDayGrams'] * 9;
$_SESSION['carbsPerDayGrams'] = $_SESSION['carbsPerDayCal'] / 4;



$_SESSION['caloriesPerDay'] = $finalCaloriesPerDay;

header('Location: ../NAV/results-calories.php');



?>