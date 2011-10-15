<script type="text/javascript" src="../assets/js/prototype/prototype.js"></script>

<!--    images/painel.png-->

<style type="text/css">

    #caixa
    {
        border-radius: 4px 4px 4px 4px;
        box-shadow: 3px 3px 3px 3px gray;
        float: left;
        height: 126px;
        left: 30px;
        position: relative;
        top: 30px;
    }
    #sub-caixa1
    {
        border-right: 2px solid gray;
        float: left;
        height: 95px;
        left: 20px;
        position: relative;
        top: 17px;
        width: 369px;
    }
    #sub-caixa2
    {
        float: left;
        height: 125px;
        position: relative;
        width: 106px;
    }
    p, #titulo, #conteudo, #like
    {
        margin: 0;
        padding: 0;
        font-family: lucida unicode;
        font-size: 17px;
        line-height: 18px;
        margin-bottom: 9px;
    }
    #titulo
    {
        font-weight: bold;
    }
    #conteudo
    {
        margin-right: 5px;
    }
    #rodape
    {
        background-color: #D5E3D2;
        border: 1px solid #98B692;
        clear: both;
        float: left;
        height: 30px;
        left: 30px;
        position: relative;
        top: -32px;
        width: 475px;
    }
    #link-compra
    {
        float: left;
        position: relative;
        top: 5px;
        text-decoration: none;
        left: 10px;
    }
    #link-editar
    {
        float: right;
        position: relative;
        top: 5px;
        text-decoration: none;
        right: 10px;
    }
    #preco
    {
        float: left;
        margin-left: 283px;
        margin-top: -28px;
        padding: 7px;
    }
    #cancelar
    {
        margin-left: 36px;
        margin-top: 38px;
        padding: 7px;
    }
    #foto
    {
        border: 0 none;
        float: left;
        left: 43px;
        position: relative;
        top: 17px;
    }
    #like
    {
        float: left;
        left: -5px;
        position: relative;
        top: 8px;
    }
    #container
    {
        margin-top: 50px;
        height: 600px;
        width: 535px;
        
    }
    #sidebar
    {
        border-right: 1px solid black;
        height: 600px;
        margin-top: 50px;
    }
    #perfil
    {
        font-family: lucida unicode;
        position: relative;
        top: 127px;
        width: 148px;
        left: 30px;
    }
    #img_perfil
    {
        position: relative;
        float: left;
        margin-right: 6px;
    }
    #aplicativos,#grupos,#favoritos
    {
        margin-left: 30px;
        margin-top: -15px;
    }
    #favoritos
    {
        margin-top: 69px;
        margin-left: 30px;
    }
    .itens_horizontal
    {
        float: left;
        margin-left: 42px;
        margin-top: -18px;
    }
    #borda
    {
        position: relative;
        top: -8px;
        width: 477px;
        left: 30px;
        border-color: #EEEE;
        float: left;
    }
    #compras
    {
        margin-top: 28px;
    }
    li:hover
    {
        background-color:ghostwhite;
        cursor: pointer;
    }
</style>
<link href="css/twitter/bootstrap.css" rel="stylesheet">

