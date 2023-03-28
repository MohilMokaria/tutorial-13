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
    <title>1 | 13</title>
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
        <div class="card p-4" style="width: 33%; min-width: 350px;">
            <div class="padd">
                <h1 class="display-6 text-center">Calculator</h1>
            <form method="POST" class="d-flex flex-column justify-content-center">
                <div class="mb-3 form-floating">
                    <input type="number" name="n1" id="n1" class="form-control" placeholder="Enter First Number" required>
                    <label for="n1">Enter First Number</label>
                </div>

                <div class="mb-3 form-floating">
                    <input type="number" name="n2" id="n2" class="form-control" placeholder="Enter Second Number" required>
                    <label for="n2">Enter Second Number</label>
                </div>
                
                <select class="form-select mb-3" name="operation" id="operation">
                    <option value="1">+ (Addition)</option>
                    <option value="2">- (Subtraction)</option>
                    <option value="3">* (Multiplication)</option>
                    <option value="4">/ (Division)</option>
                    <option value="5">% (Modulo)</option>
                </select>

                <input type="submit"  name ="submit" class="btn mb-5" value="Calculate">

                <?php 
                    class Calculator {
                        public $first_operand;
                        public $second_operand;

                        function set_first_operand($first_operand) {
                            $this -> first_operand = $first_operand;
                        }

                        function set_second_operand($second_operand) {
                            $this -> second_operand = $second_operand;
                        }

                        function get_first_operand() {
                            $this -> first_operand;
                        }

                        function get_second_operand() {
                            $this -> second_operand;
                        }

                        function add() {
                            return $this -> first_operand + $this -> second_operand ;
                        }

                        function subtract() {
                            return $this -> first_operand - $this -> second_operand ;
                        }

                        function multiplication() {
                            return $this -> first_operand * $this -> second_operand ;
                        }

                        function divide() {
                            return $this -> first_operand / $this -> second_operand ;
                        }

                        function modulo() {
                            return $this -> first_operand % $this -> second_operand;
                        }
                    }

                    if(isset($_POST['submit'])) {
                        $n1 = $_POST['n1'];
                        $n2 = $_POST['n2'];
                        $operation = $_POST['operation'];

                        $calc = new Calculator();

                        $calc -> set_first_operand($n1);
                        $calc -> set_second_operand($n2);

                        $result = null;

                        switch($operation) {
                            case 1: 
                                $result = $calc -> add();
                                break;

                            case 2:
                                $result = $calc -> subtract();
                                break;

                            case 3:
                                $result = $calc -> multiplication();
                                break;

                            case 4:
                                if($calc -> second_operand == 0) {
                                    echo "<h1>Undefined for Division by Zero</h1>";
                                    break;
                                } else {
                                    $result = $calc -> divide();
                                    break;
                                }

                            case 5:
                                if($calc -> second_operand == 0) {
                                    echo "<h1>Undefined for Division by Zero</h1>";
                                    break;
                                } else {
                                    $result = $calc -> modulo();
                                    break;
                                }
                                
                            default:
                                $result = NULL;
                                break;
                        }

                        if($result) {
                            echo "<h1>Answer : {$result}</h1>";
                        }
                    }
                ?>
            </form>
            </div>
        </div>
    </div>
</body>
</html>

