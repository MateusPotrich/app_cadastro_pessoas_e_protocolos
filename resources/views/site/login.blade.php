<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body{
             font-family: Arial, Helvetica, sans-serif;
             background-image: linear-gradient(to right, blue, white);
         }
         .box{
             color: white;
             position: absolute;
             top: 50%;
             left: 50%;
             transform: translate(-50%,-50%);
             background-color: rgba(0, 0, 0, 0.8);
             padding: 15px;
             border-radius: 15px;
             width: 30%;
         }
         fieldset{
             border: 3px solid dodgerblue;
         }
         legend{
             border: 1px solid dodgerblue;
             padding: 10px;
             text-align: center;
             background-color: dodgerblue;
             border-radius: 8px;
         }
         .inputBox{
             position: relative;
         }
         .inputUser{
             background: none;
             border: none;
             border-bottom: 1px solid white;
             outline: none;
             color: white;
             font-size: 15px;
             width: 100%;
             letter-spacing: 2px;
         }
         .labelInput{
             position: absolute;
             top: 0px;
             left: 0px;
             pointer-events: none;
             transition: .5px;
         }
         .inputUser:focus ~ .labelInput,
         .inputUser:valid ~ .labelInput{
             top: -20px;
             font-size: 12px;
             color: dodgerblue;
         }
         #data_nascimento{
             border: none;
             padding: 8px;
             border-radius: 10px;
             outline: none;
             font-size: 15px;
         }
         .submit{
             background-image: linear-gradient(to right,blue, white);
             width: 100%;
             border: none;
             padding: 15px;
             color: white;
             font-size: 15px;
             cursor: pointer;
             border-radius: 15px;
         }
         .submit:hover{
             background-image: linear-gradient(to right, white, blue);
         }
           
     </style>
 </head>
 <body>
     <div class="box">
         <form action="testloguin.php">
             <fieldset>
                 <legend><b>Login</b></legend>
                 <br><br>
                 <input type="text" name= "nome" placeholder="Nome" class="inputUser">
                 <br><br>
                 <input type="password" name="senha" placeholder="Senha" class="inputUser">
                 <br><br>
                 <a href="/"><input class="submit" type="button" name="submit" value="Entrar"></a>
                 <br><br>
                 <input type="button" class="submit"  value="Primeiro acesso">
             </fieldset>
         </form>
     </div>
     
 </body>
 </html>