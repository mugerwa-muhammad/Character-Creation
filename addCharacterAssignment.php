<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/assigment.css">
</head>

<body>
    <form action="" method="post">
        <div id="form_header">
            <p>Eight(8) characters should not be exceeded per assignment</p>
            Remaining with <span id="remaining_characters"></span>
        </div>
        <div id="alreadyAdded">
        </div>
        <div id="assignment_name"> 
            <input type="text" name="assignment_name" id="" placeholder="Enter assignment name">
        </div>
        <input type="submit" value="Upload Assignment">
    </form>
    <div id="notSelected">
        <?php
        include './processes/connection.php';
        $sql = "SELECT * FROM characters;";
        $result = mysqli_query($connection, $sql);
        $num = mysqli_num_rows($result);
        while ($row = mysqli_fetch_assoc($result)) {
            
            echo "<button class='character_bttn' name=".$row['name']." id=".$row['character_id'].">";
            echo $row['name'];
            echo "</button>";
        }
        ?>
    </div>
    <script src="./js/addCharacterAssignment.js"></script>
</body>

</html>