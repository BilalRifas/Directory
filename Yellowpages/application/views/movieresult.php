<!DOCTYPE html>
<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">


<?php

        echo "<h2 style='color:red;'> <b>Todos in your list</b> </h2>";
        echo "<form action='/Yellowpages/index.php/YellowpagesController/RemoveTodos' method='POST'>";

        if (count($todosFound) > 0) {
            $counter = 1;
            foreach ($todosFound as $m) {
                // $counter = 0;
                echo "<div> <h2>";
                echo "<input type='checkbox' name='removeChecked[]' value=".$m->getId()." style='width:40px;height:40px;'/>"." ".$counter." "."-"." ".$m->getActionTitle();
                echo "</h2></div>";
                $counter++;
            }
        }
        else {
            echo "No todos found";
        }
        echo "</br>";
        echo "<div class='col-md-3'>";
        echo "<input type='submit' class='form-control' name='remove' value='Remove Completed Items'>";
        echo "</form>";
        echo "</div>";
?>

</div>
</div>
</div>
    
</body>
</html>
