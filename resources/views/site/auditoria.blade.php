<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auditoria</title>
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
        .labelAudit{
            position: center;
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
        .data{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #search_audit{
            background-image: linear-gradient(to right,blue, white);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 15px;
        }
        #search_audit:hover{
            background-image: linear-gradient(to right, white, blue);
        }
        .return {
            background-image: linear-gradient(to right,blue, white);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 15px;    
        }
        .return:hover {
            background-image: linear-gradient(to right, white, blue);
        }
    </style>
</head>
<body>
    <div class="box">
       <form action="auditoria.html" method="post">
            <fieldset>
                 <legend>Auditar</legend>
                 <br><br>
                 <div class="inputBox" >
                    <label for="atendente" class="labelInput">Nome do atendente autor do protocolo</label>
                    <br><br>
                    <input type="text" name="atendente" id="atendente" class="inputUser">
                 </div>
                 <br>
                 <label for="data_inicial">Data inicial</label>
                 <input type="date" name="data_i" id="data_i" class="data">
                 <br><br>
                 <label for="data_final">Data final</label>
                 <input type="date" name="data_final" id="data_final" class="data">
                 <br><br>
                 <div class="inputBox">
                    <input type="button" name="search_audit" id="search_audit" class="inputUser" value="Consultar Protocolos">
                </div>
            </fieldset>
       </form>
       <br>
       <a href="/"><button class="return" name="return" id="return">Voltar</button></a>
    </div>
</body>
</html>