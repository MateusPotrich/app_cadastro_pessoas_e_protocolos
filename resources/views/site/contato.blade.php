@extends('site.layouts.basico')

@section('titulo', $titulo)
    
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="box">
            <form action="protocolo.php" method="POST">
                <fieldset>
                    <legend><b>Registro de Protocolo</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="contribuinte" id="contribuinte" class="inputUser" required>
                        <label for="contribuinte" class="labelInput">Contribuinte</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="sac_contribuinte" id="sac_contribuinte" class="inputUser" required>
                        <label for="sac_contribuinte" class="labelInput">Sac do Contribuinte</label>
                    </div>
                    <br><br>
                    <label for="setor">Selecione o Setor</label>
                    <select class="setor_prefeitura" name="setor" id="setor">
                        <option value="sle">--Selecione--</option>
                        <option value="cult">Cultura e Lazer</option>
                        <option value="fzd">Fazenda</option>
                        <option value="adm">Administrativo</option>
                        <option value="fin">Finanças</option>
                        <option value="jurd">Júridico</option>
                        <option value="plan">Planejamento e desenvolvimento</option>
                        <option value="SP_OSP">Serviços públicos, obras e urbanismo</option>
                        <option value="edu">Educação</option>
                        <option value="sau">Saúde</option>
                        <option value="transp">Transporte</option>
                        <option value="mbr">Meio ambiente e Rural</option>
                        <option value="asstsoc">Assitência social</option>
                        <option value="tur">Turismo</option>
                    </select>
                    <br><br>
                    <label for="data" ><b>Data do Registro:</b></label>
                    <input type="date" name="data_r" id="data_r"  required>
                    <br><br>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                      </div>
                    <br><br>
                    <input type="submit" name="submit" id="submit" >
                </fieldset>
            </form>
            <br>
            <a href="/"><button class="return" name="return" id="return">Voltar</button></a>
        </div>
    </div>
@endsection
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
    #submit{
        background-image: linear-gradient(to right,blue, white);
        width: 100%;
        border: none;
        padding: 15px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 15px;
    }
    #submit:hover{
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