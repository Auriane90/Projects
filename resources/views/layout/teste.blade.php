<!doctype html>
<html>

<head>
    <title>Tabela</title>
    <meta charset="utf-8" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script src="{{asset('teste/tablesorter.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('teste/jquery.tablesorter.pager.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" href="{{asset('css/semantic.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/semantic.css')}}">
    <style>
        *,
        html {
            font-family: Helvetica, Arial, sans-serif;
            margin: 0px;
            padding: 0px;
            font-size: 12px;
        }
        
        body {
            margin: 10px;
        }
        
        h1 {
            font-size: 40px;
            font-family: Georgia, "Times New Roman", serif;
            letter-spacing: -2px;
        }
        
        a img {
            border: none;
        }
        
        form {
            background-color: #f2f2f2;
            width: 600px;
            margin: 10px 0 10px 0;
            text-align: center;
        }
        
        form p {
            padding: 12px;
        }
        
        form p label {
            color: #333;
            font-weight: 900;
        }
        
        form input {
            padding: 6px;
            border: 1px solid #ccc;
            width: 300px;
        }
        
        table {
            width: 600px;
            border: 1px solid #ccc;
        }
        
        table thead th {
            background-color: #ad2525;
            padding: 6px;
            color: #fff;
            text-align: center;
            font-size: 14px;
        }
        
        table thead th.header {
            cursor: pointer;
        }
        
        table tbody td {
            padding: 6px;
            text-align: center;
            color: #333;
        }
        
        table tbody tr.odd td {
            background-color: #ffffcc;
        }
        
        table tbody tr.hover td {
            background-color: #a9d0f5;
        }
        
        table tbody tr.selected td {
            background-color: #a9f5a9!important;
        }
        
        .pagedisplay {
            width: 40px;
            text-align: center;
            border: none;
            background-color: #f2f2f2;
            font-weight: 900;
        }
        
        #pager span {
            font-weight: 900;
            display: inline-block;
            margin: 0 0 0 20px;
            color: #666;
            float: right;
        }
        
        #pager form {
            text-align: left;
            padding: 10px;
            width: 580px;
        }
    </style>
</head>

