<?php
/*
*                                                             PHP confs by alexsei and MYSQL settings
*/
/*******System********/
$WebSite="Animale";
$lang="pt-br";
$charset="UTF-8";
$campoDeLogin=["email","password"];
$ceo="Alexsy Mostovik";
$email="vostrikovalxsycc@gmail.com";


/**********Pessoa***********/
$x=["nome","sobrenome","email","password"];

if(is_dir('./php/classes/')){
    require './php/classes/pessoa.php';
$p1=new pessoa();
}
else{
  require '../classes/pessoa.php';
$p1=new pessoa($_REQUEST["nome"],$_REQUEST["sobrenome"],$_REQUEST["email"],$_REQUEST["password"]);

  }
//$NomeDosAttr=["nome","sobrenome","password","conta","email"];  
$NomeDosAttr=$p1->NomeDosAttr;
$mthdGET=[$p1->getNome(),$p1->getSobrenome(),$p1->getEmail(),$p1->getPassword()];
//$mthdSET=[];
/*******DB*******/
/*
$dbname="animale";
$user="root";
$pass="";
//$tables=["pessoa","funcionario","animal","denuncia","adocao"];    
if(file_exists("./php/classes/conn.php"))
    require "./php/classes/conn.php";
else
    require "../classes/conn.php";
    
*/
?>












<!--                                               JS configuration   by alexsei-->




<script>

  
 let WebSite="<?php echo $WebSite?>";

  let person={
  email:"<?php echo $email ?>",
  nome:"<?php echo $ceo ?>",
};

//internal database---------------------------------------------------------Mutton.js
  
 let icon=[];
 let uri=[];
 
  
  let url=["https://www.facebook.com/"+WebSite,"https://www.instagram.com/"+WebSite,"https://mail.yandex.com/?uid=869376094#compose",
           "https://mail.google.com/mail/?view=cm&fs=1&tf=1&to="+person["email"]+"&su=DenunciaAnimale&body=my-text&ui=2&tf=1&pli=1",
           "https://web.telegram.org/"+WebSite,"https://www.skype.com/"+WebSite,"https://chat.whatsapp.com/"+WebSite,"https://www.patreon.com/"+WebSite,
           "https://www.bitcoin.com/"+WebSite,"https://www.paypal.com/"+WebSite,"https://www.mercadopago.com.br/"+WebSite,
           "https://pagseguro.uol.com.br/"+WebSite,"https://www.visa.com/"+WebSite,"https://www.bradesco.com/"+WebSite,
           "https://www.itau.com/"+WebSite,"http://www.twitter.com/"+WebSite];





//--------------------------------------------------------------------------MenuBar.js

/*
let fields=[
  ["index.php","Incial"],
  ["sobre.php","Sobre"],
  ["contato.php","Contato"],
  ["QuemSomos.php","QuemSomos"],
  ["denuncia.php","Denunciar"],
  ["contribuir.php","Contribuir"],
  ];
*/
let pag=["index.php","sobre.php","contato.php","QuemSomos.php","denuncia.php","contribuir.php"];
let pagName=["Inicial","Sobre","Contato","QuemSomos","Denuncia","Contribuir"];


/*  
  let glyphicon=[
  ["signup.php","user","Inscrever-se"],
  ["signin.php","log-in","Entrar"],
  ];
  */
  let glyphicon=["user","log-in"];
  let glyphiconName=["Inscrever-se","Entrar"];
  let glyphiconPag=["signup.php","signin.php"];
 
//----------------------------------------------------------------------------sigin.js


let campoDeLogin=<?php echo json_encode($campoDeLogin)?>;
let inputIcon=["fa-user","fa-key"];




//-----------------------------------------------------------------------------signup.js

let nomeDosAttr=<?php echo '["' . implode('", "', $NomeDosAttr) . '"]'; ?>;
let submitButtonIcon=["success"];
let submitButtonName=["Cadastrar"];


//----------------------------------------------------------------------------MenuLateral.js



let menuLateralIcon=["fa-home","fa-envelope","fa-power-off","fa-home","fa-envelope","fa-home","fa-envelope","fa-power-off","fa-power-off"];
let menuLateralName=["Inicio","Menssagem","Perfil","Denúncias","Configuração","Contato","Networking","Estátisticas","Sair"];
let menuLateralPage=["LoginUser.php","#","#","#","#","#","#","#","../../"+pag[0]];


  /*
let IconMenuLateralUser=[
["LoginUser.php","fa-home","Inicio"],
["#","fa-envelope","Menssagem"],
["#","fa-power-off","Perfil"],
["#","fa-home","Denúncias"],
["#","fa-envelope","Cionfiguração"],
["#","fa-home","Contato"],
["#","fa-envelope","Networking"],
["#","fa-power-off","Estátisticas"],
//["fa-home","Inicio"],
//["fa-envelope","Menssagem"],
["../../index.php","fa-power-off","Sair"],
];
*/

</script>
