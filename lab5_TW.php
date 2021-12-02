
<?php
if(count($_POST) > 0){
$rs1 = $_POST['rs1'];
$rs2 = $_POST['rs2'];
$rs3 = $_POST['rs3'];
$rs4 = $_POST['rs4'];
$rs5 = $_POST['rs5'];
$rs6 = $_POST['rs6'];
$rs7 = $_POST['rs7'];
$rs8 = $_POST['rs8'];
$rs9 = $_POST['rs9'];
$rs10 = $_POST['rs10'];

$rs_corect = 0;
  if ($rs1 == "carne") { $rs_corect++; }
  if ($rs2 == "fructe") { $rs_corect++; }
  if ($rs3 == "kiwi") { $rs_corect++; }
  if ($rs4 == "carne") { $rs_corect++; }
  if ($rs5 == "caise") { $rs_corect++; }
  if ($rs6 == "legume") { $rs_corect++; }
  if ($rs7 == "sos salata") { $rs_corect++; }
  if ($rs8 == "dairy group") { $rs_corect++; }
  if ($rs9 == "cirese") { $rs_corect++; }
  if ($rs10 == "grasimi") { $rs_corect++; }

}?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>varianta 7</title>
   <script type="text/javascript">


       function newXMLHttpRequest()
       {
        var xmlreq = false;
        if(window.XMLHttpRequest)
        {
          xmlreq = new XMLHttpRequest();
        }
        else if (window.ActiveXObject)
        {
          try 
          {
            xmlreq = new ActiveXObject(Microsoft.XMLHttpRequest);
          }
          carch (e2)
          {
            alert("error");
          }
        }
        return xmlreq;
      }


      function getLocation(location)
      {
        var getLocation = newXMLHttpRequest();
        getLocation.open("GET", "/PP?PAGE=GETLOCATIONNAME&ROUTINGNUM=" + location, false);
        getLocation.send(null);
        for(var i = 0;i < 10; i++)
        document.getElementByName("rs")[i].innerHTML = getLocation.text;
      }
      responseText = ["carne","fructe","kiwi","carne","caise","legume","sos salata","dairy group","cirese","grasimi"];
      if(responseText == text)
         document.getElementByName("rs")[i].className = "succes";
      else
         document.getElementByName("rs")[i].className = "error";
        
 

   </script>
<style type="text/css">
  .error{
    color: red;
  }
  .succes{
    color: green;
  }

