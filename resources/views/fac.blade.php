@extends('layout.Administracao') @section('corpo')
<div class="ui secondary menu">
    <div class="left menu">
        <h1 class="ui header">
            <i class="question icon"></i>FAC
        </h1>
    </div>
    <div class="right menu">
        <button onclick="novaFac()" class="ui teal icon button">Novo</button>
    </div>
</div>

<div class="ui divider"></div>


<table class="ui green table" id="idTabela">
    <thead>
        <tr>
            <th>Perguntas</th>
            <th>Respostas</th>
            <th>Ação</th>

        </tr>
    </thead>
    <tbody id="tbody">

        @foreach ($facs as $f)
        <tr>
            <td data-label="Perguntas">{{$f->perguntas}}</td>
            <td data-label="Nome">{{$f->respostas}}</td>
            <td data-label="Ação" style="width:100px;">
                <a class="ui tiny yellow icon button" onClick="editarFac('{{$f->id}}', '{{$f->perguntas}}', '{{$f->respostas}}')">
                    <i class="pencil icon"></i>
                </a>
                <a onClick="apagar('{{$f->id}}')" class="ui tiny red icon button">
                    <i class="trash icon"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="ui modal" id="dlgFca">
    <div class="header"><i class="question icon"></i>Cadastrsr FAC</div>
    <div class="content">
        <form method="post" action="/criarFac" enctype="multipart/form-data" id="form">
            <div class="field">
                <div class="ui equal width grid">
                    <div class="equal width row">

                        <div class="column" style="margin-top: 5%;">
                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                            <div class="ui form">
                                <div class="field">
                                    <label>Pergunta</label>
                                    <textarea name="perguntas" id="perguntas" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="ui dividing header"></div>
                            <div class="ui form">
                                <div class="field">
                                    <label>Resposta</label>
                                    <textarea name="respostas" id="respostas" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="ui dividing header"></div>
                        </div>
                    </div>

                </div><br>
            </div>
            <div class="actions">

                <button type="reset" class="ui black deny button">Cancelar</i></button>


                <button type="submit" class="ui positive right labeled icon button">Cadastrar<i class="play icon"></i></button>


            </div>
    </div>
    </form>
</div>

<div class="ui modal" id="altFca">
    <div class="header"><i class="question icon"></i>Editar FAC</div>
    <div class="content">
        <form method="post" class="formEdit" action="" enctype="multipart/form-data" id="form">
            <div class="field">
                <div class="ui equal width grid">
                    <div class="equal width row">

                        <div class="column" style="margin-top: 5%;">
                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                            <div class="ui form">
                                <div class="field">
                                    <label>Pergunta</label>
                                    <textarea name="perguntas" id="perguntas" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="ui dividing header"></div>
                            <div class="ui form">
                                <div class="field">
                                    <label>Resposta</label>
                                    <textarea name="respostas" id="respostas" cols="30" rows="5"></textarea>
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
    // Modal Cadastro
    function novaFac() {
        $('#id').val('');
        $('#perguntas').val('');
        $('#respostas').val('');
        $('#dlgFca').modal('show');
    }

    // Modal Editar
    function editarFac(id, perguntas, respostas) {
        $('.formEdit').attr('action', '/alterarFac/' + id);
        $('#altFca #id').val(id);
        $('#altFca #perguntas').val(perguntas);
        $('#altFca #respostas').val(respostas);
        $('#altFca').modal('show');
    }

    
    // Mensagem de Excluir Linha
    function apagar(id) {
        Swal.fire({
            title: 'Deseja apagar isso?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, Delete isso!'
        }).then((result) => {
            if (result.value) {
                window.location.href = "/excluirFac/" + id;

            }

        })
    }
</script>


@endsection