@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Adicionar Ocorrência ao ponto</h1>
        <div class="lead"></div>

        <div class="container mt-4">
            <form method="post" action="{{ route('ponto-ocorrencia.salvar') }}">
                @csrf
                <input type="hidden" name="periodo" value="{{request('periodo')}}">
                <input type="hidden" name="usuario" value="{{request('usuario')}}">
                <input type="hidden" name="dia" value="{{$dia}}">
                <input type="hidden" name="mes" value="{{$mes}}">
                <input type="hidden" name="ano" value="{{$ano}}">
                <div class="table-responsive">
                    <table class="table table-striped-columns mx-auto" border="1" cellpadding="1" cellspacing="1"
                           style="width: 100%;">
                        <tbody>
                        <tr class="border-1">
                            <td style="background-color: rgb(0, 0, 0);">
                                <p class="Tabela_Texto_Alinhado_Justificado"><span style="color:#FFFFFF;"><strong>POSSIBILIDADE DE OCORRÊNCIA</strong></span>
                                </p>
                            </td>
                            <td style="background-color: rgb(0, 0, 0);">
                                <p class="Tabela_Texto_Alinhado_Justificado"><span style="color:#FFFFFF;"><strong>SIGLA/CODIGO</strong></span>
                                </p>
                            </td>
                            <td style="background-color: rgb(0, 0, 0); width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado"><span style="color:#FFFFFF;"><strong>LEGISLAÇÃO APLICÁVEL</strong></span>
                                </p>
                            </td>
                            <td style="background-color: rgb(0, 0, 0); width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado"><span style="color:#FFFFFF;"><strong>ANEXAR<br>
			                COMPROVANTE&nbsp;</strong></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">ABONO DA CHEFIA POR MOTIVO DE SERVIÇO
                                    EXTERNO</p>
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
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/90, Art. 94 e alterações
                                    posteriores</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">AFASTAMENTO PARA PÓS GRADUAÇÃO STRICTO
                                    SENSU</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">APG</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/90, Art. 96-A e alterações
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
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/90, Art. 147 e alterações
                                    posteriores</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">NÃO</p>
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
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei n. 8.112/90, Art. 97 e alterações
                                    posteriores</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">ATESTADO MÉDICO – INFERIOR A 05 DIAS</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">AM</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/90, Art. 202 e alterações
                                    posteriores</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">NÃO</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">CESSÃO</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">CESSÃO</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/90, Art. 18 e alterações
                                    posteriores</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">COMPENSAÇÃO DE JORNADA DE TRABALHO</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">CJT</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/90, Art. 44 e alterações
                                    posteriores</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">NÃO</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">CURSO DE CAPACITAÇÃO INSTITUCIONAL</p>
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
                                <p class="Tabela_Texto_Alinhado_Justificado">DOAÇÃO DE SANGUE</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">DS</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/90, Art. 97 e alterações
                                    posteriores</p>
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
                                <p class="Tabela_Texto_Alinhado_Justificado">FÉRIAS HOMOLOGADAS</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">FH</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 77 e alterações
                                    posteriores</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">NÃO</p>
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
                                <p class="Tabela_Texto_Alinhado_Justificado">NÃO</p>
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
                                <p class="Tabela_Texto_Alinhado_Justificado">NÃO</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">HORÁRIO ESPECIAL PARA LACTANTE</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">HEL</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 209 e alterações
                                    posteriores</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">NÃO</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LICENÇA CAPACITAÇÃO</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LC</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei nº 8.112/90, Art 81, inciso V, 87 e
                                    102,
                                    inciso VIII, alínea “e”</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LICENÇA SEM VENCIMENTOS PARA ACOMPANHAMENTO
                                    DE
                                    CÔNJUGE</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LSVAC</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 84, § 1º e alterações
                                    posteriores</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LICENÇA POR MOTIVO DE DOENÇA EM PESSOA DA
                                    FAMÍLIA</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LMDPF</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 83 e alterações
                                    posteriores</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LICENÇA GALA</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LG</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 97 e alterações
                                    posteriores</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LICENÇA NOJO</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LN</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 97 e alterações
                                    posteriores</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LICENÇA GESTANTE</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LG</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 207 e alterações
                                    posteriores</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LICENÇA PATERNIDADE</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LP</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 102 e alterações
                                    posteriores</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LICENÇA PARA TRATAR DE INTERESSES
                                    PARTICULARES</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LTIP</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 81 e alterações
                                    posteriores</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LICENÇA PARA TRATAMENTO DE SAÚDE</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LTS</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112, Art.202 e alterações
                                    posteriores</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">NÃO</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LICENÇA PARA O SERVIÇO MILITAR</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LSM</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 85 e alterações
                                    posteriores</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LICENÇA PARA DESEMPENHO DE MANDATO
                                    CLASSISTA</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LDMC</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 94 e alterações
                                    posteriores</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LICENÇA PARA ATIVIDADE POLÍTICA</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LAP</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Lei 8112/1990, Art. 86 e alterações
                                    posteriores</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">DECLARAÇÃO DE COMPARECIMENTO</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">DECL</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">INSTRUÇÃO NORMATIVA Nº 2, DE 12 DE SETEMBRO
                                    DE
                                    2018</p>
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
                                <p class="Tabela_Texto_Alinhado_Justificado">Decreto nº 1.590, de 10 de agosto de
                                    1995</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">NÃO</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">HORÁRIO ESPECIAL PARA ESTUDANTE</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">HEE</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Portaria de Concessão</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">AÇÃO DE DESENVOLVIMENTO EM SERVIÇO -
                                    DIAS</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">ADS-D/ 393</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Decreto nº 9.991/2019</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">AÇÃO DE DESENVOLVIMENTO EM SERVIÇO -
                                    HORAS</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">ADS-H/ 394</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Decreto nº 9.991/2019</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LICENÇA CAPACITAÇÃO - ações de
                                    desenvolvimento
                                    presenciais ou à distância</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LC / 396</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Decreto nº 9.991/2019</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LICENÇA CAPACITAÇÃO -&nbsp;elaboração de
                                    monografia, trabalho de conclusão de curso, dissertação de mestrado, tese de
                                    doutorado,
                                    de livre-docência ou estágio pós-doutoral</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LC / 397</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Decreto nº 9.991/2019</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LICENÇA CAPACITAÇÃO -&nbsp;curso conjugado
                                    com
                                    atividades práticas em posto de trabalho, em órgão ou entidade da administração
                                    pública
                                    direta ou indireta dos entes federativos, dos Poderes da União ou de outros países
                                    ou em
                                    organismos internacionais</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LC / 398</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Decreto nº 9.991/2019</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LICENÇA CAPACITAÇÃO - curso conjugado com
                                    realização de atividade voluntária em entidade que preste serviços dessa natureza no
                                    País</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">LC / 399</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Decreto nº 9.991/2019</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">SIM</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">Pesquisa,&nbsp;Extensão e Inovação</p>
                            </td>
                            <td>
                                <p class="Tabela_Texto_Alinhado_Justificado">PEI</p>
                            </td>
                            <td style="width: 403px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Portaria PROEPPI/2023</p>
                            </td>
                            <td style="width: 97px;">
                                <p class="Tabela_Texto_Alinhado_Justificado">Não</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="mb-3">
                        <label for="sigla" class="form-label">Sigla</label>
                        <select class="form-select" name="sigla">
                            <option value="">Selecione</option>
                            @foreach(\App\Enums\Ocorrencias::getInstances() as $ocorrencia)
                                <option value="{{$ocorrencia->key}}">{{$ocorrencia->description}} - {{ $ocorrencia->value }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('sigla'))
                            <span class="text-danger text-left">{{ $errors->first('sigla') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="sigla" class="form-label">Período</label>
                        <strong>{{request('periodo')}}</strong>
                    </div>
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <a href="{{ URL::previous() }}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>

    </div>
@endsection


