<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<style>

    @import url('https://fonts.googleapis.com/css2?family=Rancho&display=swap');

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    img{
        width:100%;
        height: 100vh;
    }
    .title{
        position: absolute;
        top: 10%;
        left: 50%;
        transform: translate(-50%,50%);
        color: #fff;
        font-size: 100px;
        font-family: 'Rancho', cursive;
        
        

    }

    p{

        text-shadow: #000 2px 3px 5px;

    }

   .box_image{
       position: absolute;
       top:50%;
       left: 50%;
       transform: translate(-50%,-50%);
       /* background-color: blueviolet;*/
       display: flex;
       align-items: center;
       justify-content: center;
       width: 100%;
       height: 430px;
       gap: 70px;
       flex-wrap: wrap;
   }
   .box1 img{
       width: 200;
       height: 200px;
       transition: all 0.6s ease-in-out;
       box-shadow: 15px 15px 15px 1px rgba(0, 0, 0, 0.308);
       
   }

   @media (max-width: 850px) {

    .box1 img{
        
        width: 100px;
        transition: all 0.6s ease-in-out;
    }
    .title{
        font-size: 27px;
       
        
       
    }
    .box_image{
        position: absolute;
        top: 49%;
    }
    
       
   }
   @media (max-width: 460px) {

       .box_image{
           position: absolute;
           top: 60%;
       }
       .box1 img{
           width: 80px;
           height: 80px;
       }
       .title{
           font-size: 15.1px;
       }
   }
   
    

   
       
   
   
</style>
<body>
    <div style="width: 100%; height: 100vh; object-fit: cover;" class="imagem_bg">
        
        <img src="img_tela.png" alt="">

        <div class="title">
          <p> Selecione um modelo</p> 
        </div>

        <div class="box_image">
                
            <div  class="box1">
                <a    href="página.php"><img onmouseover="aumentar1()" onmouseout="diminuir1()" class="cartaoNatal1" src="cartão_1.png" alt=""></a>

            </div>
        
        
            <div class="box1">
                    
                <a  href="página2.php"><img onmouseover="aumentar2()" onmouseout="diminuir2()" class="cartaoNatal2"   src="cartão_2.png" alt=""></a>

            </div>

            <div class="box1">
                <a href="página3.php"><img onmouseover="aumentar3()" onmouseout="diminuir3()" class="cartaoNatal3"  src="cartão_3.png" alt=""></a>
            </div>

        

            <div class="box1">
                    
                <a  href="página4.php"><img onmouseover="aumentar4()" onmouseout="diminuir4()"  class="cartaoNatal4" src="cartão_4.png" alt=""></a>

            </div>
            
        </div>

    
       
    </div>



     
 <!--Área do JS-->

    <script>
        function aumentar1() {

            let aum1 = window.document.querySelector('.cartaoNatal1');
            aum1.style.height = '300px';


              
            //let am = window.document.querySelector('.cartaoNatal1');
            //am.style.width = '210px';
            
            

           

        }

        function diminuir1() {

            let dim1 = window.document.querySelector('.cartaoNatal1');
            dim1.style.height ='200px';
           
            //let at = window.document.querySelector('.cartaoNatal1');
            //at.style.width = '200px';

           

        }

        function aumentar2() {

            let aum2 = window.document.querySelector('.cartaoNatal2');
            aum2.style.height = '300px';

             
            //let a = window.document.querySelector('.cartaoNatal2');
            //a.style.width = '210px';
          

           

        }

        function diminuir2() {

            let dim2 = window.document.querySelector('.cartaoNatal2');
            dim2.style.height ='200px';

            
            //let di = window.document.querySelector('.cartaoNatal2');
            //di.style.width = '200px';
          

           

        }
        function aumentar3() {

            let aum3 = window.document.querySelector('.cartaoNatal3');
            aum3.style.height = '300px';

            
            //let au = window.document.querySelector('.cartaoNatal3');
            //au.style.width = '210px';
           

           

        }

        function diminuir3() {

            let dim3 = window.document.querySelector('.cartaoNatal3');
            dim3.style.height ='200px';

            //let dim = window.document.querySelector('.cartaoNatal3');
            //dim.style.width = '200px';
            

           

        }
        function aumentar4() {

            let aum4 = window.document.querySelector('.cartaoNatal4');
            aum4.style.height = '300px';
            
            //let aum = window.document.querySelector('.cartaoNatal4');
            //aum.style.width = '210px';
           

           

        }

        function diminuir4() {

            let dim4 = window.document.querySelector('.cartaoNatal4');
            dim4.style.height ='200px';

            //let aum = window.document.querySelector('.cartaoNatal4');
            //aum.style.width = '200px';
            

           

        }
    </script>



</body>
</html>