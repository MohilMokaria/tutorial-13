<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous" />
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
    <title>2 | 13</title>
    <style>
        body{
            background-color: #18122B;
        }
        .card{
            background-color: #443C68;
        }
        h1{
            color: whitesmoke;
        }
        .btn{
            background-color: #18122B;
            color: whitesmoke;
        }
    </style>
</head>
<body>
    <div class="container-sm d-flex align-items-center justify-content-center" style="margin-top: 10rem;">
        <div class="card p-5" style="width: 44%; min-width: 350px;">
            <h1 class="display-6 text-center">Student Average Grades</h1>
            <?php 
                class Student {
                    public $name;
                    public $marks = array();

                    function set_name($name) {
                        $this -> name = $name;
                    }

                    function set_marks($marks) {
                        $this -> marks = $marks;
                    }

                    function get_name() {
                        return $this -> name;
                    }

                    function get_marks() {
                        return $this -> marks;
                    }

                    function getAverageMarks() {
                        return array_sum($this -> marks) / 5;
                    }
                }

                $students = [new Student(), new Student(), new Student()];
                
                $students[0] -> set_name("Mohil");
                $students[0] -> set_marks([20, 22, 34, 41, 56]);

                $students[1] -> set_name("Manav");
                $students[1] -> set_marks([15, 32, 35, 38, 41]);

                $students[2] -> set_name("Ajay");
                $students[2] -> set_marks([20, 30, 30, 40, 50]);

                foreach($students as $student) {
                    $name = $student -> get_name();
                    $result = $student -> getAverageMarks();
                    echo "<h1 style='font-size: 2rem; margin-top: 2rem;'>Student Name: {$name}</h1>";
                    echo "<h1 style='font-size: 1rem;'>Average Marks: {$result}</h1>";
                }
            ?>
        </div>
    </div>
</body>
</html>

