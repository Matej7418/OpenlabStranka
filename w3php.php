<!DOCTYPE html>
<html>
<body>

<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
  public function combine(Car $car2) {
  	$result = new Car($this->color . " and " . $car2->color,
    	$this->model . "-" . $car2->model);
    return $result;
  }
}

class CarHybrid {
	public $color = [];
    public $model = [];
    public function __construct($color, $model) {
    	$this->color = $color;
        $this->model = $model;
    }
    public function message() {
    	return "My car hybrid is a " . colorMer;
    }
    
    public function colorMerge() {
    	$l -> count($this->color);
    	$str -> "";
    	for($i=0; $i < l; $i++) {
        	if(i < (l-1)) {
            	$temp -> ", " . $this->color[i];
            	$str .= $temp;
            } else {
            $temp -> " and " . $this->color[i];
            	$str .= $temp;
            }
        }
        return $str;
    }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar2 = new Car("red", "Toyota");
echo $myCar2 -> message();
echo "<br>";
$myCar3 = $myCar -> combine($myCar2);
echo $myCar3 -> message();
?>

</body>
</html>
