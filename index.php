<!DOCTYPE html>
<html>
<head>
	<title> The Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
		<form action =""method="POST">
			Name:<input type="text" name="name"><br><br>
			Reg No <input type="text" name="regno"><br><br>
            <button type="submit" name="submit">Submit</button>
        </form>

            <?php 
            if (isset($_POST['submit'])) {
            	$name = $_POST['name'];
            	$regno = $_POST['regno'];

            	$studentChild = new StudentChild($name, $regno);
            	$studentChild->display();


            }

            class StudentParent{
            	public $stdName;
            	public $stdRegNum;

            	function __construct($Name, $regnum) {
            		$this->stdName = $Name;
            		$this->stdRegNum = $regnum;
			  	}

			  	
            }

            class StudentChild extends StudentParent{
            	function __construct($Name, $regnum) {
			        parent::__construct($Name, $regnum);
			    }

			    function display(){
            		echo 'Student Name:' ;
                    echo $this->stdName."<br>";
            	   echo ' Registration Number: ';
                   echo  $this->stdRegNum."<br>";
            		
            	}

            	
            }

             ?>

</body>
</html>