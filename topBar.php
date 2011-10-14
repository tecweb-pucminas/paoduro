<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            #page-bar {
                margin: 0px;
                padding: 0px;
                width:auto;
                float: right;
                position: relative;
                top: -53px;
}
            #page-bar ul {
                list-style-position: inside;
                list-style-image: none;
                list-style-type: none;
}
            #page-bar li {
                float:left;
                display:block;
                list-style-position: inside;
                list-style-image: none;
                list-style-type: none;
                margin: 0px;
                padding: 0px;
}
            #page-bar li a{
                margin: 0px;
                color:#ffffff;
                display:block;
                text-decoration: none;
                width: 150px;
                text-align: center;
                font-family: 'Lucida Sans Unicode';
                padding-top: 5px;
                padding-bottom: 5px;
}
            img{
                height: 35px;
                width: 224px;
                position: relative;
                left: 30px;
                top:10px;
}
            #bot{
                position: relative;
                left: -2px;
                top: 2px;
                bottom: 2px;
                right: 2px;
                height: 30px;
                width: 75px;
                color: white;
                background-color: #336600;
                border: 0px;
                font-weight: bold;
}
            #caixa{
                position: relative;
                left: 370px;
                top: -23px;
                height: 34px;
                width: 429px;
                background-color: white;
}
            input{
                position: relative;
                left: 2px;
                top:2px;
                width: 350px;
                height: 30px;
                border: 0px;
}
            body{
                margin: 0px;
}
            #topbar{
                height: 50px;
                width: auto;
                background: -moz-linear-gradient(right, #336600,#6A9A61 );
                background: -webkit-gradient(linear, left top, right top, from(#336600), to(#6A9A61));
}
        </style>
    </head>
    <body>
        <div id="topbar">
            <img src="../assets/images/logo.png" alt="logo"/>
            <div id="caixa">
                <input type="text" name="txtbusca" >
                <input id="bot" type="button" name="btnbusca" value="Buscar">
            </div>
                <ul id="page-bar">
                    <li><a href="url do item" target="_blank">Pagína Inicial</a></li>
                    <li><a href="url do item" target="_blank">Comerciantes</a></li>
                </ul>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