<div class="container-fluid">
    
    <!--Perfil do usuário-->
    <div id="perfil">
        <img id="img_perfil" src="images/jeff.png"/>
        <p><b>Jefferson Alves<br/>Pereira</b><br/>
            <a href="#">Editar meu perfil</a>
        </p>
        
    </div>
    
    <!--Barra lateral esquerda-->
    <div id="sidebar" class="sidebar">
        <div id="favoritos">
            <h6>FAVORITOS</h6>
            <ul style="font-family: lucida unicode;">
                <li style="list-style-image:url('images/facebook.png'); ">Bem vindo(a)</li>
                <li style="list-style-image:url('images/noticias.png'); ">Feed de notícias</li>
                <li style="list-style-image:url('images/mensagem.png'); ">Mensagens</li>
                <li style="list-style-image:url('images/eventos.png'); ">Eventos</li>
                <li style="list-style-image:url('images/amigos.png');  ">Amigos</li>
            </ul>
        </div>
        <div id="aplicativos">
            <h6>APLICATIVOS</h6>
            <ul style="font-family: lucida unicode;">
                <li style="list-style-image:url('images/notas.png');">Notas</li>
                <li style="list-style-image:url('images/game.png');">Frases de Charlie Harper</li>
                <li style="list-style-image:url('images/marketplace.png');">Marketplace</li>
                <li style="list-style-image:url('images/fotos.png');">Fotos</li>
                <li style="list-style-image:url('images/perguntas.png');">Perguntas</li>
            </ul>
        </div>
        <div id="grupos">
            <h6>GRUPOS</h6>
            <ul style="font-family: lucida unicode;">
                <li style="list-style-image:url('images/criar_grupo.png');">Criar grupo...</li>
            </ul>
        </div>
    </div>
    
    <!--Conteúdo-->
    <div id="container" class="content">
        <!--Item de compra-->
        <ul style="font-family: lucida unicode; margin-left: 9px;">
            <li id="compras" style="list-style-image:url('images/noticias.png');" class="itens_horizontal">Compras</li>
        </ul>
        
        <hr id="borda"/>
        <!--Itens na horizontal-->
        <ul style="font-family: lucida unicode; margin-left: 9px;">
            <li style="list-style-image:url('images/status.png');" class="itens_horizontal">Update Status</li>
            <li style="list-style-image:url('images/fotos.png');" class="itens_horizontal">Add Photo</li>
            <li style="list-style-image:url('images/perguntas.png');" class="itens_horizontal">Ask Question</li>
        </ul>
        <div id="caixa" class="borda">
            <div id="sub-caixa1">
                <p id="titulo">Comprei no restaurante Vila Velha</p>
                <p id="conteudo">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Aliquam sit amet nisi in urna posuere venenatis.
                </p>
                <img src="images/like.png" id="like"/>
                <p id="like">31 minutos atras</p>
                <a href="#" class="btn success" id="preco" style="color:#000;" >R$ 13,44</a>
            </div>
            <div id="sub-caixa2">
                <img src="images/foto.png" id="foto"/>
                <a href="#" class="btn danger" id="cancelar" style="color:#000;">Cancelar</a>
            </div>
        </div>

         <div id="rodape" >

                 <a id="link-compra" href="#">compras anteriores</a>
                 <a id="link-editar" href="#">editar opcoes</a>
         </div>
    </div>
</div>



<script type="text/javascript">
    
    var Comentario = Class.create({
        
        initialize: function(){
            
            var caixa = new Element('div',{'id':'caixa'});
            var sub_caixa_esq = new Element('div', {'id' : 'sub_caixa_esq'});

            var titulo = new Element('p', {'id' : 'titulo'}).update("Comprei no restaurante Vila Velha");
            var conteudo = new Element('p', {'id' : 'conteudo'}).update("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet nisi in urna posuere venenatis.");
            var img_like = new Element('img', {'id' : 'like', 'src' : 'images/like.png'});
            var like = new Element('p', {'id' : 'like'}).upadate('31 minutos atras');
            var preco = new Element('a', {'id' : 'preco', href : '#', 'class' : 'btn'}).upadate('R$ 13,44');
            
            sub_caixa_esq.appendChild(titulo);
            sub_caixa_esq.appendChild(conteudo);
            sub_caixa_esq.appendChild(img_like);
            sub_caixa_esq.appendChild(like);
            sub_caixa_esq.appendChild(preco);
            
            caixa.appendChild(sub_caixa_esq);
        }
        
        
        
    });
    
    
    var Clone = Class.create({
        
        initialize: function(element, id){
            this.element = element;
            this.id = id;
        },
        clonar: function (){

            var newElement = new Element(this.element,{'id' : this.id}).update($('caixa').innerHTML);
            $('container').appendChild(newElement);
            
            var newEvent = new Clone(this.element, this.id);
            
            newElement.observe('click', function(e){
                newEvent.clonar();
            });
        }
    });
    
    caixa = new Clone('div','caixa');
    
    $('preco').observe('click', function(e){
        $('caixa').hide()
    });
    
    
    //comentario = new Comentario();
    
    

</script>   