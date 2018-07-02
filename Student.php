<?php include 'MySQL_Con.php';

class Student extends MySQL_Con
{

    function __construct()
    {
        parent::mysqlConnect();
    }



    function listStudent()
    {
        $strSQL = 'SELECT * FROM Student';

        $dsResult = parent::selectQuery($strSQL);

        echo "__________________________________________________________\n";
        echo "Student List\n";
        echo "----------------------------------------------------------\n";
        if($dsResult->num_rows > 0)
        {
            // Output data of each row
            while($row = $dsResult->fetch_assoc())
            {
                echo "Id:" . $row["Id"] . ", Name:" . $row["name"] . ", Email:" . $row["email"] . ", Date:" . $row["createdDate"] . "\n";
            }
        }
        else
        {
            echo "0 results";
        }
        echo "__________________________________________________________\n";
    }



    function createStudent($strName, $strEmail, $dtmAsOn)
    {
        $strSQL = "INSERT INTO Student(name, email, createdDate) VALUES('$strName', '$strEmail', '$dtmAsOn')";

        $blSuccess = parent::modifyQuery($strSQL);

        return $blSuccess;
    }



    function updateStudent($strName, $strEmail, $dtmAsOn, $studentId)
    {
        $strSQL = "UPDATE Student SET name='$strName', email='$strEmail', createdDate='$dtmAsOn' WHERE Id='$studentId'";

        $blSuccess = parent::modifyQuery($strSQL);

        return $blSuccess;
    }



    function deleteStudent($studentId)
    {
        $strSQL = "DELETE FROM Student WHERE Id='$studentId'";

        $blSuccess = parent::modifyQuery($strSQL);

        return $blSuccess;
    }
}
?>
