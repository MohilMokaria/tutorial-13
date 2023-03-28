<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-13.4</title>
    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" integrity="sha512-v4Q7J6R/kAVPQHZU6v8UWdM++Jutq3DbqzLZ/Ea8kSBsO1iuq3YwnFyNlFYujjdO/mC9RkScA2JfE/pLFh/NOw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    

<h1 class="mt-5 mb-3 text-center">TUTORIAL-13 - DB Connection</h1>
<?php

    class Query{

        private $results;
        private $connection;

        function connect($host, $user, $password, $database){
            $this->connection = mysqli_connect($host, $user, $password, $database);
        }

        function execute($query){
            $this->results = ($this->connection ? mysqli_query
            ($this->connection, $query)
            : false);
            return $this->results !== false;
        }

        function display(){
            echo '<div class="container">';
            echo '<div class="row">';
            while(($row = mysqli_fetch_array($this->results))) {
                echo '<div class="col-md-4 mb-3">';
                echo '<div class="card">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['id'] . ' ' . $row['name'] . '</h5>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';
        }
    }

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "tutorial_13";
    $query = new Query();
    $query -> connect($host, $user, $password, $database);

    if($query -> execute('SELECT * FROM student'))
    {
        $query -> display();
    }
?>

<!-- Link Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js" integrity="sha512-YL+3q/3EKwrw0d80JGpt19q92+iqE5Xy+5kJ5RUl32JcF1MsHbA5wUpL+AMM7Uc+zJyyKnEDX9F4I4aL/VU6zQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
