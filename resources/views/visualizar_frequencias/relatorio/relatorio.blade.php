@php
    $meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');
@endphp
    <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="pt-br">
<head>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
    <title>SEI/IFPR - 2850793 - Registro de Frequência</title>
</head>
<body>
<p class="Texto_Alinhado_Esquerda_Negrito_Maiusculo"><img alt="Timbre"
                                                          src="data:image/png;base64,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"/>
</p>

<p class="Texto_Alinhado_Esquerda_Negrito_Maiusculo">&nbsp;&nbsp;</p>
<p class="Texto_Centralizado_Maiusculas_Negrito">FORMUL&Aacute;RIO DE REGISTRO DE FREQU&Ecirc;NCIA</p>
<table border="1" cellpadding="1" cellspacing="1" style="width: 1013px;">
    <tbody>
    <tr>
        <td colspan="2" style="width: 1005px; background-color: rgb(0, 0, 0);">
            <p class="Tabela_Texto_Alinhado_Esquerda"><strong><span style="color: rgb(255, 255, 255);">1 &ndash; IDENTIFICA&Ccedil;&Atilde;O DO SERVIDOR</span></strong>
            </p>
        </td>
    </tr>
    <tr>
        <td style="width: 724px;">
            <p class="Tabela_Texto_Alinhado_Esquerda"><strong>NOME: {{$usuario->nome}}</strong></p>
        </td>
        <td style="width: 276px;">
            <p class="Tabela_Texto_Alinhado_Esquerda"><strong>MATRÍCULA SIAPE: {{$usuario->siape}}</strong></p>
        </td>
    </tr>
    <tr>
        <td style="width: 724px;">
            <p class="Tabela_Texto_Alinhado_Esquerda"><strong>CARGO EFETIVO: {{$usuario->cargo_efetivo}}</strong></p>
        </td>
        <td style="width: 276px;">
            <p class="Tabela_Texto_Alinhado_Esquerda"><strong>Carga horária semanal: {{$usuario->carga_horaria_semanal}}
                    h</strong></p>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="width: 1005px;">
            <p class="Tabela_Texto_Alinhado_Esquerda"><strong>FUNÇÃO: {{$usuario->funcao}}</strong></p>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="width: 1005px;">
            <p class="Tabela_Texto_Alinhado_Esquerda"><strong>UNIDADE DE LOTA&Ccedil;&Atilde;O: Campus Curitiba</strong>
            </p>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="width: 1005px;">
            <p class="Tabela_Texto_Alinhado_Esquerda"><strong>UNIDADE DE EFETIVO EXERC&Iacute;CIO: Campus
                    Curitiba</strong></p>
        </td>
    </tr>
    </tbody>
</table>
<table border="1" style="width:1007px;">
    <colgroup>
    </colgroup>
    <tbody>
    <tr>
        <td style="width: 354px;">
            <p class="Texto_Justificado" dir="ltr"><b id="docs-internal-guid-03294e90-7fff-c15a-90a5-983972753dbf">2
                    &ndash; REGISTRO DE FREQU&Ecirc;NCIA RELATIVO AO M&Ecirc;S:</b></p>
        </td>
        <td style="width: 637px;">&nbsp;{{ $meses[request('mes') - 1] }}</td>
    </tr>
    <tr>
        <td colspan="2">
            <p class="Texto_Centralizado_Maiusculas" dir="ltr"><b
                    id="docs-internal-guid-b39837ce-7fff-56da-b04f-99ba17de19ca">&nbsp;TABELA DE DISTRIBUI&Ccedil;&Atilde;O
                    DO HOR&Aacute;RIO SEMANAL</b></p>
        </td>
    </tr>
    </tbody>
</table>

<table border="1" cellpadding="1" cellspacing="1" style="width: 1006px;">
    <tbody>
    <tr>
        <td style="vertical-align: baseline; width: 182px; background-color: rgb(0, 0, 0);">
            <p class="Texto_Justificado"><span style="color:#FFFFFF;"><strong>SEGUNDA-FEIRA</strong></span></p>
        </td>
        <td style="vertical-align: baseline; width: 162px; background-color: rgb(0, 0, 0);">
            <p class="Texto_Justificado"><span style="color:#FFFFFF;"><strong>TER&Ccedil;A-FEIRA</strong></span></p>
        </td>
        <td style="vertical-align: baseline; width: 156px; background-color: rgb(0, 0, 0);">
            <p class="Texto_Justificado"><span style="color:#FFFFFF;"><strong>QUARTA-FEIRA</strong></span></p>
        </td>
        <td style="vertical-align: baseline; width: 163px; background-color: rgb(0, 0, 0);">
            <p class="Texto_Justificado"><span style="color:#FFFFFF;"><strong>QUINTA-FEIRA</strong></span></p>
        </td>
        <td style="vertical-align: baseline; width: 162px; background-color: rgb(0, 0, 0);">
            <p class="Texto_Justificado"><span style="color:#FFFFFF;"><strong>SEXTA-FEIRA</strong></span></p>
        </td>
        <td style="width: 148px; vertical-align: baseline; background-color: rgb(0, 0, 0);">
            <p class="Texto_Justificado"><span style="color:#FFFFFF;"><strong>S&Aacute;BADO</strong></span></p>
        </td>
    </tr>
    <tr>
        <td style="vertical-align: baseline; width: 182px;">
            <p class="Texto_Justificado">&nbsp;</p>
        </td>
        <td style="vertical-align: baseline; width: 162px;">
            <p class="Texto_Justificado">&nbsp;</p>
        </td>
        <td style="vertical-align: baseline; width: 156px;">
            <p class="Texto_Justificado">&nbsp;</p>
        </td>
        <td style="vertical-align: baseline; width: 163px;">
            <p class="Texto_Justificado">&nbsp;</p>
        </td>
        <td style="vertical-align: baseline; width: 162px;">
            <p class="Texto_Justificado">&nbsp;</p>
        </td>
        <td style="width: 148px; vertical-align: baseline;">
            <p class="Texto_Justificado">&nbsp;</p>
        </td>
    </tr>
    <tr>
        <td style="vertical-align: baseline; width: 182px;">
            <p class="Texto_Justificado">&nbsp;</p>
        </td>
        <td style="vertical-align: baseline; width: 162px;">
            <p class="Texto_Justificado">&nbsp;</p>
        </td>
        <td style="vertical-align: baseline; width: 156px;">
            <p class="Texto_Justificado">&nbsp;</p>
        </td>
        <td style="vertical-align: baseline; width: 163px;">
            <p class="Texto_Justificado">&nbsp;</p>
        </td>
        <td style="vertical-align: baseline; width: 162px;">
            <p class="Texto_Justificado">&nbsp;</p>
        </td>
        <td style="width: 148px; vertical-align: baseline;">
            <p class="Texto_Justificado">&nbsp;</p>
        </td>
    </tr>
    <tr>
        <td style="vertical-align: baseline; width: 182px;">
            <p class="Texto_Justificado">&nbsp;</p>
        </td>
        <td style="vertical-align: baseline; width: 162px;">
            <p class="Texto_Justificado">&nbsp;</p>
        </td>
        <td style="vertical-align: baseline; width: 156px;">
            <p class="Texto_Justificado">&nbsp;</p>
        </td>
        <td style="vertical-align: baseline; width: 163px;">
            <p class="Texto_Justificado">&nbsp;</p>
        </td>
        <td style="vertical-align: baseline; width: 162px;">
            <p class="Texto_Justificado">&nbsp;</p>
        </td>
        <td style="width: 148px; vertical-align: baseline;">
            <p class="Texto_Justificado">&nbsp;</p>
        </td>
    </tr>
    </tbody>
