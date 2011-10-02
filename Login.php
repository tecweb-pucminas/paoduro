<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>PaoDuro</title>
        <style>
            img{
                position: relative;
                left: 100px;
                top:20px;
}
            p{
                text-align: left;
                margin: 0px 0px 0px 15px ;
                font-weight: bold;
}
            input{
                height: 35px;
                width: 300px;
                border-radius:5px;
                margin-left: 25px;
}
            label{
                margin-left: 25px;
}
            body{
                padding: 0px;
                margin: 0px;
                font-family: 'Lucida Sans Unicode';
}
            #cabecalho{
                height:13%;
                width: auto;
                box-shadow: 0px 1px 1px #888888;
                border-bottom: 2px solid #000000;
                background-color: #CAD8C7;
}
            #button{
               height: 38px;
               width: 70px;
               background-color: #003333;
               font-size: 15px;
               font-weight: bold;
               color: white;
               font-family: 'Lucida Sans Unicode';
}
            #form{
               height:310px;
               width: 385px;
               border: 2px solid;
               padding: 0px ;
               background-color: #CAD8C7;
               border-color: #000000;
               border-radius:5px;
               position: relative;
               top:122px;
               left: 36%;
	       box-shadow: 4px 5px 1px #888888;
}
            #login{
                margin: 0px 0px 0px 0px;
                padding: 8px;
                color:white;
                background-color: #003333;

}
        </style>
    </head>
    <body>
        <div id="cabecalho">
            <img src="logo.png" alt="logo"/>
            <div id="menu">

            </div>
        </div>
            <div id="form">
                <div id="login">
                <p>Login</p>
                </div>
                <br>
                <label><b>Nome do Usuário</b></label><br>
                <br>
                <input type="text" name="usuario" value="Nome do Usuário " /><br>
                <br>
                <label><b>Senha</b></label><br>
                <br>
                <input type="password" name="senha" value="Senha" readonly="readonly" /><br>
                <br>
                <input id="button" type="submit" value="Entrar" name="entrar" />
        </div>

        <?php
        // put your code here
        ?>
    </body>
</html>
