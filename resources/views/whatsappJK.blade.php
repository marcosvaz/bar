<!DOCTYPE html>
<html>
<head>
	<title>BAR</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href='../public/css/chat.css' rel='stylesheet' type='text/css' lazyload>
	<link rel="icon" href="images/favicon.png" type="image/x-icon" />
	<script type="text/javascript">
		function mascara(o,f){
			v_obj=o
			v_fun=f
			setTimeout("execmascara()",1)
			}
			function execmascara(){
			v_obj.value=v_fun(v_obj.value)
			}
			function mtel(v){
			v=v.replace(/\D/g,"");
			v=v.replace(/^(\d{2})(\d)/g,"($1) $2");
			v=v.replace(/(\d)(\d{4})$/,"$1-$2");
			return v;
			}
			function id( el ){
			return document.getElementById( el );
			}
			window.onload = function(){
			id('telefone').onkeyup = function(){
				mascara( this, mtel );
			}
		}
	</script>
	<style type="text/css">
		<!--
		a:link {
			text-decoration: none;
		}
		a:visited {
			text-decoration: none;
		}
		a:hover {
			text-decoration: none;
		}
		a:active {
			text-decoration: none;
		}
		-->
	</style>
</head>
<script>
	document.onkeypress = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
          return false;
        }
	}
  	document.onmousedown = function (event) {
    	event = (event || window.event);
    	if (event.keyCode == 123) {
      		return false;
    	}
  	}
  	document.onkeydown = function (event) {
    	event = (event || window.event);
    	if (event.keyCode == 123) {
      		return false;
    	}
  	}
</script>

<body oncontextmenu="return false">
	<form action="/emailWhatsappJK" method="POST" onSubmit="this.BTEnvia.value='Enviando...'; this.BTEnvia.disabled=true;">
		<div class="page">
			<div class="screen">
				<div class="screen-container">
					<div class="chat">
						<div class="cc" id="cc">
							<div class="user-bar">
								<div class="avatar ubi">
									<img id="ccp" src="https://ipchat.com.br/sistema/logos/logo.png">
								</div>
								<div class="name ubi">	<span id="ccn" data-userid="1">B.A.R.</span>
									<span id="ccs" class="status">
								online</span>
								</div>
								<div class="actions more ubi">
									<img src="https://www.ipchat.com.br/sistema/whats-eventos-2-0/images/+.png" width="27" height="27" border="0" style="margin-right:-15px; margin-top:3px;">
								</div>
							</div>
							<div class="conversation">
								<div class="conversation-container">
									<!--<div class="message received aMsg2" id="aMsg2">-->
									<link rel="stylesheet" href="css/confirmacao.css" type="text/css" media="all">
									<!--<script type="text/javascript" src="js/confirmacao.js"></script>

<div class="message received aMsg3" id="aMsg3">-->
									<div class="message received">Boa tarde! Reserve rapidamente através do nosso sistema e confirmaremos em até 24h! <span class="metadata"><span class="time"> 16:04 </span></span>
									</div>
									<script type="text/javascript">
										function mascara(o,f){
										    v_obj=o
										    v_fun=f
										    setTimeout("execmascara()",1)
										}
										function execmascara(){
										    v_obj.value=v_fun(v_obj.value)
										}
										function mtel(v){
										    v=v.replace(/\D/g,"");
										    v=v.replace(/^(\d{2})(\d)/g,"$1/$2");
										    v=v.replace(/(\d)(\d{4})$/,"$1/$2");
										    return v;
										}
										function id( el ){
											return document.getElementById( el );
										}
										window.onload = function(){
											id('data').onkeyup = function(){
												mascara( this, mtel );
											}
										}

										function allowOnlyNumbers(e) {
										    var tecla = (window.event) ? event.keyCode : e.which;
										    if ((tecla > 47 && tecla < 58)) return true;
										    else {
										        if (tecla == 8 || tecla == 0) return true;
										        else return false;
										    }
										};
									</script>
									<!--<div class="message received aMsg4" id="aMsg4">-->
									<div class="message received">
										<input type="text" id="nome" name="nome" placeholder="Seu Nome" value="" autocomplete="off" required style="width:100%; height:25px; border-radius:3px; border:1px solid #efa35c; font-size:13px; padding-left: 5px;" />
									</div>
									<div class="message received">
										<input type="tel" id="telefone" name="telefone" placeholder="Seu Telefone" value="" autocomplete="off" onKeyPress="return allowOnlyNumbers(event)" required maxlength="11" style="width:100%; height:25px; border-radius:3px; border:1px solid #efa35c; font-size:13px; padding-left: 5px;" />
									</div>
									<div class="message received">
										<input class="convidados" type="tel" id="convidados" name="convidados" placeholder="Nº de Convidados" value="" maxlength="6" autocomplete="off" onKeyPress="return allowOnlyNumbers(event)" required style="width:100%; height:25px; border-radius:3px; border:1px solid #efa35c; font-size:13px; padding-left: 5px;" />
									</div>
									<div class="message received">
										<input type="tel" id="data" name="data" placeholder="Data do Evento" value="" autocomplete="off" onKeyPress="return allowOnlyNumbers(event)" required maxlength="10" style="width:100%; height:25px; border-radius:3px; border:1px solid #efa35c; font-size:13px; padding-left: 5px;" />
									</div>
									<div class="message received">
										<input class="email" type="email" id="email" name="email" value="" placeholder="Seu E-Mail" style="width:100%; height:25px; border-radius:3px; border:1px solid #efa35c; font-size:13px; padding-left: 5px;" autocomplete="off" required>
									</div>
									<input type="hidden" id="token" name="_token" value="{{csrf_token()}}">
								</div>
								<div id="conversation-compose" class="conversation-compose" style="bottom:90px; position:fixed; z-index:100; ">
									<style>
										#input-msg {
										padding-left: 30px;
									  	background-image:url(https://www.ipchat.com.br/sistema/whats-eventos-2-0/images/smile.png);
									  	background-repeat:no-repeat;
										}
									</style>
									<textarea style="font-size:13px;" name="input" class="input-msg" id="input-msg" placeholder="Clique à direita para enviar" autocomplete="off" required="required" disabled></textarea>
									<button class="send" name="BTEnvia" type="submit">
										<div class="circle">
											<img src="https://www.ipchat.com.br/sistema/whats-eventos-2-0/images/enviar_web.png" height="20" border="0">
										</div>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
</html>
