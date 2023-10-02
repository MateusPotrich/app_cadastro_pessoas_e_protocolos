<h3>Analise de Protocolo</h3>

@php
    /*
    if(!<condição>) {} //enquanto o if executa se o retorno for true
    */
@endphp

@isset($fornecedores)
    @forelse ($fornecedores as $indice => $fornecedor)
        Fornecedores: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}
        <hr>
    @empty
        Não existem fornecedores cadastrados!!!
    
    @endforelse   
       
    
@endisset