</table>

<p class="Texto_Justificado">&nbsp;</p>

<table border="1" class="table table-striped w-100">
    <tbody>
    <tr>
        <td class="border-custom" colspan="1" rowspan="2" style="background-color: rgb(59, 87, 4);">
            <p class="Tabela_Texto_Alinhado_Justificado">&nbsp; <span style="color:#FFFFFF;"><strong>&nbsp;DIA</strong></span>
            </p>
        </td>
        @for ($i = 1; $i <= 3; $i++)
            <td class="border-custom" colspan="3" rowspan="1" style="background-color: rgb(59, 87, 4);">
                <p class="Tabela_Texto_Alinhado_Justificado"><span style="color:#FFFFFF;"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {{ $i }}º Período</strong></span>
                </p>
            </td>
        @endfor
        <td class="border-custom" style="background-color: rgb(59, 87, 4);">
            <p class="Tabela_Texto_Alinhado_Justificado"><span style="color:#FFFFFF;"><strong>&nbsp; &nbsp; &nbsp;TOTAL HORAS</strong></span>
            </p>
        </td>
    </tr>
    <tr>
        @for ($i = 1; $i <= 3; $i++)
            <td class="border-custom" style="background-color: rgb(59, 87, 4);">
                <p class="Tabela_Texto_Alinhado_Justificado"><span
                        style="color:#FFFFFF;"><strong>&nbsp; &nbsp; Entrada</strong></span></p>
            </td>
            <td class="border-custom" style="background-color: rgb(59, 87, 4);">
                <p class="Tabela_Texto_Alinhado_Justificado"><span
                        style="color:#FFFFFF;"><strong>&nbsp; &nbsp; Saída</strong></span></p>
            </td>
            <td class="border-custom" style="background-color: rgb(59, 87, 4);">
                <p class="Tabela_Texto_Alinhado_Justificado"><span
                        style="color:#FFFFFF;"><strong>&nbsp; Ocorrência</strong></span></p>
            </td>
        @endfor
        <td class="border-custom" style="background-color: rgb(59, 87, 4);">
            <p class="Tabela_Texto_Alinhado_Justificado">&nbsp;</p>
        </td>
    </tr>

    @foreach ($dadosDoAno as $mes => $dadosDoMes)
        {{ $mes }}
        @if($mes == (int) request('mes'))
            <tr>
                <td colspan="11" style="background-color: rgb(237, 255, 204); text-align: center;">
                    <strong>Mês: {{$meses[$mes - 1]}}</strong>
                </td>
            </tr>

            @foreach ($dadosDoMes as $dia => $pontosPorDia)
                <tr>
                    <td class="border-custom">
                        <p class="Tabela_Texto_Alinhado_Justificado">{{ $dia }}</p>
                    </td>

                    @php
                        $totalMinutos = 0;
                    @endphp

                    @for ($periodo = 1; $periodo <= 3; $periodo++)
                        @if (isset($pontosPorDia[$periodo]))
                            @foreach ($pontosPorDia[$periodo] as $ponto)
                                <td class="border-custom">
                                    <p class="Tabela_Texto_Alinhado_Justificado">@if(empty($ponto['ocorrencia']))
                                            {{ isset($ponto['created_at']) ? $ponto['created_at'] : '' }}
                                        @endif</p>
                                </td>
                                <td class="border-custom">
                                    <p class="Tabela_Texto_Alinhado_Justificado">@if(empty($ponto['ocorrencia']))
                                            {{ isset($ponto['saida']) ? $ponto['saida'] : '' }}
                                        @endif</p>
                                </td>
                                <td class="border-custom">
                                    <p class="Tabela_Texto_Alinhado_Justificado">{{ isset($ponto['ocorrencia']) ? $ponto['ocorrencia'] : '' }}
                                    </p>
                                </td>
                                @php
                                    $totalMinutos += isset($ponto['totalHoras']) ? $ponto['totalHoras'] : 0;
                                @endphp
                            @endforeach
                        @else
                            <td class="border-custom">
                                <p class="Tabela_Texto_Alinhado_Justificado">&nbsp;</p>
                            </td>
                            <td class="border-custom">
                                <p class="Tabela_Texto_Alinhado_Justificado">&nbsp;</p>
                            </td>
                            <td class="border-custom">
                                <p class="Tabela_Texto_Alinhado_Justificado">-</p>
                            </td>
                        @endif
                    @endfor

                    @php
                        // Calcula as horas e minutos totais a partir do total de minutos
                        $horas = floor($totalMinutos / 60);
                        $minutos = $totalMinutos % 60;
                        $formatoHoraMinuto = sprintf('%dh %dmin', $horas, $minutos);
                    @endphp

                    <td class="border-custom">
                        <p class="Tabela_Texto_Alinhado_Justificado">{{ $formatoHoraMinuto }}</p>
                    </td>
                </tr>
            @endforeach

            <tr>
                <td class="border-custom" colspan="10">
                    <p class="Tabela_Texto_Alinhado_Justificado"><strong>Total Geral do Mês</strong></p>
                </td>
                <td class="border-custom">
                    @php
                        $totalGeralHorasMes = 0;
                        foreach ($dadosDoMes as $pontosPorDia) {
                            foreach ($pontosPorDia as $periodo => $pontos) {
                                foreach ($pontos as $ponto) {
                                    $totalGeralHorasMes += isset($ponto['totalHoras']) ? $ponto['totalHoras'] : 0;
                                }
                            }
                        }

                        $totalGeralHorasMesFormatado = sprintf('%dh %dmin', floor($totalGeralHorasMes / 60), $totalGeralHorasMes % 60);
                    @endphp
                    <p class="Tabela_Texto_Alinhado_Justificado">{{ $totalGeralHorasMesFormatado }}</p>
                </td>
            </tr>
        @endif
    @endforeach
    </tbody>
