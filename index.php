<!DOCTYPE html>

<head>

</head>

<html>

<body bgcolor = "#262626">

<style>

.main{
  color: white;
}

</style>

<div class = "main">

<form>
  <label for="name">Name: </label><br>
  <input type="text" id="name" name="name">
  
  <br><br>

  <label for="surname">Surname: </label><br>
  <input type="text" id="surname" name="surname">
  
  <br><br>

  <label for="dob">Date of birth: </label><br>
  <input type="text" id="dob" name="dob">

  <br><br>

  <label for="live">Where do you live?: </label><br>
  <input type="text" id="live" name="live">

  <br><br>

  <label for="email">Email: </label><br>
  <input type="text" id="email" name="email">

  <br><br>

  <input id = "iButton" type="submit" value="Get request">

  <br><br>


<script>
    function enable(){
        var iName = ['name', 'surname', 'dob', 'live', 'email'];

        for(let i = 0; i < 5; i++){
            if(!document.getElementById(iName[i]).value){
                document.getElementById("iButton").style.display = 'none';
            }else{
                document.getElementById("iButton").style.display = 'inherit';
                break;
            }
        }

        setTimeout(enable, 1 * 200); //вообще это плохо и не очень скажем так хорошо. Да и вообще это отратительно и нужно переделывать. Я уже говорил что это ужасно? я не знаю как сделать иначе, но это создание с бесконечным циклом работет. А еще это не красиво, простите меня пожалуста
    }
    enable();
</script>

  <?php
  
    $nsy = array("name"=>(string)$_GET['name'], "surname"=>(string)$_GET['surname'], 
                "date of birth"=>(string)$_GET['dob'], "sity: "=>(string)$_GET['live'],
                "email: h"=>(string)$_GET['email']);

    foreach($nsy as $x => $x_value) {
      if($x_value){
        echo "Your " . $x . ": " . $x_value . " | Len: " . strlen($x_value);
        echo "<br>";
      }
    }

  ?>

</form> 
</div>

</body>

</html>
