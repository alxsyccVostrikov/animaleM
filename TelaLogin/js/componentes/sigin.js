/*
*written by alxsy mostovik
*vostrikovalxsycc@gmail.com
*/



function CreatinInputSigin(){
//document.write("<style>.btn {width: 100%;padding: 12px;border: none;border-radius: 4px;margin: 5px 0;opacity: 0.85;display: inline-block;font-size: 17px;line-height: 20px;text-decoration: none;background:green;}</style>");
document.write("    <div class='form-group'>");
  for(let i=0;i<campoDeLogin.length;i++){
    document.write("<label><b>"+campoDeLogin[i]+"</b></label><br>");
    document.write("      <input type='"+campoDeLogin[i]+"' class='form-control' id='"+campoDeLogin[i]+"' placeholder='"+campoDeLogin[i]+"' name='"+campoDeLogin[i]+"'>");
  }
    document.write("    </div>");
//document.write("    <button type='submit'class='btn btn-default'>Entrar</button>");
//document.write("    <button type='submit'>Login</button>");
}


function SiginWithForgetPass(){


document.write("<style>body {font-family: Arial, Helvetica, sans-serif;}</style>");
document.write("<style>form {border: 3px solid #f1f1f1;}</style>");
document.write("<style>.cancelbtn {width: auto;padding: 10px 18px;background-color: #f44336;}</style>");
document.write("<style>input[type=text], input[type=password],input[type=email] {width: 97%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;}</style>");
document.write("<style>button {background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;cursor: pointer;width: 97%;}</style>");
document.write("<style>button:hover {opacity: 0.8;}</style>");
document.write("<style>.container {padding: 16px;}</style>");
document.write("<style>img.avatar {width: 40%;border-radius: 50%;}</style>");
document.write("<style>.imgcontainer {text-align: center;margin: 24px 0 12px 0;}</style>");
document.write("<style>span.psw {float: right;padding-top: 16px;}</style>");
document.write("<style@media screen and (max-width: 300px) {span.psw {display: block;float: none;}.cancelbtn {width: 9%;}}></style>");








document.write("  <div class='imgcontainer'>");
 document.write("    <img src='img_avatar2.png' alt='Avatar' class='avatar'>");
document.write("  </div>");
document.write("  <div class='container'>");
CreatinInputSigin();
document.write("    <button type='submit'>Entrar</button>");
document.write("    <label>");
document.write("      <input type='checkbox' checked='checked' name='remember'> Remember me");
document.write("    </label>");
document.write("  </div>");
}




function BaseSigin(){
//document.write("<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>");
document.write("<div class='containe'>");
CreatinInputSigin();
document.write("    </div>");
document.write("    <div class='checkbox'>");
document.write("      <label><input type='checkbox' name='remember'>Lembrar</label>");
document.write("    </div>");
document.write("    <button type='submit'class='btn btn-default'>Entrar</button>");
document.write("</div>");
}



function SiginWithSocialIntegration(...args){
document.write("<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>");

let arg=args.sort();


document.write("<style>*{box-sizing: border-box;}</style>");
document.write("<style>.bottom-container {text-align: center;background-color: #666;border-radius: 0px 0px 4px 4px;}</style>");
document.write("<style>.col {float: left;width: 50%;margin: auto;padding: 0 50px;margin-top: 6px;}</style>");
document.write("<style>.container {position: relative;border-radius: 5px;background-color:#f2f2f2;padding: 20px 0 30px 0;} </style>");
document.write("<style>.fb {background-color: #3B5998;color: white;}</style>");
document.write("<style>.google {background-color: #dd4b39;color: white;}</style>");
document.write("<style>.hide-md-lg {display: none;}</style>");
document.write("<style>.twitter {background-color: #55ACEE;color: white;}</style>");
document.write("<style>.vl {position: absolute;left: 50%;transform: translate(-50%);border: 2px solid #ddd;height: 175px;};</style>");
document.write("<style>.vl-innertext {position: absolute;top: 50%;transform: translate(-50%, -50%);background-color: #f1f1f1;border: 1px solid #ccc;border-radius: 50%;padding: 8px 10px;}</style>");
document.write("<style>body {font-family: Arial, Helvetica, sans-serif;}</style>");
document.write("<style>input,.btn {width: 100%;padding: 12px;border: none;border-radius: 4px;margin: 5px 0;opacity: 0.85;display: inline-block;font-size: 17px;line-height: 20px;text-decoration: none;}</style>");
document.write("<style>input:hover,.btn:hover {opacity: 1;}</style>");
document.write("<style>input[type=submit] {background-color: #4CAF50;color: white;cursor: pointer;}</style>");
document.write("<style>input[type=submit]:hover {background-color: #45a049;}</style>");


document.write("<div class='container'>");
document.write("<div class='row'>");
document.write("<div class='vl'>");
document.write("<span class='vl-innertext'>or</span>");
document.write("</div>");
document.write("<div class='col'>");
for(let i=0;i<arg.length;++i){
  document.write("<a href='#' class='fb btn'>");
  document.write("<i class='fa fa-"+arg[i]+" fa-fw'></i> Entre com "+arg[i]);
  document.write("</a>");
}
document.write("</div>");
document.write("<div class='col'>");
document.write("<div class='hide-md-lg'>");
document.write("<p>Ou log com seu email:</p>");
document.write("</div>");
CreatinInputSigin();
document.write("<input type='submit' value='Entrar'>");
document.write("</div>");
document.write("</div>");

}