</table>


<p class="Tabela_Texto_Alinhado_Justificado">&nbsp;</p>
<table border="1" cellpadding="1" cellspacing="1" style="width: 927px;">
    <tbody>
    <tr>
        <td style="background-color: rgb(0, 0, 0); width: 922px;">
            <p class="Texto_Justificado"><span
                    style="color:#FFFFFF;"><strong>3 &ndash; OBSERVA&Ccedil;&Otilde;ES:</strong></span></p>
        </td>
    </tr>
    <tr>
        <td style="width: 922px;">
            <ol>
                <li dir="ltr">
                    <p class="Texto_Justificado" dir="ltr">Documentos que sejam utilizados para justificar e comprovar
                        motiva&ccedil;&atilde;o para eventuais aus&ecirc;ncias dever&atilde;o ser JUNTADOS ao processo
                        de Registro de Frequ&ecirc;ncia com a indica&ccedil;&atilde;o conforme &nbsp;legenda;</p>
                </li>
                <li dir="ltr">
                    <p class="Texto_Justificado" dir="ltr">Atestados m&eacute;dicos de at&eacute; 05 dias dever&atilde;o
                        ser encaminhados ao GT Pessoas da Unidade para registro no SIAPE SA&Uacute;DE. Atestados m&eacute;dicos
                        superiores a 5 dias, dever&atilde;o ser encaminhados ao SIASS (<a
                            href="mailto:agendamento.siass@utfpr.edu.br">agendamentosiass@ifpr.edu.br</a>) para
                        procedimentos de agendamento de per&iacute;cia m&eacute;dica.</p>
                </li>
            </ol>

            <ol start="3">
                <li dir="ltr">
                    <p class="Texto_Justificado" dir="ltr">As compensa&ccedil;&otilde;es de hor&aacute;rio dever&atilde;o
                        ser regularizadas at&eacute; o m&ecirc;s subsequente ao evento;</p>
                </li>
                <li dir="ltr">
                    <p class="Texto_Justificado" dir="ltr">O processo de Registro de Frequ&ecirc;ncia dos servidores do
                        IFPR dever&aacute; ser &nbsp;aberto no SEI anualmente, pela sua chefia imediata atual. Todos os
                        meses, os &ldquo;formul&aacute;rios de registro de frequ&ecirc;ncia &ndash; IFPR&rdquo; ser&atilde;o
                        agrupados no mesmo processo, devidamente preenchidos, e posteriormente encaminhados,
                        MENSALMENTE, para assinatura digital da chefia imediata at&eacute; o 5&ordm; dia &uacute;til do
                        m&ecirc;s subsequente;</p>
                </li>
                <li dir="ltr">
                    <p class="Texto_Justificado" dir="ltr">No final do ano, o processo deve ser encerrado e anexado ao
                        novo processo do ano subsequente;</p>
                </li>
                <li dir="ltr">
                    <p class="Texto_Justificado" dir="ltr">O processo de Registro de Frequ&ecirc;ncia &nbsp;dos
                        servidores do IFPR dever&aacute; acompanhar o servidor em caso de movimenta&ccedil;&atilde;o de
                        qualquer esp&eacute;cie.</p>
                </li>
            </ol>
        </td>
    </tr>
    </tbody>
</table>