<body>

    <h1>Tabela</h1>

    <form method="post" action="exemplo.html" id="frm-filtro">
        <p>
            <label for="pesquisar">Pesquisar</label>
            <input type="text" id="pesquisar" name="pesquisar" size="30" />
        </p>
    </form>

    <table cellspacing="0" summary="Tabela de dados fictícios">
        <thead>
            <tr>

                <th>ID</th>
                <th>Nome</th>
                <th>Data de nascimento</th>
                <th>Cidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td>1</td>
                <td>Masuki Oki</td>
                <td>11/06/1949</td>
                <td>Tokyo</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>2</td>
                <td>Hanazom Senshik</td>
                <td>21/08/1933</td>
                <td>Yokohama</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>3</td>
                <td>Renoyok Suko</td>
                <td>16/11/1939</td>
                <td>Osaka</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>4</td>
                <td>Aka Akume</td>
                <td>26/11/1972</td>
                <td>Nagoya</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>5</td>
                <td>Chobo Shizue</td>
                <td>10/06/1953</td>
                <td>Sapporo</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>6</td>
                <td>Mino Ume-hiz</td>
                <td>07/12/1946</td>
                <td>Kobe</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>7</td>
                <td>Tsukawa Seno</td>
                <td>08/04/1948</td>
                <td>Kyoto</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>8</td>
                <td>Sae Teiko</td>
                <td>15/05/1972</td>
                <td>Fukuoka</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>9</td>
                <td>Senshi Towiko</td>
                <td>14/07/1977</td>
                <td>Kawasaki</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>10</td>
                <td>Wakozak Chobo</td>
                <td>13/08/1947</td>
                <td>Saitama</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>11</td>
                <td>Masagam Jun</td>
                <td>01/12/1969</td>
                <td>Hiroshima</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>12</td>
                <td>Cho Yukinoe</td>
                <td>13/08/1948</td>
                <td>Sendai</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>13</td>
                <td>Takogo Kibu</td>
                <td>15/02/1942</td>
                <td>Kitakyushu</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>14</td>
                <td>Akawa Yame</td>
                <td>21/12/1937</td>
                <td>Saitama</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>15</td>
                <td>Sako Nazome</td>
                <td>16/03/1961</td>
                <td>Hiroshima</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>16</td>
                <td>Masuki Oki</td>
                <td>11/06/1949</td>
                <td>Tokyo</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>17</td>
                <td>Hanazom Senshik</td>
                <td>21/08/1933</td>
                <td>Yokohama</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>18</td>
                <td>Renoyok Suko</td>
                <td>16/11/1939</td>
                <td>Osaka</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>19</td>
                <td>Aka Akume</td>
                <td>26/11/1972</td>
                <td>Nagoya</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>20</td>
                <td>Chobo Shizue</td>
                <td>10/06/1953</td>
                <td>Sapporo</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>21</td>
                <td>Mino Ume-hiz</td>
                <td>07/12/1946</td>
                <td>Kobe</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>22</td>
                <td>Tsukawa Seno</td>
                <td>08/04/1948</td>
                <td>Kyoto</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>23</td>
                <td>Sae Teiko</td>
                <td>15/05/1972</td>
                <td>Fukuoka</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>24</td>
                <td>Senshi Towiko</td>
                <td>14/07/1977</td>
                <td>Kawasaki</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>25</td>
                <td>Wakozak Chobo</td>
                <td>13/08/1947</td>
                <td>Saitama</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>26</td>
                <td>Masagam Jun</td>
                <td>01/12/1969</td>
                <td>Hiroshima</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>27</td>
                <td>Cho Yukinoe</td>
                <td>13/08/1948</td>
                <td>Sendai</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>28</td>
                <td>Takogo Kibu</td>
                <td>15/02/1942</td>
                <td>Kitakyushu</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>29</td>
                <td>Akawa Yame</td>
                <td>21/12/1937</td>
                <td>Saitama</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
            <tr>

                <td>30</td>
                <td>Sako Nazome</td>
                <td>16/03/1961</td>
                <td>Hiroshima</td>
                <td>
                    <a href="#"><i class="pencil icon"></i></a>
                    <a href="#"><i class="trash icon"></i></a>
                </td>
            </tr>
        </tbody>
    </table>

    <div id="pager" class="pager">
        <form>
            <span>
					Exibir <select class="pagesize">
							<option selected="selected"  value="10">10</option>
							<option value="20">20</option>
							<option value="30">30</option>
							<option  value="40">40</option>
					</select> registros
				</span>
            <a class="first"><i class="angle double left icon" ></i></a>
            <a class="prev"><i class="angle left icon" ></i></a>
            <a><input type="text" class="pagedisplay" />
                <a class="next"><i class="angle right icon" ></i></a>
                <a class="last"><i class="angle double right icon" ></i></a>

        </form>
    </div>

    <script>
        $(function() {

            $('table > tbody > tr:odd').addClass('odd');

            $('table > tbody > tr').hover(function() {
                $(this).toggleClass('hover');
            });

            $('#marcar-todos').click(function() {
                $('table > tbody > tr > td > :checkbox')
                    .attr('checked', $(this).is(':checked'))
                    .trigger('change');
            });

            $('table > tbody > tr > td > :checkbox').bind('click change', function() {
                var tr = $(this).parent().parent();
                if ($(this).is(':checked')) $(tr).addClass('selected');
                else $(tr).removeClass('selected');
            });

            $('form').submit(function(e) {
                e.preventDefault();
            });

            $('#pesquisar').keydown(function() {
                var encontrou = false;
                var termo = $(this).val().toLowerCase();
                $('table > tbody > tr').each(function() {
                    $(this).find('td').each(function() {
                        if ($(this).text().toLowerCase().indexOf(termo) > -1) encontrou = true;
                    });
                    if (!encontrou) $(this).hide();
                    else $(this).show();
                    encontrou = false;
                });
            });

            $("table")
                .tablesorter({
                    dateFormat: 'uk',
                    headers: {
                        0: {
                            sorter: false
                        },
                        5: {
                            sorter: false
                        }
                    }
                })
                .tablesorterPager({
                    container: $("#pager")
                })
                .bind('sortEnd', function() {
                    $('table > tbody > tr').removeClass('odd');
                    $('table > tbody > tr:odd').addClass('odd');
                });

        });
    </script>
</body>

</html>