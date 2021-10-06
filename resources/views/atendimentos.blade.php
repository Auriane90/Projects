@extends('layout.Administracao')

@section('corpo')
    <div class="ui secondary menu">
            <div class="left menu">
                <h1 class="ui header">
                    <i class="phone volume icon"></i>Atendimentos
                </h1>
            </div>
            
        </div>
    
        <div class="ui divider"></div>

        <table class="ui green table" id="idTabela">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Ação</th>
    
            </tr>
            </thead>
            <tbody id="tbody">
                @foreach ($atend as $a)
                <tr>
                    <td data-label="Nome">{{$a->nome}}</td>
                    <td data-label="Quantidade">{{$a->quantidade}}</td>
                    <td data-label="Ação">
                        <a onclick="EdiatarSistema({{$a->id}}, '{{$a->nome}}', '{{$a->quantidade}}')" class="ui tiny yellow icon button">
                            <i class="pencil icon"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="ui modal" id="altAtend">
                <div class="header"><i class="phone volume icon"></i>Editar Sistemas</div>
                <div class="content">
                    <form method="post" action="/alterarAten" enctype="multipart/form-data" id="form" class="formEdit">
                        <div class="field">
                            <div class="ui equal width grid">
                                <div class="equal width row">
                                        
                                    <div class="column" style="margin-top: 2%;">
                                        <input type="hidden" value="{{csrf_token()}}" name="_token">
                                        <div class="ui form">
                                            <div class="field">
                                                <label>Nome</label>
                                                <input type="text" rows="2" name="nome" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="nome">
                                            </div>
                                            <div class="ui dividing header"></div>
                                        </div>

                                        <div class="ui form">
                                                <div class="field">
                                                    <label>Quantidade</label>
                                                    <input type="text" rows="2" name="quantidade" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="quantidade">
                                                </div>
                                            </div>
                                            <div class="ui dividing header"></div>
                                            
                                        
                            
                                    </div>
                                </div>
                
                            </div><br>
                        </div>
                        <div class="actions">
                                
                                <button type="reset" class="ui black deny button">Cancelar</i></button>
                                
                                
                                <button type="submit" class="ui positive right labeled icon button">Editar<i class="play icon"></i></button>
                                
                                
                            </div>
                        </div>
                    </form>
                </div>
        

    <script>
        $(document).ready(function() {
        var table = $("#idTabela").DataTable({
            "lengthChange": false,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
            }
        });
    });
        // Modal Editar
        function EdiatarSistema(id, nome, quantidade){
            $('.formEdit').attr('action','/alterarAtendimentos/'+ id);
            $('#altAtend #id').val(id);
            $('#altAtend #nome').val(nome);
            $('#altAtend #quantidade').val(quantidade);
            $('#altAtend').modal('show');
        }

       

     
        
    </script>

        
@endsection
    