<p class="Texto_Justificado">&nbsp;</p>
<table border="1" cellpadding="1" cellspacing="1" style="margin-left: 3pt; margin-right: auto; width: 1018px;">
    <tbody>
    <tr>
        <td style="background-color: rgb(0, 0, 0);">
            <p class="Tabela_Texto_Alinhado_Justificado"><span style="color:#FFFFFF;"><strong>POSSIBILIDADE DE OCORR&Ecirc;NCIA</strong></span>
            </p>
        </td>
        <td style="background-color: rgb(0, 0, 0);">
            <p class="Tabela_Texto_Alinhado_Justificado"><span
                    style="color:#FFFFFF;"><strong>SIGLA/CODIGO</strong></span></p>
        </td>
        <td style="background-color: rgb(0, 0, 0); width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado"><span style="color:#FFFFFF;"><strong>LEGISLA&Ccedil;&Atilde;O APLIC&Aacute;VEL</strong></span>
            </p>
        </td>
        <td style="background-color: rgb(0, 0, 0); width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado"><span style="color:#FFFFFF;"><strong>ANEXAR<br/>
			COMPROVANTE&nbsp;</strong></span></p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">ABONO DA CHEFIA POR MOTIVO DE SERVI&Ccedil;O EXTERNO</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">ABONO</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">&nbsp;</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">AFASTAMENTO PARA MANDATO ELETIVO</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">AME</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/90, Art. 94 e altera&ccedil;&otilde;es posteriores</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">AFASTAMENTO PARA P&Oacute;S GRADUA&Ccedil;&Atilde;O STRICTO
                SENSU</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">APG</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/90, Art. 96-A e altera&ccedil;&otilde;es
                posteriores</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">AFASTAMENTO PREVENTIVO DISCIPLINAR</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">APD</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/90, Art. 147 e altera&ccedil;&otilde;es
                posteriores</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">N&Atilde;O</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">AFASTAMENTO ELEITORAL</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">AE</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei n. 8.112/90, Art. 97 e altera&ccedil;&otilde;es
                posteriores</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">ATESTADO M&Eacute;DICO &ndash; INFERIOR A 05 DIAS</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">AM</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/90, Art. 202 e altera&ccedil;&otilde;es
                posteriores</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">N&Atilde;O</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">CESS&Atilde;O</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">CESS&Atilde;O</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/90, Art. 18 e altera&ccedil;&otilde;es posteriores</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">COMPENSA&Ccedil;&Atilde;O DE JORNADA DE TRABALHO</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">CJT</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/90, Art. 44 e altera&ccedil;&otilde;es posteriores</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">N&Atilde;O</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">CURSO DE CAPACITA&Ccedil;&Atilde;O INSTITUCIONAL</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">CCI</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">-</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">DOA&Ccedil;&Atilde;O DE SANGUE</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">DS</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/90, Art. 97 e altera&ccedil;&otilde;es posteriores</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">EXAME VESTIBULAR</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">EV</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">-</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">F&Eacute;RIAS HOMOLOGADAS</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">FH</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 77 e altera&ccedil;&otilde;es
                posteriores</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">N&Atilde;O</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">FALTA INJUSTIFICADA</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">FI</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/90, Art. 44, inciso I</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">N&Atilde;O</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">GREVE (MOVIMENTOS PAREDISTAS)</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">GREVE</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">-</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">N&Atilde;O</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">HOR&Aacute;RIO ESPECIAL PARA LACTANTE</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">HEL</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 209 e altera&ccedil;&otilde;es
                posteriores</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">N&Atilde;O</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LICEN&Ccedil;A CAPACITA&Ccedil;&Atilde;O</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LC</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei n&ordm; 8.112/90, Art 81, inciso V, 87 e 102, inciso VIII,
                al&iacute;nea &ldquo;e&rdquo;</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LICEN&Ccedil;A SEM VENCIMENTOS PARA ACOMPANHAMENTO DE C&Ocirc;NJUGE</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LSVAC</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 84, &sect; 1&ordm; e altera&ccedil;&otilde;es
                posteriores</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LICEN&Ccedil;A POR MOTIVO DE DOEN&Ccedil;A EM PESSOA DA FAM&Iacute;LIA</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LMDPF</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 83 e altera&ccedil;&otilde;es
                posteriores</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LICEN&Ccedil;A GALA</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LG</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 97 e altera&ccedil;&otilde;es
                posteriores</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LICEN&Ccedil;A NOJO</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LN</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 97 e altera&ccedil;&otilde;es
                posteriores</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LICEN&Ccedil;A GESTANTE</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LG</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 207 e altera&ccedil;&otilde;es
                posteriores</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LICEN&Ccedil;A PATERNIDADE</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LP</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 102 e altera&ccedil;&otilde;es
                posteriores</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LICEN&Ccedil;A PARA TRATAR DE INTERESSES PARTICULARES</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LTIP</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 81 e altera&ccedil;&otilde;es
                posteriores</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LICEN&Ccedil;A PARA TRATAMENTO DE SA&Uacute;DE</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LTS</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112, Art.202 e altera&ccedil;&otilde;es posteriores</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">N&Atilde;O</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LICEN&Ccedil;A PARA O SERVI&Ccedil;O MILITAR</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LSM</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 85 e altera&ccedil;&otilde;es
                posteriores</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LICEN&Ccedil;A PARA DESEMPENHO DE MANDATO CLASSISTA</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LDMC</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 94 e altera&ccedil;&otilde;es
                posteriores</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LICEN&Ccedil;A PARA ATIVIDADE POL&Iacute;TICA</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LAP</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 86 e altera&ccedil;&otilde;es
                posteriores</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">DECLARA&Ccedil;&Atilde;O DE COMPARECIMENTO</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">DECL</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">INSTRU&Ccedil;&Atilde;O NORMATIVA N&ordm; 2, DE 12 DE SETEMBRO
                DE 2018</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">TRABALHO REMOTO - COVID 19</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">387</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Registro no Siapenet</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">ABONO DA CHEFIA COM JUSTIFICATIVA</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LIB/AB</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Decreto n&ordm; 1.590, de 10 de agosto de 1995</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">N&Atilde;O</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">HOR&Aacute;RIO ESPECIAL PARA ESTUDANTE</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">HEE</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Portaria de Concess&atilde;o</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">A&Ccedil;&Atilde;O DE DESENVOLVIMENTO EM SERVI&Ccedil;O -
                DIAS</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">ADS-D/ 393</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Decreto n&ordm; 9.991/2019</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">A&Ccedil;&Atilde;O DE DESENVOLVIMENTO EM SERVI&Ccedil;O -
                HORAS</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">ADS-H/ 394</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Decreto n&ordm; 9.991/2019</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LICEN&Ccedil;A CAPACITA&Ccedil;&Atilde;O - a&ccedil;&otilde;es
                de desenvolvimento presenciais ou &agrave; dist&acirc;ncia</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LC / 396</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Decreto n&ordm; 9.991/2019</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LICEN&Ccedil;A CAPACITA&Ccedil;&Atilde;O -&nbsp;elabora&ccedil;&atilde;o
                de monografia, trabalho de conclus&atilde;o de curso, disserta&ccedil;&atilde;o de mestrado, tese de
                doutorado, de livre-doc&ecirc;ncia ou est&aacute;gio p&oacute;s-doutoral</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LC / 397</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Decreto n&ordm; 9.991/2019</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LICEN&Ccedil;A CAPACITA&Ccedil;&Atilde;O -&nbsp;curso conjugado
                com atividades pr&aacute;ticas em posto de trabalho, em &oacute;rg&atilde;o ou entidade da administra&ccedil;&atilde;o
                p&uacute;blica direta ou indireta dos entes federativos, dos Poderes da Uni&atilde;o ou de outros pa&iacute;ses
                ou em organismos internacionais</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LC / 398</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Decreto n&ordm; 9.991/2019</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LICEN&Ccedil;A CAPACITA&Ccedil;&Atilde;O - curso conjugado com
                realiza&ccedil;&atilde;o de atividade volunt&aacute;ria em entidade que preste servi&ccedil;os dessa
                natureza no Pa&iacute;s</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">LC / 399</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Decreto n&ordm; 9.991/2019</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">Pesquisa,&nbsp;Extens&atilde;o e Inova&ccedil;&atilde;o</p>
        </td>
        <td>
            <p class="Tabela_Texto_Alinhado_Justificado">PEI</p>
        </td>
        <td style="width: 403px;">
            <p class="Tabela_Texto_Alinhado_Justificado">Portaria PROEPPI/2023</p>
        </td>
        <td style="width: 97px;">
            <p class="Tabela_Texto_Alinhado_Justificado">N&atilde;o</p>
        </td>
    </tr>
    </tbody>
