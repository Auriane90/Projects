<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabela</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script src="{{asset('teste/tablesorter.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('teste/jquery.tablesorter.pager.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" href="{{asset('css/semantic.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/semantic.css')}}">
    <style>
        body {
            padding: 5%;
        }
        
        .pagedisplay {
            width: 20px;
            border: none;
            background-color: white;
            text-align: center;
        }
    </style>
</head>

<body>

    <table class="ui celled padded table" id="table1">
        <thead>
            <tr>
                <th class="single line">Evidence Rating</th>
                <th>Effect</th>
                <th>Efficacy</th>
                <th>Consensus</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <h2 class="ui center aligned header">A</h2>
                </td>
                <td class="single line">
                    Power Output
                </td>
                <td>
                    <div class="ui star rating" data-rating="3" data-max-rating="3"></div>
                </td>
                <td class="right aligned">
                    80% <br>
                    <a href="#">18 studies</a>
                </td>
                <td>Creatine supplementation is the reference compound for increasing muscular creatine levels; there is variability in this increase, however, with some nonresponders.</td>
            </tr>
            <tr>
                <td>
                    <h2 class="ui center aligned header">A</h2>
                </td>
                <td class="single line">
                    Weight
                </td>
                <td>
                    <div class="ui star rating" data-rating="3" data-max-rating="3"></div>
                </td>
                <td class="right aligned">
                    100% <br>
                    <a href="#">65 studies</a>
                </td>
                <td>Creatine is the reference compound for power improvement, with numbers from one meta-analysis to assess potency</td>
            </tr>
            <tr>
                <td>
                    <h2 class="ui center aligned header">A</h2>
                </td>
                <td class="single line">
                    Power Output
                </td>
                <td>
                    <div class="ui star rating" data-rating="3" data-max-rating="3"></div>
                </td>
                <td class="right aligned">
                    80% <br>
                    <a href="#">18 studies</a>
                </td>
                <td>Creatine supplementation is the reference compound for increasing muscular creatine levels; there is variability in this increase, however, with some nonresponders.</td>
            </tr>

            <tr>
                <td>
                    <h2 class="ui center aligned header">A</h2>
                </td>
                <td class="single line">
                    Power Output
                </td>
                <td>
                    <div class="ui star rating" data-rating="3" data-max-rating="3"></div>
                </td>
                <td class="right aligned">
                    80% <br>
                    <a href="#">18 studies</a>
                </td>
                <td>Creatine supplementation is the reference compound for increasing muscular creatine levels; there is variability in this increase, however, with some nonresponders.</td>
            </tr>

            <tr>
                <td>
                    <h2 class="ui center aligned header">A</h2>
                </td>
                <td class="single line">
                    Power Output
                </td>
                <td>
                    <div class="ui star rating" data-rating="3" data-max-rating="3"></div>
                </td>
                <td class="right aligned">
                    80% <br>
                    <a href="#">18 studies</a>
                </td>
                <td>Creatine supplementation is the reference compound for increasing muscular creatine levels; there is variability in this increase, however, with some nonresponders.</td>
            </tr>
        </tbody>
        <tfoot id="pager" class="pager">
            <tr>
                <th>
                    <div class="ui right floated pagination menu">
                        <p class="prev">
                            <a class="icon item">
                                <i class="left chevron icon"></i>
                            </a>
                        </p>

                        <a class="icon item"><input class="pagedisplay" disabled /></a>
                        <p class="next">
                            <a class="icon item">
                                <i class="right chevron icon"></i>
                            </a>
                        </p>
                    </div>
                    <span>
                            Exibir <select class="pagesize">
                                    <option selected="selected"  value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option  value="4">4</option>
                            </select> registros
                        </span>
                </th>
            </tr>
        </tfoot>
    </table>

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