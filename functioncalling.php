<?php
error_reporting(E_ERROR/E_PARSE);

$Age=test_input($_POST["Age__1"]);

$Gender=test_input($_POST["Gender__2"]);

$chestpaintype=test_input($_POST["Chest_Pain_Type__3"]);

$BloodPressure=test_input($_POST["Blood_Pressure_In_mmHg__4"]);

$Cholesterol=test_input($_POST["Cholesterol_In_mgdl__5"]);

$FastingBloodSugar=test_input($_POST["Fasting_Blood_Sugar__6"]);

$RestingECG=test_input($_POST["Resting_ECG__7"]);

$MaximumHeartRate=test_input($_POST["Maximum_Heart_Rate__8"]);

$ExerciseInducedAngina=test_input($_POST["Exercise_Induced_Angina__9"]);

$OldPeak=test_input($_POST["Old_Peak__10"]);

$Slope=test_input($_POST["Slope__11"]);

$NumberofVesselsColored=test_input($_POST["Number_of_Vessels_Colored__12"]);

$Thal=test_input($_POST["Thal__13"]);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<?php
$file=fopen("test_data1.txt","w");
$b=1;
fwrite($file,$b);
fwrite($file,("\t"));
fwrite($file,$Age);
fwrite($file,("\t"));
fwrite($file,$Gender);
fwrite($file,("\t"));
fwrite($file,$chestpaintype);
fwrite($file,("\t"));
fwrite($file,$BloodPressure);
fwrite($file,("\t"));
fwrite($file,$Cholesterol);
fwrite($file,("\t"));
fwrite($file,$FastingBloodSugar);
fwrite($file,("\t"));
fwrite($file,$RestingECG);
fwrite($file,("\t"));
fwrite($file,$MaximumHeartRate);
fwrite($file,("\t"));
fwrite($file,$ExerciseInducedAngina);
fwrite($file,("\t"));
fwrite($file,$OldPeak);
fwrite($file,("\t"));
fwrite($file,$Slope);
fwrite($file,("\t"));
fwrite($file,$NumberofVesselsColored);
fwrite($file,("\t"));
fwrite($file,$Thal);
fwrite($file,("\t"));
echo "Succesfully Submitted";
?>
