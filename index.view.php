<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>logCreator</title>
</head>
<body>
    <div class="container mt-5 mb-4">
        <h3 class="mb-4">logCreator</h3>

        <p class="card p-2">This is a very basic log creator. Whenever you click on whicever button, the app will create a log of that event. Example: if you click on button 'A', a new log will be created in the log.txt file: '[time; date] A button is clicked'. So, check the log.txt after the click...</p>


        <br>
        <div class="row">
            <div class="col">
                <form action="" method="post">
                    <button class="btn btn-primary" type="submit" name="Abutton" value="A">A</button>
                </form>
            </div>
            <div class="col">
                <form action="" method="post">
                    <button class="btn btn-primary" type="submit" name="Bbutton" value="B">B</button>
                </form>
            </div>
            <div class="col">
                <form action="" method="post">
                    <button class="btn btn-primary" type="submit" name="Cbutton" value="C">C</button>
                </form>
            </div>
            <div class="col">
                <form action="" method="post">
                    <button class="btn btn-primary" type="submit" name="Dbutton" value="D">D</button>
                </form>
            </div>
        </div>

        <br>

        <div class="card p-2">
            <?php
                $display = new LogDisplay;
                $display->displayAllLogs();

            ?>
        </div>          
    </div>


</body>
</html>