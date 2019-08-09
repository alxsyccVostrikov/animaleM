<?php
//require "../classes/pdo/pessoa.php";
	//	$p1=new pessoa("alxsy","vostrikov","SicoobCard");
		//$NomeBotaoSubmit=$p1->NomeBotaoSubmit;
		?>
 <link rel="stylesheet" href="./css/AnimalePersonCad.css">

<br>
<div class="container">
</div>

     <?php
          $btn=["success","info","danger","warning"];
              for($i=0;$i<sizeof($NomeBotaoSubmit);++$i)
              //echo $NomeBotaoSubmit[$i];         
	                echo " <button type='button' name=$NomeBotaoSubmit[$i] id=$NomeBotaoSubmit[$i] value=$NomeBotaoSubmit[$i] class='btn btn-".$btn[$i]."'>".$NomeBotaoSubmit[$i]."</button>";
          echo "<br><br><button id='test'>Testing</button>";
      ?>


                                           <!--
<button type="button" class="btn btn-default" onclick="sms()">Default</button>
<button type="button" class="btn btn-default">primary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-link">Link</button>
-->
  </div>
</div>
