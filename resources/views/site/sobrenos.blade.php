@extends('site.layouts.basico')

@section('titulo', 'sobrenos')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="box">
            <form action="formulario.php" method="POST">
                <fieldset>
                    <legend><b>Cadastro de Pessoas</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome Completo</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="cpf" id="cpf" class="inputUser" required>
                        <label for="cpf" class="labelInput">CPF</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">e-mail</label>
                    </div>
                    <br><br>
                    <label for="setor">Gênero</label>
                    <select class="setor_prefeitura" name="setor" id="setor">
                        <option value="sel">--Selecione--</option>
                        <option value="msc">Masculino</option>
                        <option value="fem">Feminino</option>
                        <option value="lgbt+">Outros</option> 
                    </select>
                    <br><br>                
                    <label for="data_nascimento" ><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento"  required>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="cidade" id="cidade" class="inputUser" required>
                        <label for="cidade" class="labelInput">Cidade</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="bairro" id="bairro" class="inputUser" required>
                        <label for="bairro" class="labelInput">Bairro</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="rua" id="rua" class="inputUser" required>
                        <label for="rua" class="labelInput">Rua</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="number" name="numero" id="numero" class="inputUser" required>
                        <label for="numero" class="labelInput">Numero</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="complemento" id="complemento" class="inputUser" required>
                        <label for="complemento" class="labelInput">Complemento</label>
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
        top: 70%;
        left: 50%;
        transform: translate(-50%,-50%);
        background-color: rgba(0, 0, 0, 0.8);
        padding: 15px;
        border-radius: 15px;
        width: 25%;
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