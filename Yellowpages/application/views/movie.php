<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Please Add Your TODO Action</h2>
            <div class="col-md-4">
                <form action="/Yellowpages/index.php/YellowpagesController/ShowDashboard" method="POST">
                    <div class="form-group">
                                      
                        <h3>TODO TASK:</h3>

                <input type="text" class="form-control" name="TODOACTION" placeholder="TODO" id="TODOACTION">
                    </div>
                    <input type="submit" class="form-control" value="Add Action">
                    </br>

                </form>

                 <form action="/Yellowpages/index.php/YellowpagesController/ShowTodos" method="GET">

                        <input type="submit" class="form-control" name="empty" value="Show Todos">

                 </form>       
            </div>
        </div>
    </div>
</div>

</body>
</html>