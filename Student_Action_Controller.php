<?php include 'Student.php';

$objStudent = new Student();
$objStudent->listStudent();



echo("\nEnter choice\n   1.Create\n   2.Update\n   3.Delete\n ");
$line = readline();
echo "\n";



if($line == "1")
{
    $name = readline("Enter name: ");
    $email = readline("Enter email: ");

    $blSuccess =  $objStudent->createStudent($name,$email,date("Y/m/d"));
    if($blSuccess == TRUE)
    {
        echo "\nEntry saved successfully\n";
    }
}
elseif($line == "2")
{
     $id = readline("Enter Id of the student whose data to be update: ");
     echo "\n";

     $name = readline("Enter Name:");
     echo "\n";
     $email = readline("Enter email:");
     echo "\n";

     $blSuccess = $objStudent->updateStudent($name,$email,date("Y/m/d"),$id);
     if($blSuccess == TRUE)
     {
         echo "\nEntry updated successfully";
     }
}
elseif($line == "3")
{
    $id = readline("Enter Id of the student whose data want to delete: ");

    $blSuccess = $objStudent->deleteStudent($id);
    if($blSuccess == TRUE)
    {
        echo "\nEntry deleted successfully";
    }
}

echo "\n";
$objStudent->listStudent();
?>
