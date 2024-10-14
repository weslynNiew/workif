<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Grupo WorkIF">
    <meta name="generator" content="ifpr 1.0">
    <title>WorkIF</title>

    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;

        }

        .card-icones {
            background-color: rgb(59, 87, 4);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .card-icones:hover {
            background-color: rgb(150, 200, 52);
            transform: scale(1.05);
        }

        a {
            text-decoration: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .border-custom {
            border-color: black !important;
            border-width: 1px !important;
        }

        .cor-bege {
            background-color: rgb(236, 235, 233) !important
        }

        .btn-primary,
        .btn-primary:hover,
        .btn-primary:active,
        .bs-btn-border-color,
        .btn-primary:visited {
            background-color: rgba(59, 87, 4, 255) !important;
        }

        .btn-primary {
            --bs-btn-color: #fff;
            --bs-btn-bg: rgba(59, 87, 4, 255) !important;
            --bs-btn-border-color: rgba(59, 87, 4, 255) !important;;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: rgb(32, 87, 4) !important;;
            --bs-btn-hover-border-color: rgba(59, 87, 4, 255) !important;;
            --bs-btn-focus-shadow-rgb: 49, 132, 253;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: rgba(59, 87, 4, 255) !important;;
            --bs-btn-active-border-color: rgba(59, 87, 4, 255) !important;;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: rgba(59, 87, 4, 255) !important;;
            --bs-btn-disabled-border-color: rgba(59, 87, 4, 255) !important;;
        }

        .btn .fa-user {
            transition: color 0.3s ease !important;
            font-size: 1.5em;
        }

        .btn:hover .fa-user {
            color: rgb(59, 87, 4, 255) !important;
        }
    </style>
    <style type="text/css">
        p.Artigo_Legal {
            font-size: 12pt;
            font-family: Calibri;
            text-align: justify;
            word-wrap: normal;
            margin: 6pt;
            text-indent: 12.5mm;
            counter-increment: artigo-n1;
            counter-reset: paragrafo_legal romano_maiusculo letra_minuscula;
        }

        p.Artigo_Legal:before {
            content: "Art. " counter(artigo-n1) "º ";
            display: inline-block;
            font-weight: normal;
        }

        p.Citacao {
            font-size: 10pt;
            font-family: Calibri;
            word-wrap: normal;
            margin: 4pt 0 4pt 160px;
            text-align: justify;
        }

        p.Item_Alinea_Letra {
            font-size: 12pt;
            font-family: Calibri;
            text-indent: 0mm;
            text-align: justify;
            word-wrap: normal;
            margin: 6pt 6pt 6pt 120px;
            counter-increment: letra_minuscula;
        }

        p.Item_Alinea_Letra:before {
            content: counter(letra_minuscula, lower-latin) ") ";
            display: inline-block;
            width: 5mm;
            font-weight: normal;
        }

        p.Item_Inciso_Romano {
            font-size: 12pt;
            font-family: Calibri;
            text-align: justify;
            word-wrap: normal;
            text-indent: 0mm;
            margin: 6pt 6pt 6pt 120px;
            counter-increment: romano_maiusculo;
            counter-reset: letra_minuscula;
        }

        p.Item_Inciso_Romano:before {
            content: counter(romano_maiusculo, upper-roman) " - ";
            display: inline-block;
            width: 15mm;
            font-weight: normal;
        }

        p.Item_Nivel1 {
            text-transform: uppercase;
            font-weight: bold;
            background-color: #e6e6e6;
            font-size: 12pt;
            font-family: Calibri;
            text-align: justify;
            word-wrap: normal;
            text-indent: 0;
            margin: 6pt;
            counter-increment: item-n1;
            counter-reset: item-n2 item-n3 item-n4 item-n5 romano_maiusculo letra_minuscula;
        }

        p.Item_Nivel1:before {
            content: counter(item-n1) ".";
            display: inline-block;
            width: 25mm;
            font-weight: normal;
        }

        p.Item_Nivel2 {
            font-size: 12pt;
            font-family: Calibri;
            text-indent: 0mm;
            text-align: justify;
            word-wrap: normal;
            margin: 6pt;
            counter-increment: item-n2;
            counter-reset: item-n3 item-n4 item-n5 romano_maiusculo letra_minuscula;
        }

        p.Item_Nivel2:before {
            content: counter(item-n1) "." counter(item-n2) ".";
            display: inline-block;
            width: 25mm;
            font-weight: normal;
        }

        p.Item_Nivel3 {
            font-size: 12pt;
            font-family: Calibri;
            text-indent: 0mm;
            text-align: justify;
            word-wrap: normal;
            margin: 6pt;
            counter-increment: item-n3;
            counter-reset: item-n4 item-n5 romano_maiusculo letra_minuscula;
        }

        p.Item_Nivel3:before {
            content: counter(item-n1) "." counter(item-n2) "." counter(item-n3) ".";
            display: inline-block;
            width: 25mm;
            font-weight: normal;
        }

        p.Item_Nivel4 {
            font-size: 12pt;
            font-family: Calibri;
            text-indent: 0mm;
            text-align: justify;
            word-wrap: normal;
            margin: 6pt;
            counter-increment: item-n4;
            counter-reset: item-n5 romano_maiusculo letra_minuscula;
        }

        p.Item_Nivel4:before {
            content: counter(item-n1) "." counter(item-n2) "." counter(item-n3) "." counter(item-n4) ".";
            display: inline-block;
            width: 25mm;
            font-weight: normal;
        }

        p.Item_Nivel5 {
            font-size: 12pt;
            font-family: Calibri;
            text-indent: 0mm;
            text-align: justify;
            word-wrap: normal;
            margin: 6pt;
            counter-increment: item-n5;
            counter-reset: romano_maiusculo letra_minuscula;
        }

        p.Item_Nivel5:before {
            content: counter(item-n1) "." counter(item-n2) "." counter(item-n3) "." counter(item-n4) "." counter(item-n5) ".";
            display: inline-block;
            width: 30mm;
            font-weight: normal;
        }

        p.Paragrafo_Legal {
            font-size: 12pt;
            font-family: Calibri;
            text-align: justify;
            word-wrap: normal;
            margin: 6pt;
            text-indent: 12.5mm;
            counter-increment: paragrafo_legal;
            counter-reset: romano_maiusculo letra_minuscula;
        }

        p.Paragrafo_Legal:before {
            content: "§" counter(paragrafo_legal) "º ";
            display: inline-block;
            font-weight: normal;
        }

        p.Paragrafo_Numerado_Nivel1 {
            font-size: 12pt;
            font-family: Calibri;
            text-align: justify;
            word-wrap: normal;
            text-indent: 0mm;
            margin: 6pt;
            counter-increment: paragrafo-n1;
            counter-reset: paragrafo-n2 paragrafo-n3 paragrafo-n4 paragrafo-n5 romano_maiusculo letra_minuscula;
        }

        p.Paragrafo_Numerado_Nivel1:before {
            content: counter(paragrafo-n1) ".";
            display: inline-block;
            width: 25mm;
            font-weight: normal;
        }

        p.Paragrafo_Numerado_Nivel2 {
            font-size: 12pt;
            font-family: Calibri;
            text-indent: 0mm;
            text-align: justify;
            word-wrap: normal;
            margin: 6pt;
            counter-increment: paragrafo-n2;
            counter-reset: paragrafo-n3 paragrafo-n4 paragrafo-n5 romano_maiusculo letra_minuscula;
        }

        p.Paragrafo_Numerado_Nivel2:before {
            content: counter(paragrafo-n1) "." counter(paragrafo-n2) ".";
            display: inline-block;
            width: 25mm;
            font-weight: normal;
        }

        p.Paragrafo_Numerado_Nivel3 {
            font-size: 12pt;
            font-family: Calibri;
            text-indent: 0mm;
            text-align: justify;
            word-wrap: normal;
            margin: 6pt;
            counter-increment: paragrafo-n3;
            counter-reset: paragrafo-n4 paragrafo-n5 romano_maiusculo letra_minuscula;
        }

        p.Paragrafo_Numerado_Nivel3:before {
            content: counter(paragrafo-n1) "." counter(paragrafo-n2) "." counter(paragrafo-n3) ".";
            display: inline-block;
            width: 25mm;
            font-weight: normal;
        }

        p.Paragrafo_Numerado_Nivel4 {
            font-size: 12pt;
            font-family: Calibri;
            text-indent: 0mm;
            text-align: justify;
            word-wrap: normal;
            margin: 6pt;
            counter-increment: paragrafo-n4;
            counter-reset: paragrafo-n5 romano_maiusculo letra_minuscula;
        }

        p.Paragrafo_Numerado_Nivel4:before {
            content: counter(paragrafo-n1) "." counter(paragrafo-n2) "." counter(paragrafo-n3) "." counter(paragrafo-n4) ".";
            display: inline-block;
            width: 25mm;
            font-weight: normal;
        }

        p.Paragrafo_Numerado_Nivel5 {
            font-size: 12pt;
            font-family: Calibri;
            text-indent: 0mm;
            text-align: justify;
            word-wrap: normal;
            margin: 6pt;
            counter-increment: paragrafo-n5;
            counter-reset: romano_maiusculo letra_minuscula;
        }

        p.Paragrafo_Numerado_Nivel5:before {
            content: counter(paragrafo-n1) "." counter(paragrafo-n2) "." counter(paragrafo-n3) "." counter(paragrafo-n4) "." counter(paragrafo-n5) ".";
            display: inline-block;
            width: 30mm;
            font-weight: normal;
        }

        p.Tabela_Texto_8 {
            font-size: 8pt;
            font-family: Calibri;
            text-align: left;
            word-wrap: normal;
            margin: 0 3pt 0 3pt;
        }

        p.Tabela_Texto_Alinhado_Direita {
            font-size: 11pt;
            font-family: Calibri;
            text-align: right;
            word-wrap: normal;
            margin: 0 3pt 0 3pt;
        }

        p.Tabela_Texto_Alinhado_Esquerda {
            font-size: 11pt;
            font-family: Calibri;
            text-align: left;
            word-wrap: normal;
            margin: 0 3pt 0 3pt;
        }

        p.Tabela_Texto_Alinhado_Justificado {
            font-size: 11pt;
            font-family: Calibri;
            text-align: justify;
            word-wrap: normal;
            margin: 0 3pt 0;
        }

        p.Tabela_Texto_Centralizado {
            font-size: 11pt;
            font-family: Calibri;
            text-align: center;
            word-wrap: normal;
            margin: 0 3pt 0;
        }

        p.Texto_Alinhado_Direita {
            font-size: 12pt;
            font-family: Calibri;
            text-align: right;
            word-wrap: normal;
            margin: 6pt;
        }

        p.Texto_Alinhado_Esquerda {
            font-size: 12pt;
            font-family: Calibri;
            text-align: left;
            word-wrap: normal;
            margin: 6pt;
        }

        p.Texto_Alinhado_Esquerda_Espacamento_Simples {
            font-size: 12pt;
            font-family: Calibri;
            text-align: left;
            word-wrap: normal;
            margin: 0;
        }

        p.Texto_Alinhado_Esquerda_Espacamento_Simples_Maiusc {
            font-size: 12pt;
            font-family: Calibri;
            text-align: left;
            text-transform: uppercase;
            word-wrap: normal;
            margin: 0;
        }

        p.Texto_Alinhado_Esquerda_Negrito_Maiusculo {
            font-weight: bold;
            font-size: 13pt;
            font-family: Calibri;
            text-align: left;
            text-transform: uppercase;
            word-wrap: normal;
        }

        p.Texto_Centralizado {
            font-size: 12pt;
            font-family: Calibri;
            text-align: center;
            word-wrap: normal;
            margin: 6pt;
        }

        p.Texto_Centralizado_Maiusculas {
            font-size: 13pt;
            font-family: Calibri;
            text-align: center;
            text-transform: uppercase;
            word-wrap: normal;
        }

        p.Texto_Centralizado_Maiusculas_Negrito {
            font-weight: bold;
            font-size: 13pt;
            font-family: Calibri;
            text-align: center;
            text-transform: uppercase;
            word-wrap: normal;
        }

        p.Texto_Espaco_Duplo_Recuo_Primeira_Linha {
            letter-spacing: 0.2em;
            font-weight: bold;
            font-size: 12pt;
            font-family: Calibri;
            text-indent: 25mm;
            text-align: justify;
            word-wrap: normal;
            margin: 6pt;
        }

        p.Texto_Fundo_Cinza_Maiusculas_Negrito {
            text-transform: uppercase;
            font-weight: bold;
            background-color: #e6e6e6;
            font-size: 12pt;
            font-family: Calibri;
            text-align: justify;
            word-wrap: normal;
            text-indent: 0;
            margin: 6pt;
        }

        p.Texto_Fundo_Cinza_Negrito {
            font-weight: bold;
            background-color: #e6e6e6;
            font-size: 12pt;
            font-family: Calibri;
            text-align: justify;
            word-wrap: normal;
            text-indent: 0;
            margin: 6pt;
        }

        p.Texto_Justificado {
            font-size: 12pt;
            font-family: Calibri;
            text-align: justify;
            word-wrap: normal;
            text-indent: 0;
            margin: 6pt;
        }

        p.Texto_Justificado_Maiusculas {
            font-size: 12pt;
            font-family: Calibri;
            text-align: justify;
            word-wrap: normal;
            text-indent: 0;
            margin: 6pt;
            text-transform: uppercase;
        }

        p.Texto_Justificado_Recuo_Primeira_Linha {
            font-size: 12pt;
            font-family: Calibri;
            text-indent: 25mm;
            text-align: justify;
            word-wrap: normal;
            margin: 6pt;
        }

        p.Texto_Justificado_Recuo_Primeira_Linha_Esp_Simples {
            font-size: 12pt;
            font-family: Calibri;
            text-indent: 25mm;
            text-align: justify;
            word-wrap: normal;
            margin: 0 0 0 6pt;
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center align-items-center cor-bege">

@auth
    @include('layouts.partials.navbarlogged')
@endauth

@guest
    @include('layouts.partials.navbar')
@endguest
<main class="form-signin cor-bege">

    @yield('content')

</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

@stack('js')
</body>

</html>