</table>

<p class="Tabela_Texto_Alinhado_Justificado">&nbsp;</p>
<table border="1" cellpadding="1" cellspacing="1" style="width: 1009px;">
    <tbody>
    <tr>
        <td style="width: 1001px; background-color: rgb(0, 0, 0);">
            <p class="Texto_Justificado"><span style="color:#FFFFFF;">4 - TERMO DE RESPONSABILIDADE</span></p>
        </td>
    </tr>
    <tr>
        <td style="width: 1001px;">
            <p class="Texto_Justificado">Declaro, sob minha inteira responsabilidade, serem exatas e verdadeiras as
                informa&ccedil;&otilde;es prestadas neste&nbsp;formul&aacute;rio, sob pena de responsabilidade
                administrativa, civil e penal.</p>

            <p class="Texto_Justificado">&nbsp;</p>
        </td>
    </tr>
    </tbody>
</table>

<p>&nbsp;</p>
<p class="Tabela_Texto_Alinhado_Justificado">Enviar ao chefe imediato at&eacute; o 5&ordm; dia &uacute;til do m&ecirc;s
    subsequente para assinatura eletr&ocirc;nica, ci&ecirc;ncia e de acordo.</p>

<p class="Tabela_Texto_Alinhado_Justificado">&nbsp;</p>

<p class="Tabela_Texto_Alinhado_Justificado">Assinaturas: Servidor e Chefia Imediata</p>
<hr style="margin: 0 0 4px 0;"/>
<table>
    <tr>
        <td><img alt="logotipo"
                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFkAAAA8CAMAAAA67OZ0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAADTtpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+Cjx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDQuMi4yLWMwNjMgNTMuMzUyNjI0LCAyMDA4LzA3LzMwLTE4OjEyOjE4ICAgICAgICAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIgogICAgeG1sbnM6eG1wUmlnaHRzPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvcmlnaHRzLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOklwdGM0eG1wQ29yZT0iaHR0cDovL2lwdGMub3JnL3N0ZC9JcHRjNHhtcENvcmUvMS4wL3htbG5zLyIKICAgeG1wUmlnaHRzOldlYlN0YXRlbWVudD0iIgogICBwaG90b3Nob3A6QXV0aG9yc1Bvc2l0aW9uPSIiPgogICA8ZGM6cmlnaHRzPgogICAgPHJkZjpBbHQ+CiAgICAgPHJkZjpsaSB4bWw6bGFuZz0ieC1kZWZhdWx0Ii8+CiAgICA8L3JkZjpBbHQ+CiAgIDwvZGM6cmlnaHRzPgogICA8ZGM6Y3JlYXRvcj4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGk+QWxiZXJ0byBCaWdhdHRpPC9yZGY6bGk+CiAgICA8L3JkZjpTZXE+CiAgIDwvZGM6Y3JlYXRvcj4KICAgPGRjOnRpdGxlPgogICAgPHJkZjpBbHQ+CiAgICAgPHJkZjpsaSB4bWw6bGFuZz0ieC1kZWZhdWx0Ii8+CiAgICA8L3JkZjpBbHQ+CiAgIDwvZGM6dGl0bGU+CiAgIDx4bXBSaWdodHM6VXNhZ2VUZXJtcz4KICAgIDxyZGY6QWx0PgogICAgIDxyZGY6bGkgeG1sOmxhbmc9IngtZGVmYXVsdCIvPgogICAgPC9yZGY6QWx0PgogICA8L3htcFJpZ2h0czpVc2FnZVRlcm1zPgogICA8SXB0YzR4bXBDb3JlOkNyZWF0b3JDb250YWN0SW5mbwogICAgSXB0YzR4bXBDb3JlOkNpQWRyRXh0YWRyPSIiCiAgICBJcHRjNHhtcENvcmU6Q2lBZHJDaXR5PSIiCiAgICBJcHRjNHhtcENvcmU6Q2lBZHJSZWdpb249IiIKICAgIElwdGM0eG1wQ29yZTpDaUFkclBjb2RlPSIiCiAgICBJcHRjNHhtcENvcmU6Q2lBZHJDdHJ5PSIiCiAgICBJcHRjNHhtcENvcmU6Q2lUZWxXb3JrPSIiCiAgICBJcHRjNHhtcENvcmU6Q2lFbWFpbFdvcms9IiIKICAgIElwdGM0eG1wQ29yZTpDaVVybFdvcms9IiIvPgogIDwvcmRmOkRlc2NyaXB0aW9uPgogPC9yZGY6UkRGPgo8L3g6eG1wbWV0YT4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgIAo8P3hwYWNrZXQgZW5kPSJ3Ij8+RO84nQAAAwBQTFRFamts+fn5mp6hc3Nz9fX1U1NTS0tKnaGk6unqzM3P7e3u8fHxuLm7/Pz8lZmc2dnZxcXGWlpavr29wsLCp6eniYmKhYaGZWZmkpaZ0dHS5eXlkZGSrq2utbW2XV1d4uHhfX1+sbGy1dXW3d3dqampgYGCjY2OyMnKYWJi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"/>
        </td>
        <td><p style="margin:0;text-align: left; font-size:11pt;font-family: Calibri;">Documento assinado
                eletronicamente por <b>MAIKON DE JESUS COSTA</b>, <b>Servidor T&eacute;cnico Administrativo em Educa&ccedil;&atilde;o</b>,
                em 19/02/2024, &agrave;s 08:21, conforme hor&aacute;rio oficial de Bras&iacute;lia, com fundamento no
                art. 6&ordm;, caput, do <a title="Acesse o Decreto"
                                           href="http://www.planalto.gov.br/ccivil_03/_Ato2015-2018/2015/Decreto/D8539.htm"
                                           target="_blank">Decreto n&ordm; 8.539, de 8 de outubro de 2015</a>.</p></td>
    </tr>
