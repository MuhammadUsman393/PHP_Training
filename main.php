<?php
class Calculator {
    private $num1;
    private $num2;
    private $ans;

    public function __construct() {
        $this->num1 = '';
        $this->num2 = '';
        $this->ans = '';
    }

    public function calculate($operation) {
        if (isset($_POST[$operation])) {
            $this->num1 = $_POST['input1'];
            $this->num2 = $_POST['input2'];

            if ($this->num1 == '' || $this->num2 == '') {
                echo "Please Enter Both The Fields";
            } else {
                switch ($operation) {
                    case 'add':
                        $this->ans = $this->num1 + $this->num2;
                        break;
                    case 'sub':
                        $this->ans = $this->num1 - $this->num2;
                        break;
                    case 'mul':
                        $this->ans = $this->num1 * $this->num2;
                        break;
                    case 'div':
                        $this->ans = $this->num1 / $this->num2;
                        break;
                }
            }
        }
    }

    public function displayResult() {
        echo '<form method="post">';
        echo '<h1>Simple Calculator</h1>';
        echo '<label for="input1">Enter First Number</label>';
        echo '<input id="input1" name="input1" type="text" value='.$this->num1.'><br><br>';
        echo '<label for="input2">Enter Second Number</label>';
        echo '<input id="input2" name="input2" type="text" value='.$this->num2.'><br><br>';
        echo '<button name="add">+</button>';
        echo '<button name="sub">-</button>';
        echo '<button name="mul">*</button>';
        echo '<button name="div">/</button><br><br>';
        echo '<label for="Result">Result</label>';
        echo '<input id="Result" type="text" name="ans" value="' . $this->ans . '">';
        echo '</form>';
    }
}

$calculator = new Calculator();

$calculator->calculate('add');
$calculator->calculate('sub');
$calculator->calculate('mul');
$calculator->calculate('div');

$calculator->displayResult();
?>
