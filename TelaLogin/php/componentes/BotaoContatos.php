<script>
  $emailC="vostrikovalxsycc@gmail.com";
	$icon=[];
	$uri=[];
  //$ext=["http://www.","https://www.","https://mail.","https://web.","https://.org",".com"];
  $url=["https://www.facebook.com/animale","https://www.instagram.com","https://mail.yandex.com/?uid=869376094#compose","https://mail.google.com/mail/?view=cm&fs=1&tf=1&to="+emailC+"&su=DenunciaAnimale&body=my-text&ui=2&tf=1&pli=1","https://web.telegram.org","https://www.skype.com","https://chat.whatsapp.com/animale/"];
    






function CriandoIcons(...args){
    			for($j=0;$j<args.length;$j++)
		    		for($i=0;$i<sizeof($url);$i++)
           // 	for(k=0;k<ext.length;k++)
  					if(args[$j]==$url[$i].split(/[/?#]/)[2].replace(/^\w+\:\/\/\w+\./,"").replace(/.\w+$/,"").replace(/^\w+./,""))
       					$icon.push($url[$i].split(/[/?#]/)[2].replace(/^\w+\:\/\/\w+\./,"").replace(/.\w+$/,"").replace(/^\w+./,""));

	}



	function BoobleSort() {
		$icon.sort();
    		for($j=0;$j<sizeof($icon);$j++)
    			for(i=0;i<sizeof($url);i++)
  					if($icon[$j]==$url[$i].split(/[/?#]/)[2].replace(/^\w+\:\/\/\w+\./,"").replace(/.\w+$/,"").replace(/^\w+./,""))
       					$uri.push($url[$i]);
  //              alert(uri.toString());
	}	


function genericSocialShare($i){
  		window.open($uri[$i],'sharer','toolbar=0,status=0,width=648,height=395');
      	return true;
    }
    
    
  function BotoesDenuncia(){
    BoobleSort();
	  echo "<div class='middle'>";
		for($i=0;$i<sizeof($icon);$i++)
      echo "<button onclick=genericSocialShare("+i+") style='margin:8px;'><i class='fab fa-"+icon[i]+"'> "+icon[i]+"</i></button>");
	      echo "</div>";
	}

	function LinkDenuncia(){
    BoobleSort();
    echo "<div class='middle'>";
		for($=0;$i<sizeof($icon);$i++)
		echo "<a class='btn' onclick=genericSocialShare("+i+")><i class='fab fa-"+icon[i]+"'>"+icon[i]+"</i></a>";
    echo "</div>";
	}
		</script>	
