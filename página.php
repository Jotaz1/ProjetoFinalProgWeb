<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cartão Vermelho</title>
    </head>
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        
        body{

            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        
        .container{

            background-color: blueviolet;

            width: 100%;
            height: 100%;
            position: absolute;

        }

        .imagem_bg{

            width: 100%;
            height: 100%;
            position: absolute;
            z-index: 0;
            

        }

        header{

            position: absolute;
            top: 0;
    
            width: 100%;
            background: rgba(0, 0, 0, 0.685);
            
        }

        header p{

            font-size: 18px;
            color: #FFFF;
            margin-left: 20px;

        }

        .arrow{

            z-index: 3;
            
        }

        button:hover{

            background: #00800081;
            
        }

        .menuLateral{

            width: 0px;
            height: 93.8%;;
            background-color: rgba(0, 0, 0, 0.411);
            position: absolute;
            top: 6.23%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            z-index: 3;
            transition: all 0.3s ease;
            
            
            
            
        }

        .menu_cartao1, .menu_cartao2, .menu_cartao3
        {

            width: 0px;
            height: 0px; 
            transition: all 0.1s ease;
            

        }

      

        .menu_cartao1:hover{


            box-shadow: 15px 15px 15px 1px rgba(0, 0, 0, 0.685);



        }

        .menu_cartao2:hover{

            box-shadow: 15px 15px 15px 1px rgba(0, 0, 0, 0.685);

            
        }

        .menu_cartao3:hover{

            box-shadow: 15px 15px 15px 1px rgba(0, 0, 0, 0.685);


        }

        


       .seta_esquerda{

            padding: 40px;
            width: 20px;
            height: 20px; 
            background: none;
            border: none;
            background-color: #008000c2;
            position: absolute;
            top: 50%;
            left: 16.4%;
            color: #FFFF;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 10px;
            z-index: 3;
            transition: all 0.4s ease-out;
            opacity: 0;
           
            
            
       }

       .seta_direita{

            padding: 40px;
            width: 20px;
            height: 20px; 
            background: none;
            border: none;
            background-color: #008000c2;
            position: absolute;
            top: 50%;
            left: 1%;
            color: #FFFF;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 10px;
            z-index: 3;
            opacity: 1;
            transition: all 0.4 ease-out;
            

       }
      
       .Menu{

            background-color: aquamarine;


       }

       .modelos_menu{


            color: #FFFF;
            font-size: 20px;
            opacity: 0;
            

       }

       .menu_cartao{

            position: absolute;
            top: 60%;
            left: 1.6%;
            color: #FFFF;
            font-size: 20px;
            

       }

       .menu_titulo{

            opacity: 1;
            transition: all 0.1s;
            

       }

       .cartao_central{

            position:absolute;
            z-index: 0;
            top: 57.67%;
            left: 50%;
            transform: translate(-50%, -50%);
         
       }

       .cartao_meio{

            width: 600px;
            height: 790px;

       }

       #caixa_texto1{

            position: absolute;
            top: 5%;
            left: 5%;
            width: 350px;
            height: 39px;
            font-size: 20px;
            font-family: 'Oooh Baby', cursive;
            



       }

       #caixa_texto2{

            position: absolute;
            top: 17%;
            left: 5%;
            width: 535px;
            height: 510px;
            font-size: 20px;
            font-family: 'Oooh Baby', cursive;


       }

       #caixa_texto3{

            position: absolute;
            position: absolute;
            top: 85%;
            left: 26%;
            width: 410px;
            height: 39px;
            text-align: right;
            font-size: 20px;
            font-family: 'Oooh Baby', cursive;



       }

       .botao_submit{

            position: absolute;
            top: 82.2%;
            left: 146%;
            border-radius: 17px;
            padding: 25px 45px;
            font-size: 20px;
            background-color: #008000c2;
            border: none;
            color: #FFFF;

       }

       .botao_submit:hover{

            background: #00800093;
            cursor: pointer;

       }

       #story{

            width: 460px;
            height: 500px;
            padding: 10px;
            max-width: 100%;
            line-height: 1;
            border-radius: 5px;
            border: 1px solid rgba(255, 0, 0, 0);
            position: absolute;
            left: 10%;
            top: 170px;
            font-size: 20px;
            text-align: justify;
            background: rgba(255, 255, 255, 0.849);
            resize: none;

       }

       /*i {

            font-size: 40px;

       }*/
       

       #story2{

            position: absolute;
            top: 7%;
            left: 27%;
            width: 250px;
            height: 30px;
            font-size: 20px;
            border-radius: 5px;
            border: 1px solid rgba(255, 8, 8, 0);
            background: rgba(255, 255, 255, 0.849);
            resize: none;
            

       }

       #story3{

            
            position: absolute;
            top: 90%;
            left: 40%;
            width: 296px;
            height: 30px;
            font-size: 20px;
            border-radius: 5px;
            border: 1px solid rgba(255, 29, 29, 0);
            background: rgba(255, 255, 255, 0.849);
            color: black;
            resize: none;

       }


       
       ::placeholder{

            
            color: black;


       }

       .botao_enviar:hover{

            background: #00800081;

       }
       
    </style>

    <body>

        <form action="banco_dados.php" method="post">


        <section class="container">

            <img class="imagem_bg" src="img_fundo.jpg" alt="">

            <header>

                <a href="página inicial/inicio.php"><p>Página inicial</p> </a>
                
            </header>


            <div class="arrow">

                
            </div>

            <!-- <button class="seta_esquerda" onclick="fecharMenu()">

                <i class="fas fa-angle-left"></i> 

            </button> -->

            <div class="cartao_central">

                <img class="cartao_meio" src="cartão_1.png" alt="">

                <input type="hidden" id="custId" name="imagem" value="cartão_1.png">
            
                    <textarea  maxlength="26" style="resize: none;"  name="titulo" id="caixa_texto1" cols="35" rows="10" wrap="soft" placeholder="Escreva um título..."></textarea>

                    <textarea maxlength="1000" style="resize: none;"  name="mensagem" id="caixa_texto2" cols="35" rows="10" wrap="soft" placeholder="Escreva sua mensagem..." ></textarea>
    
                    <textarea rows="10" cols="30" style="resize: none;"  name="rodape" id="caixa_texto3" maxlength="26" placeholder="Despedida..." ></textarea>
    
    
                        <input class="botao_submit" type="submit" value="Enviar">
   
            </div>

        </section>

        </form>

        <div class="menuLateral">
                
            <label class="modelos_menu">Cartões</label>

                <a href="página2.php"><img class="menu_cartao1"  src="cartão_2.png" alt=""></a>
                <a href="página3.php"><img class="menu_cartao2"  src="cartão_3.png" alt=""></a>
                <a href="página4.php"><img class="menu_cartao3"  src="cartão_4.png" alt=""></a>

        </div>

        <button class="seta_esquerda" onclick="fecharMenu()">

            <i class="fas fa-angle-left"></i>

        </button>

        <div class="menu_cartao">

            <label class="menu_titulo">Modelos</label> 

        </div>
        
        <button onclick="abrirMenu()" class="seta_direita" >

            <i class="fas fa-chevron-right"></i>

        </button>

        <script>

            
            function abrirMenu(){

                let open = window.document.querySelector('.menuLateral');
                open.style.width = '300px';
                
                let setaEsquerda = window.document.querySelector('.seta_esquerda');
                setaEsquerda.style.opacity = '1';

                let setaDireita = window.document.querySelector('.seta_direita');
                setaDireita.style.opacity = '0';

                let tituloLateral = window.document.querySelector('.modelos_menu');
                tituloLateral.style.opacity = '1'; 

                let tituloBola = window.document.querySelector('.menu_titulo');
                tituloBola.style.opacity = '0';

                let cart = window.document.querySelector('.menu_cartao1');
                cart.style.width = '150px';

                let cart1 = window.document.querySelector('.menu_cartao1');
                cart1.style.height = '200px';

                let cart2 = window.document.querySelector('.menu_cartao2');
                cart2.style.width = '150px';

                let carta2= window.document.querySelector('.menu_cartao2');
                carta2.style.height = '200px';

                let cart3 = window.document.querySelector('.menu_cartao3');
                cart3.style.width = '150px';

                let cartao3 = window.document.querySelector('.menu_cartao3');
                cartao3.style.height = '200px';

        

            }

            function fecharMenu(){

                let open = window.document.querySelector('.menuLateral');
                open.style.width = '0px';
                
                let setaEsquerda = window.document.querySelector('.seta_esquerda');
                setaEsquerda.style.opacity = '0';

                let setaDireita = window.document.querySelector('.seta_direita');
                setaDireita.style.opacity = '1';

                let tituloLateral = window.document.querySelector('.modelos_menu');
                tituloLateral.style.opacity = '0';

                let tituloBola = window.document.querySelector('.menu_titulo');
                tituloBola.style.opacity = '1';

                let cart = window.document.querySelector('.menu_cartao1');
                cart.style.width = '0px';

                let cart1 = window.document.querySelector('.menu_cartao1');
                cart1.style.height = '0px';

                let cart2 = window.document.querySelector('.menu_cartao2');
                cart2.style.width = '0px';

                let carta2= window.document.querySelector('.menu_cartao2');
                carta2.style.height = '0px';

                let cart3 = window.document.querySelector('.menu_cartao3');
                cart3.style.width = '0px';

                let cartao3 = window.document.querySelector('.menu_cartao3');
                cartao3.style.height = '0px';
    


            }
   
        </script>

    </body>

</html>