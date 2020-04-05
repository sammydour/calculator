<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
</head>
<body style= "background-color:brown" >
    <nav class="navbar navbar-light bg-light" >

        <a class="navbar-brand" href="index.html"></a>

	</nav>


<p>	
	<header>
		<h2>A SIMPLE PHP CALCULATOR</h2>
    </header>
	<form>

   <input type="text" name="num1" placeholder="number1">
   <input type="text" name="num2" placeholder="number2">
  <select name="operator">
        <option>none </option>
        <option>add </option>
        <option>subtract </option>
        <option>multiply </option>
        <option>divide </option>
  </select>
<brk>
  <button type="submit" name="submit" value="submit">Calculate</button>
	</form>
</p>


<p> HERE IS THE ANSWER :</p>
<?php
   if (isset($_GET['submit'])){
     $result1 =$_GET['num1'];
     $result2 =$_GET['num2'];
     $operator=$_GET['operator'];
     switch($operator ) {
        case "none":
			echo "you need to select a method";
		    break;
        case "add" :
			echo $result1 +  $result2;
             break;
	    case "subtract" :
			echo $result1 -  $result2;

		    break;
        case  "multiply" :
			echo $result1 *  $result2;
		    break;
        case "divide" :
			echo $result1 /  $result2;
            break;
        
     }
   }
?> 


<P>
<?php
$dayoftheweek = date("w");
	switch($dayoftheweek){
		case 1 : 
			echo "it is monday!";
		break;
		case 2 : 
			echo "Today is Tuesday!";
		break;
		case 3 : 
			echo "Today is Wednessday!";
		break;
		case 4 : 
			echo "Today is Tursday!";
		break;
		case 5 : 
			echo "Today is Friday!";
		break;
		case 6 : 
			echo "Today is Saturday!";
		break;
		case 0 : 
			echo "Today is Sunday!";
		break;
	}
?>
</P>

<p>how can we help make your day better........</P>


</body> 
</head>
</html >