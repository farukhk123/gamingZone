 <?php
//  ini_set('display_errors', 1);
//   ini_set('display_startup_errors', 1);
//   error_reporting(E_ALL);
 class MyException extends Exception{
    function errorMessage(){
        $errorsmss =  "My Exception message:". $this->getMessage(). 
        "<br> error on line number".$this-> getline();
        return $errorsmss; 
    }
 }


function division($n){
    try{
        if($n <= 0){
        throw   new Exception(" <br> Enter a valid number"); 
        }
        if($n == 3){
            throw   new MyException("  Number is 3"); 
        }
        $div =2 / $n;
            echo "<br>" . $div;
        }catch(MyException $error){
        echo $error->errorMessage();
        }
       catch(Exception $error){
            echo $error->getMessage();
        }
        finally{
            echo "<br> finally";
        }
}
 division(2);
 division(3);
division(0);
?>