<?php

// Create a PHP script that retrieves the user's name and email from the HTML form in Task 1 using the $_POST superglobal variable. Create a new instance of the Person class and use the setName() and setEmail() methods to set the name and email properties based on the form data. Use the getName() and getEmail() methods to display the properties on the webpage.

class Person {
    private $name;
    private $email;

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}

$person = new Person();
$person->setName($_POST['name']);
$person->setEmail($_POST['email']);

// echo $person->getName();
// echo $person->getEmail();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Task 3</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</head>
<body>
   
    <h1 class="text-green-700 text-center mt-10 font-bold text-3xl">Task 3</h1>
    
   

   <label class="text-center text-2xl ">Name:</label>
    <span  class="text-center text-2xl "> <?php echo $person->getName();?></span><br>

    <label  class="text-center text-2xl ">Email:</label>
    <span  class="text-center text-2xl "> <?php echo $person->getEmail();?></span><br>



 

  

    
</body>
</html>