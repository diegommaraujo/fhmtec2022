<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>IFMedic :: Sistema de Gerenciamento de Clínicas Médicas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" href="<?php echo base_url();?>template/install/install.css" type="text/css" media="screen"/>
		<script type="text/javascript" src="<?php echo base_url();?>template/install/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>template/install/sliding.form.js"></script>
    </head>
    <style>
        span.reference{
            position:fixed;
            left:5px;
            top:5px;
            font-size:10px;
            text-shadow:1px 1px 1px #fff;
        }
        span.reference a{
            color:#555;
            text-decoration:none;
			text-transform:uppercase;
        }
        span.reference a:hover{
            color:#000;
            
        }
        h1 a{
            color:#ccc;
            font-size:26px;
            text-shadow:1px 1px 1px #fff;
            padding:20px;
			text-decoration:none;
        }
    </style>
    <body>
    	<center><br>
        	<h1>
            	<a href="http://codecanyon.net/user/joyontaroy?ref=joyontaroy" target="_blank">
                	IFMedic :: Sistema de Gerenciamento de Clínicas Médicas
                </a>
            </h1>
            
            
        </center>
        <div id="content">
        	<?php if($this->session->flashdata('installation_result') == 'failed'):?>
            	<div class="result_error">Falha na instalação devido a problemas de configuração</div>
            <?php endif;?>
            <div id="wrapper">
                <div id="steps">
                    <?php echo form_open('install/do_install' , array('id' => 'formElem' , 'name' => 'formElem'));?>
                        <fieldset class="step">
                            <legend>Bem-vindo ao auto-instalador</legend>
                            <br><br><br><br><br><br>
                            <p>
                            	
                                Instale o sistema em poucos cliques
                                <br>
                                Defina os parâmetros de Administrador e Banco de Dados
                                <br>
                                e execute o instalador! Está simples!
                                
                                
                            </p>
                                <ol style="clear:both;margin-top:100px;margin-left:50px; text-align:left;">
                                	<li><span style="color:#900;font-weight:bold;">Obrigatório</span> - 
                                    	application/config/database.php deve ser <span style="color:#063;font-weight:bold;">gravável</span></li>
                                	<li><span style="color:#900;font-weight:bold;">Obrigatório</span> - 
                                    	application/config/routes.php deve ser <span style="color:#063;font-weight:bold;">gravável</span></li>
                                </ol>
                        </fieldset>
                        <fieldset class="step">
                            <legend>Database settings</legend>
                            <p>
                                <label for="name">Nome da Base de Dados</label>
                                <input id="db_name" name="db_name" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="country">Usuário</label>
                                <input id="db_uname" name="db_uname" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="phone">Senha</label>
                                <input id="db_password" name="db_password" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="website">Servidor</label>
                                <input id="db_hname" name="db_hname" type="text" AUTOCOMPLETE=OFF value="localhost" />
                            </p>
                        </fieldset>
                        <fieldset class="step">
                            <legend>Administrador</legend>
                            <p>
                                <label for="system_name">Nome da Clínica</label>
                                <textarea  name="system_name" AUTOCOMPLETE=OFF></textarea>
                            </p>
                            <p>
                                <label for="email">E-mail do Administrador</label>
                                <input id="email" name="email" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="password">Senha do Administrador</label>
                                <input id="password" name="password" type="password" AUTOCOMPLETE=OFF />
                            </p>
                        </fieldset>
						<fieldset class="step">
                            <legend>Confirm</legend>
							<p>
								Todas as informações estão corretamente preenchidas
								se todos os passos estão marcados com o ícone verde.
								Um ícone vermelho indica que alguma informação
								não está preenchida ou não possui um valor adequado.
							</p>
                            <p class="submit">
                                <button id="registerButton" type="submit">Executar Instalador</button>
                            </p>
                        </fieldset>
                    <?php echo form_close();?>
                </div>
                <div id="navigation" style="display:none;">
                    <ul>
                        <li class="selected">
                            <a href="#">Bem-vindo</a>
                        </li>
                        <li>
                            <a href="#">Banco de Dados</a>
                        </li>
                        <li>
                            <a href="#">Administrador</a>
                        </li>
						<li>
                            <a href="#">Instalação</a>
                        </li>
                    </ul>
                </div>
                <!--steps finishes here-->
            </div>
        </div>
    </body>
</html>