</table>
<hr style="margin: 0 0 4px 0;"/>
<table>
    <tr>
        <td><img alt="logotipo"
                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFkAAAA8CAMAAAA67OZ0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAADTtpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+Cjx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDQuMi4yLWMwNjMgNTMuMzUyNjI0LCAyMDA4LzA3LzMwLTE4OjEyOjE4ICAgICAgICAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIgogICAgeG1sbnM6eG1wUmlnaHRzPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvcmlnaHRzLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOklwdGM0eG1wQ29yZT0iaHR0cDovL2lwdGMub3JnL3N0ZC9JcHRjNHhtcENvcmUvMS4wL3htbG5zLyIKICAgeG1wUmlnaHRzOldlYlN0YXRlbWVudD0iIgogICBwaG90b3Nob3A6QXV0aG9yc1Bvc2l0aW9uPSIiPgogICA8ZGM6cmlnaHRzPgogICAgPHJkZjpBbHQ+CiAgICAgPHJkZjpsaSB4bWw6bGFuZz0ieC1kZWZhdWx0Ii8+CiAgICA8L3JkZjpBbHQ+CiAgIDwvZGM6cmlnaHRzPgogICA8ZGM6Y3JlYXRvcj4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGk+QWxiZXJ0byBCaWdhdHRpPC9yZGY6bGk+CiAgICA8L3JkZjpTZXE+CiAgIDwvZGM6Y3JlYXRvcj4KICAgPGRjOnRpdGxlPgogICAgPHJkZjpBbHQ+CiAgICAgPHJkZjpsaSB4bWw6bGFuZz0ieC1kZWZhdWx0Ii8+CiAgICA8L3JkZjpBbHQ+CiAgIDwvZGM6dGl0bGU+CiAgIDx4bXBSaWdodHM6VXNhZ2VUZXJtcz4KICAgIDxyZGY6QWx0PgogICAgIDxyZGY6bGkgeG1sOmxhbmc9IngtZGVmYXVsdCIvPgogICAgPC9yZGY6QWx0PgogICA8L3htcFJpZ2h0czpVc2FnZVRlcm1zPgogICA8SXB0YzR4bXBDb3JlOkNyZWF0b3JDb250YWN0SW5mbwogICAgSXB0YzR4bXBDb3JlOkNpQWRyRXh0YWRyPSIiCiAgICBJcHRjNHhtcENvcmU6Q2lBZHJDaXR5PSIiCiAgICBJcHRjNHhtcENvcmU6Q2lBZHJSZWdpb249IiIKICAgIElwdGM0eG1wQ29yZTpDaUFkclBjb2RlPSIiCiAgICBJcHRjNHhtcENvcmU6Q2lBZHJDdHJ5PSIiCiAgICBJcHRjNHhtcENvcmU6Q2lUZWxXb3JrPSIiCiAgICBJcHRjNHhtcENvcmU6Q2lFbWFpbFdvcms9IiIKICAgIElwdGM0eG1wQ29yZTpDaVVybFdvcms9IiIvPgogIDwvcmRmOkRlc2NyaXB0aW9uPgogPC9yZGY6UkRGPgo8L3g6eG1wbWV0YT4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgIAo8P3hwYWNrZXQgZW5kPSJ3Ij8+RO84nQAAAwBQTFRFamts+fn5mp6hc3Nz9fX1U1NTS0tKnaGk6unqzM3P7e3u8fHxuLm7/Pz8lZmc2dnZxcXGWlpavr29wsLCp6eniYmKhYaGZWZmkpaZ0dHS5eXlkZGSrq2utbW2XV1d4uHhfX1+sbGy1dXW3d3dqampgYGCjY2OyMnKYWJihYaIjY6RnZ2ejpGSra+xeHl7lZWVmJiYgoKFpKaptre5vb7Aurq8oaGikpSWmJufh4iKkZKVysrMtrq7ioyOdXZ4fn+ArrGywcLEzc7QiYqMt7W1/v/8mZqcxsbIpqqrZGFhztDSeXp7iIWGnJqalJKSf4CCg4B/amZmoaSm5+fmvLy6ys3OzMzL2tze3dzaa2hny8nH0M7NiYiGbG5v19jYWFVVcG5s2drcxMTD0dPUx8jJ/P79sbO1j46OmZWU1dfXhIKC1NLTd3h68fL0wsTGb3By+vf3YV1d2NjW7u7u6Ojpe3x9fHp54eLkxMLAvLq5/f39+vr63t7fXFtamZiW6urqzMnKwL+98PHvrKytq6qq7evpr62toKKkvr/BOzk42dvad3V06OjmpaSj5efnnZyblpWT/fz6ZWZo9/f3jYyKqquteXd47u3rhYSC5eTisbCueXh2qaimWlhXjImIY2Bfc3Bw////UFBP/v7+/v////7///3+g4SHaGlpYmNj8vPzZ2dn/vz9WFhYtbO0ztDPWltbbW9u/v7/xcPEiouLrayq4+Tms7S2VldX7/DyqKel+/z++Pj4+ff4cXBuuru7u7y+7+/vx8fH8/HysK+wXFxc/fv8s7OztrWzZWRio6Ohl5eZ1NTUZGRkraus2NbX4N/d0dDP3dzc9ff14ODg9/n4oaCg4eHf+/v76+vrQD4+7Ozs/f3/7evsRUJCvLy87vDtysvLXl9fzczNwsPDYGBgw7+/ysjJgH19gH9/29rbwMC/Tk1MlJCPoaCeX1tb6ufo4uPjx8fF5OPht7e3X15cuLe4tLKzn56f09TW1dXTYWJkh4eHZGJj3+Diq6urXLJJJAAAC8BJREFUeNqsmAtYE1cWgAcmJLwSwjMJAYxiQhIeITyEgCGiAioCaiqWaoCiFQVKtgWsJFRapEpFatuodetKHYaQkIiipZVWqqBQ64OqrduGuquVR1sDu62u69JdW/fOZCCJovjttyffl9yZ3PvfM2fOOffcC6UgJ1a5R1GeJI6OjvHx8TQgTCYzLiEsTCgU8qRSQcaN4VNsWWpsndep7u7u2NhY9+7UkpKSJFnqkApBIOTrufFgJDb2MUIQ4xLYAMnjSRf4+koEAoGupLcMdQtVRBs0JA3JImovpVKpUED6SAMCnZhLo1Dmrlzp8hhJxCQkJGRdGhA6nV5aWjrs7T08nJw8Ono6hD7aXZd2ml5ALygoGAb33QPvBs68ACsZIjXkAcBLmpH/RVC7H7xlaZ86qmTcgY47UsKbEW3LU4Mmx9tTJwWYGJFAeh4URXGc2/yUCqJTaGrLRlFi3khIAUMUCxl9Kjj4qFQo1WYeC27ie6KjSK+AMHIsuDu92qpq8wCK+P+6cdasGvRRM6G21yI9hJPdn+Z1vTCfJvZlNccIgQt6IIj2iZ0zjY+Q0SnfGvZ921EiMC645kKjxNOen06NTMaTdH5oklwhl8OHdyyhUWgJudOS+yG9HRl9RGWrzm/FKfRNHYZEWnyCdON0ZHa/Xv8kO9u9FJSlY3DNzclMmtD34rTkVr1xajKKpFgaVIcu9URkkKq7EFW3MEEiZk1L5hsfJqtfrP74lXK3LhTDqQy/r+uOTX7egIUVKbhKvmOGQ7dEKpaxpvN/Np/BsLdzWeJWkDMpi+reAv5NNftIsjjpEekXLgJ0bgUDapf2JIsFnIgj0+o8YkMGuQMtX8SkgbTpyGTSEcTkIuX6CsTcLJkyAlzmRvD1nR1lXhXcJNjl4fTxsBSO9Pfb6IwaFjG3UxxXrKDQHF9B0F+lAp5AOH5BnM5RyF5Gnk9vVbR3lMUmVcBHb05lDXwm4nbhYH/rJBmY1QWAKe65q+avX09CB1LFPMF4VZchWQxH6MdR834+1OZbFg0nKfQhdo5Dch0YcHYu7zFZ/Yk3yG+10blrHo3iGK4G/1JdUWoal6eLm4Hli25FEsSZcTVp0Nh5v+w4BBtbT9u4peFITF1dTMyN7ple8kkD8YL4fCv5mGZRPIWynhjRM0cs0bljHY9VySDo6OmP69sZTvfLZr6raA2iW5+/pjSKsvb34FWrqrZXsM0TobY7iD9iq3N4PLDyuhfxQTMWSHSSdSiJZHCokjIUrXdvw56tTX6uvXx9X9vwpM7Hopes2h7uHh14/LhIEiF0Jf7Y3TcyaGNndSITXDAD1oL/UVaWRCcIDZ8d1eATWgFBg1uD4c4RcpHrg3Z+Z97w5Bv7mFI3b3ag+73AwMAGXwFcSrWQO9oHrWTQ75M9NEdHmlAYdaRLlVYh0GUlgVXY2M+Ajur7onJhp0FA9ukMcsLJ+HM3r3WUht0mgixUnBTVRZA9bcmgc3k4M4FJCxNIujXrSnRiTokSLA16Bn8waGzcA27qI+9znUNuc3LyBp0t4b8yXrjiE2L4VhkcqrE0fduCgmysAeQT+oowaUKYQJecXcLlyETbx0NDIyNFIrZvmhkCZL9rqdedxsijk2QXmnROGUHew1FSSBPkwT47ncHK4UwPFUil4oQbHE4JJw3RdHVpcEGK9WN9ZG519vjs83OCJ1VxuSChlFmax/ZUKLdP6NzZ5/lIrnvh9rhOIpb0LigpgWfa+G0xoymILCt/KO7qhIK4UtYQVuzMT4AhHuEckjxPTxtrEM5IXVKhyxK4z1FEKGWzrOVAsbGpncypPrG2O61nYj6VSxxPKJX4+XFlsor0iJIkRUbPo2SAHPDH0qU6OV3HEbMS34WVUBa9vMvk0ONxcwC5aAR25pYvYQqSomoIdHXc9vmzWNnZiUNHbp6mh4TcPB9UgPvdfSc7skN0agzL7FEnzBKXSNxqeIPw0X6935ZQkS/EGEZYmM5+ueESiQJiEY/isSARxZ8UdbCULLf7A9TYtZ892ZCqE0jZPLFMXAIHHkNyZUFGqLU9z8mpiUz2QS7qgZ0lG1ekVwwGzSfywyrpOrwhj5L0GrCGf384npcIcny05dleEesEYhmHE6FMegC8R2Vm97e1tXViYPIu5Erbd+Q395bHQJ1kdg9R+ezwpWP2+0sql62IVYPprvID1FayI0FGetzHpTpAFqSmGfBnqykY58IKCL7FPvsVMkPkx/ZrMJBOZdZWEzlNtUNQipEN6RdmKSOBMujVwQdWMohnQmeE6hzMCkk8Eoy7vhYb3SU35+Z+Jce81ERyc6shqRCVxpqHPcSlKqwRKhNCoyYsjwXZkwMfrYhQrdam4kBtVyfU2jtXh+mMojWi/4Tj0VfVNwV5wp/BF6CabhSqrfUm+tln9lMT9Fxusgq/2Ws047/BbbU25HjacaK/CWO3oGhKi4n64zcqAnZIiw5EHp7QFEsXVCoB3wjiH7ea+0l/vK+8rcFhkhwfz7SsI2UiTuOlzxcWRbpd2VcYXDx+5nDGT2zDQObezKob3x34MGSraX7tzoLdmffG6wu/smi9sWS9BqWaTIj/SoMJ+50/5mOa9Od4moWM9Cz02r9JPpZhvpoPm3cG5LgeXJzh+aXmVOXBwtU/wzPG8x1q859dQ/7mtTs/LM50sEQAO4nH5nV0SDo6/Li3blVwRposRQ5OTqXFncW7/Xlh5smcr/curjS8nfcnUu1yZ/jtmk085HDm4qVvbArVhsLUXtjMLULdvsjIW2qw2OZqQ0eH732/fUXcW6Dk2Qune1mmtCNTh/NW716c0rOtafM7r3+w695y5/pxTdHu0Zw7t5a9AW/R7jK+tyUneFkm4nPyuYNFZyYqgoGBakxAVVBeLpdfI14HTqbR4nBrqH68viY/p3rpTwfunN/00vszR+T5W7r276aP7ftg2R8av/sh22nxq3Dwpkbko7w1efvcpq7iJ27h5AvMhHmW6V9beKRYQ194STMUkK3xH3JgVakuehxaXfmcBzJj5iztjwuHzGcumRFSQWVBlRqx2wXZxYKVHEYk+BbcFVuaX9CasLSAZ4bmQ+oW0L25GbW6MVX1GE2tgpNFcWHzrNO5iR5YulJVzRjboXd5LbEJHe2oslHv2BRA1J4cFxcWbg2sayd5WLPlzDe7QEy0IN9v/sKbZFG/+MtyEJ1EtKOP6os+rPMEGVF/eHDT6jP1mSnPHFz2cvb1po8ub2k8//Xfzq35x19rRQc3vDOU8d7Oxg+e8WjMKfRHp96IoXZ2jgsThuO9nv353vv/lHM2fPuS16fL/52zfEfBdU7Blpy6+qWXc/K3BHlXnnyZnV97h5V959zfU560H8QiBVsHE9jScGwuauX1xv2d5qK3R683wucuFxaleB0I/jZnA7ItZ3P9pzvza73g1+HzKSnv1S4dy6BOs43G10FA3ooZjup1/crOPzrvFXmTL/3yS/WyZSleL8nlOY0p53Oy92/7Hv7Iq35zfkbKO0s3FednTkO2WCNMKN2Kvxb5b78tTehRFrr+zCjaRY18s+HGgatow1iO57bL/bU9xk8rzz3bQH61IXPxMvIG6jRnCvcJ8h7LPed7hz3QWVVa/38trEJcn2H1DGkQUvb7qxFSsVx90f8ai6ShH/Ynfeh95bZqmvMK3M5Coe8eyyvVfq5WYYs8SlXjDo2AK0SlPgS8D7QRVIVlZrSZapr+xMLiG1LJnscnAIsrt9itUehjDmNsROLUxod8BJJQ1HYQShx1aK1orR1IO/2RRX2nUwW0VrxAQkf+vxLQ6Tl2AzoxO0si8ekG26OYmG7sQK/S3f3evbt3o6MDwebj7NmzMzHpBRIQELAVyIPa2trZPk+SfZ6eZD8HCCHNlnFBLSnjVIByEtSTQGAYVlqO9EDJrzcaGYz+Vj6fPzIY1Nfe7gnqpk5Qkz1WmpyamvxqECgFURX78HQ6MdgHZ+F8vF618MEER5VHIWwCI5igH5tgEEhfu+cTpN/PGzj8fwUYAEHf/4ET3ikCAAAAAElFTkSuQmCC"/>
        </td>
        <td><p style="margin:0;text-align: left; font-size:11pt;font-family: Calibri;">Documento assinado
                eletronicamente por <b>GIANCARLO DE FRANCA AGUIAR</b>, <b>DIRETOR(a)</b>, em 19/02/2024, &agrave;s
                13:03, conforme hor&aacute;rio oficial de Bras&iacute;lia, com fundamento no art. 6&ordm;, caput, do <a
                    title="Acesse o Decreto"
                    href="http://www.planalto.gov.br/ccivil_03/_Ato2015-2018/2015/Decreto/D8539.htm" target="_blank">Decreto
                    n&ordm; 8.539, de 8 de outubro de 2015</a>.</p></td>
    </tr>
