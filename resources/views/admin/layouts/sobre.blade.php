@extends('admin.layouts.principal')

@section('content-main')

    {{'Página SOBRE'}}

    <h3 class="center">{{'Trabalho ANP-2'}}</h3>
    <p>1. Fazer um site Laravel com pelo menos:</p>
    <ul>
        <li>&emsp;01 migration (a tabela deve ter pelo menos 3 campos de tipos diferentes),</li>
        <li>&emsp;01 model,</li>
        <li>&emsp;01 controller</li>
    </ul>
    <p>Deve ter pelo menos 2 views, uma que seja um formulário para inserção de dados no banco de dados e uma
        view que mostre uma tabela listando os dados que estão no BD.</p>

    <p>O formulário deve ser validado com uma Form Request (use as regras de validação que você quiser,
        pelo menos 1 regra de validação pra cada campo).</p>

    <p>Coloque o Laravel em Português.</p>

@endsection