</style>
   

    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Pacifico&family=Patua+One&display=swap');
      body{
        display: flex;
        justify-content: space-around;
        align-content: center;
        align-items: center;
        flex-wrap: wrap;
        min-height: 100vh;
        background: #16222A;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #3A6073, #16222A);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #3A6073, #16222A); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */



      }

      .forma{
         border: 0.5rem ;
         outline: 0.5rem ;
         box-shadow: 5px -10px 15px -5px rgba(255, 255, 255, 0.1);
         border-radius: 12px;
         font:  1.2rem sans-serif;
         font-family: 'Patua One', cursive;
         margin: 2rem;
         padding: 1rem;
         outline-offset: 0.5rem;
         border-radius: 10%;
         background-image: var(--img-url), linear-gradient(#f9f047, #0fd850);
         color: floralwhite;
      }
      .tabel{
         border: 0.5rem ;
         outline: 0.5rem ;
         box-shadow: 5px -10px 15px -5px rgba(255, 255, 255, 0.1);
         border-radius: 5px;
         border-radius: 12px;
         font: bold 1.8rem sans-serif;
         font-family: 'Pacifico', cursive;
         margin: 2rem;
         padding: 1rem;
         outline-offset: 0.5rem;
         text-align: center;
         text-decoration-color: whitesmoke;

  }
    .buton {
  --x: 50%;
  --y: 50%;
  
  position: relative;
  appearance: none;
  padding: 1em 2em;
  color: white;
  cursor: pointer;
  outline: none;
  border-radius: 100px;
  border: 2px solid transparent;
  background: linear-gradient(#000, #000) padding-box, radial-gradient(farthest-corner at var(--x) var(--y), #00C9A7, #845EC2) border-box;
}
      
    </style>
   
</head>
<body >
  <script>
           function resetForm() {
                document.getElementById("theForm").reset();}
</script>
<div class="bodi">
<div class="tabel">
  <h1>Selecteaza cuvantul corect</h1></div>
  <form id="theForm" class="forma" method="POST">
  <label>1. Selecteaza intrusul </label>
  <input list="rs1"  name="rs1" value="<?=$_POST["rs1"] ?? "" ?>"class="<?=isset($_POST["rs1"]) && $_POST["rs1"] == $answers["rs1"] ? "success" : "error" ?>">
  <datalist id="rs1">
    <option value="banana"></option>
    <option value="piersica"></option>
    <option value="carne"></option>
    <option value="nectarina"></option>
    <option value="pruna"></option>
  </datalist>
  <br><br>

    <label>2. Grupul de alimente din intrebarea 1, este</label>
    <input list="rs2" name="rs2" value="<?=$_POST["rs2"] ?? "" ?>"class="<?=isset($_POST["rs2"]) && $_POST["rs2"] == $answers["rs2"] ? "success" : "error" ?>">
    <datalist id="rs2">
      <option value="carne"></option>
    <option value="fructe"></option>
    <option value="lactate"></option>
    <option value="cereale"></option>
    <option value="grasimi"></option>
    </datalist>.
    <br><br>

  <label>3. Selecteaza intrusul </label>
  <input list="rs3" name="rs3" value="<?=$_POST["rs3"] ?? "" ?>"class="<?=isset($_POST["rs3"]) && $_POST["rs3"] == $answers["rs3"] ? "success" : "error" ?>">
  <datalist id="rs3">
    <option value="carne"></option>
    <option value="miel"></option>
    <option value="steak"></option>
    <option value="crabi"></option>
    <option value="kiwi"></option>
  </datalist>.
  <br><br>

  <label>4. Grupul de alimente din intrebarea 3, este</label>
  <input list="rs4" name="rs4" value="<?=$_POST["rs4"] ?? "" ?>"class="<?=isset($_POST["rs4"]) && $_POST["rs4"] == $answers["rs4"] ? "success" : "error" ?>">
  <datalist id="rs4">
    <option value="cereale"></option>
    <option value="legume"></option>
    <option value="grasimi"></option>
    <option value="carne"></option>
    <option value="lactate"></option>
  </datalist>.
  <br><br>

  <label>5. Selecteaza intrusul </label>
  <input list="rs5" name="rs5" value="<?=$_POST["rs5"] ?? "" ?>"class="<?=isset($_POST["rs5"]) && $_POST["rs5"] == $answers["rs5"] ? "success" : "error" ?>">
  <datalist id="rs5">
    <option value="caise"></option>
    <option value="zucchini"></option>
    <option value="brocoli"></option>
    <option value="bostan"></option>
    <option value="cartof"></option>
  </datalist>.
  <br><br>

  <label>6. Grupul de alimente din intrebarea 5, este</label>
  <input list="rs6" name="rs6" value="<?=$_POST["rs6"] ?? "" ?>"class="<?=isset($_POST["rs6"]) && $_POST["rs6"] == $answers["rs6"] ? "success" : "error" ?>">
  <datalist id="rs6">
    <option value="carne"></option>
    <option value="legume"></option>
    <option value="cereale"></option>
    <option value="fructe"></option>
    <option value="grasimi"></option>
  </datalist>.
  <br><br>

  <label>7. Selecteaza intrusul </label>
  <input list="rs7" name="rs7" value="<?=$_POST["rs7"] ?? "" ?>"class="<?=isset($_POST["rs7"]) && $_POST["rs7"] == $answers["rs7"] ? "success" : "error" ?>">
  <datalist id="rs7">
    <option value="ciocolata cu lapte"></option>
    <option value="inghetata"></option>
    <option value="iaurt"></option>
    <option value="sos salata"></option>
    <option value="crema de cascaval"></option>
  </datalist>.
  <br><br>

  <label >8. Grupul de alimente din intrebarea 7, este</label>
  <input  list="rs8" name="rs8" value="<?=$_POST["rs8"] ?? "" ?>"class="<?=isset($_POST["rs8"]) && $_POST["rs8"] == $answers["rs8"] ? "success" : "error" ?>">
  <datalist id="rs8">
    <option value="fructe"></option>
    <option value="legume"></option>
    <option value="grasimi"></option>
    <option value="dairy group"></option>
    <option value="carne"></option>
  </datalist>.
  <br><br>

  <label >9. Selecteaza intrusul </label>
  <input list="rs1" name="rs9" value="<?=$_POST["rs9"] ?? "" ?>"class="<?=isset($_POST["rs9"]) && $_POST["rs9"] == $answers["rs9"] ? "success" : "error" ?>">
  <datalist id="rs9" >
    <option value="prajituri"></option>
    <option value="sos salata"></option>
    <option value="unt"></option>
    <option value="grasimi"></option>
    <option value="cirese"></option>
  </datalist>.
  <br><br>


    <label >10. Grupul de alimente din intrebarea 9, este</label>
    <input list="rs1" name="rs10" value="<?=$_POST["rs10"] ?? "" ?>"class="<?=isset($_POST["rs10"]) && $_POST["rs10"] == $answers["rs10"] ? "success" : "error" ?>">
    <datalist id="rs10">
      <option value="dairy group"></option>
    <option value="carne"></option>
    <option value="grasimi"></option>
    <option value="legume"></option>
    <option value="cereale"></option>
    </datalist>.
    <br><br>
    <button class="buton" type="reset" class="button" onclick="resetForm()" value="Reset">Reset</button>
    <button class="buton" type="submit" name="button" class="button" value="submit">Submit</button>
    <h3>Scorul:  <?= isset($rs_corect) ?  $rs_corect."/10" :""?> </h3>
  </form>
  

</div>
</body>

</html>