</table>
<hr style="margin: 0 0 4px 0;"/>
<table>
    <tr>
        <td><img align="center" alt="QRCode Assinatura" title="QRCode Assinatura"
                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFYAAABWAQMAAABvmPO0AAAABlBMVEX///8AAABVwtN+AAAACXBIWXMAAA7EAAAOxAGVKw4bAAABUklEQVQ4jXXTQaokMQgGYMGt4FUEtwGvHsg2kKsIbgM+u2eYLnt4gSq+RUr+RAvgl2XJc+TUSG8WFN+EoSDNGqR+l6h9W2DuQ/if8YSpxperZuKk+bf+P1vqn/XO8zEAh1YGf6f+2CIPndx7z2aYQLYm5PXu4MowEl4fP8y0byTMW3ue1tSFl4ezNMu+svGq3G5am9ayaQHNQKCrQjjNZjrEdxlvhGaGg+Bbj3vzsFWx2bHKPC3VCE3xNaQb1enyBe4ewii2R95uyh16+CpBMwqsYA++s9nCk5dtOd6sA6vgqdZ1W5K93nigufbUXSHglGZKRLe7gWfzmDIOLAnxZsWN+2pa3WHznXX4eka3pPCuIajszbWr+nbEtdtS5Bpm/QzNgrhqyMRFmjWGB92q+W3DOSIE/csar5k8r5wPV+/WJNFRs/10ZciNxud9nx//sn4AAhOcwCChAVEAAAAASUVORK5CYII="/>
        </td>
        <td><p style="margin:0;text-align: left; font-size:11pt;font-family: Calibri;">A autenticidade deste documento
                pode ser conferida no site <a title="P&aacute;gina de Autenticidade de Documentos"
                                              href="https://sei.ifpr.edu.br/sei/controlador_externo.php?acao=documento_conferir&id_orgao_acesso_externo=0"
                                              target="_blank">https://sei.ifpr.edu.br/sei/controlador_externo.php?acao=documento_conferir&id_orgao_acesso_externo=0</a>,
                informando o c&oacute;digo verificador <b>2850793</b> e o c&oacute;digo CRC <b>B2B3665E</b>.</p></td>
    </tr>
</table>
<hr style="margin:1px;"/>
<br/>
<hr/>
<table border="0" cellpadding="2" cellspacing="0" width="100%">
    <tbody>
    <tr>
        <td align="left"><strong>Refer&ecirc;ncia:</strong> Processo n&ordm; 23411.003089/2024-13</td>
        <td align="right">SEI n&ordm; 2850793</td>
    </tr>
    </tbody>
</table>
</body>
</html>
