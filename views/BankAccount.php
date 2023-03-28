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
    <title>3 | 13</title>
        <style>
            body{
                background-color: #18122B;
            }
            .card{
                background-color: #443C68;
            }
            h1,.ctext{
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
            <h1 class="display-6 text-center">Bank Account</h1>
            <?php 
                class BankAccount {
                    private $balance;
                    private $interestRate;

                    function get_balance() {
                        return $this -> balance;
                    }

                    function get_interestRate() {
                        return $this -> interestRate;
                    }

                    function set_balance($balance) {
                        $this -> balance = $balance;
                    }

                    function set_interestRate($interestRate) {
                        $this -> interestRate = $interestRate;
                    }

                    function deposit($amount) {
                        $this -> balance += $amount;
                    }

                    function withdraw($amount) {
                        if($this -> balance < $amount) {
                            echo "<h1>Insufficent Funds</h1>";
                        } else {
                            $this -> balance -= $amount;
                            return $amount;
                        }
                    }

                    function addInterest() {
                        $this -> balance += $this -> balance * $this -> interestRate;
                    }
                }

                $account = new BankAccount();
                $account -> set_balance(9999);
                $account -> set_interestRate(0.3);
                $account -> deposit(1200);
                $account -> withdraw(2001);
                $account -> addInterest();

            ?>

            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title ctext">Balance</h5>
                    <p class="card-text ctext">Rs <?php echo $account->get_balance(); ?></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