//********************************//

function setCssNatal(){
//document.write("<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'");
//document.write("<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>");

  
  
  document.write("<style>@import url('https://fonts.googleapis.com/css?family=Numans');html,body{background-image: url('https://www.gnoticia.com.br/wp-content/uploads/2018/12/buch_natal18.png');</style");
document.write("<style>uploads/2018/12/buch_natal18.png');background-size: cover;background-repeat: no-repeat;height: 100%;font-family: 'Numans', sans-serif;}</style>");
document.write("<style>.container{height: 100%;align-content: center;}</style>");
document.write("<style>.container{height: 100%;align-content: center;}</style>");
//document.write("<style>.card{height: 370px;margin-top: auto;margin-bottom: auto;width: 400px;background-color: rgba(0,0,0,0.5) !important;}</style>");
document.write("<style>.social_icon span{font-size: 60px;margin-left: 10px;color: #FFC312;}</style>");
document.write("<style>.social_icon span:hover{color: white;cursor: pointer;}</style>");
document.write("<style>.card-header h3{color: white;}</style>");
document.write("<style>.social_icon{position: absolute;right: 20px;top: -45px;}</style>");
document.write("<style>.input-group-prepend span{width: 50px;background-color: #FFC312;color: black;border:0 !important;}</style>");
document.write("<style>input:focus{outline: 0 0 0 0  !important;box-shadow: 0 0 0 0 !important;}</style>");
document.write("<style>.remember{color: white;}</style>");
document.write("<style>.remember input{width: 20px;height: 20px;margin-left: 15px;margin-right: 5px;}</style>");
document.write("<style>.login_btn{color: black;background-color: #FFC312;width: 100px;}</style>");
document.write("<style>.login_btn:hover{color: black;background-color: white;}</style>");
document.write("<style>.links{color: white;}</style>");
document.write("<style>.links a{margin-left: 4px;}</style>");
document.write("<style>a{color:blue}</style>");
}


function SantaClowsLogin(){
	setCssNatal();
document.write("<div class='container'>");
document.write("	<div class='d-flex justify-content-center h-100'>");
document.write("		<div class='card'>");
document.write("			<div class='card-header'>");
document.write("				<h3>Entrar</h3>");
//document.write("				<div class='d-flex justify-content-end social_icon'>");
//document.write("					<span><i class='fab fa-facebook-square'></i></span>");
//document.write("				</div>");
document.write("			</div>");
document.write("			<div class='card-body'>");

	document.write("					<div class='input-group form-group'>");
for(let i =0;i<inputIcon.length;i++){
// 	document.write("						<div class='input-group-prepend'> ");
	document.write("							<i class='fas "+inputIcon[i]+"'></i>");
// 	document.write("						</div>");
	document.write("						<input type='"+campoDeLogin[i]+"' class='form-control' placeholder='"+campoDeLogin[i]+"'>");
document.write("<br>");
}
document.write("					</div>");

document.write("					<div class='row align-items-center remember'>");
document.write("						<input type='checkbox'>Lembrar");
document.write("					</div>");
document.write("					<div class='form-group'>");
document.write("						<input type='submit' value='Entrar' class='btn float-right login_btn'>");
document.write("					</div>");
document.write("			</div>");
document.write("			<div class='card-footer'>");
document.write("				<div class='d-flex justify-content-center links'>");
document.write("					não possui conta?<a href='#'>inscrever-se</a>");
document.write("				</div>");
document.write("				<div class='d-flex justify-content-center'>");
document.write("					<a href='#'>Esqueceu sua senha?</a>");
document.write("				</div>");
document.write("			</div>");
document.write("		</div>");
document.write("	</div>");
document.write("</div>");
}