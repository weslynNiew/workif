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
                                <p class="Tabela_Texto_Alinhado_Justificado">@if(empty($ponto['ocorrencia'])){{ isset($ponto['saida']) ? $ponto['saida'] : '' }}@endif</p>
                            </td>
                            <td class="border-custom">
                                <p class="Tabela_Texto_Alinhado_Justificado">{{ isset($ponto['ocorrencia']) ? $ponto['ocorrencia'] : '' }}</p>
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
                            <p class="Tabela_Texto_Alinhado_Justificado"><a
                                    href="{{route('ponto-ocorrencia.criar',['usuario' => request('usuario'),'periodo' => $periodo,'dia' => $dia,'mes' => $mes, 'ano' => $ano])}}"
                                    class="text-primary text-decoration-underline">N/A</a></p>
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
    @endforeach
    </tbody>
</table>

