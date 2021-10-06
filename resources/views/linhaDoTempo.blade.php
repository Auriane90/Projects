@extends('layout.Administracao') @section('corpo')

<div class="ui secondary menu">
    <div class="left menu">
        <h1 class="ui header">
            <i class="history icon"></i>Linha Do Tempo
        </h1>
    </div>
    <div class="right menu">
        <button onClick="novaLinha()" class="ui teal icon button">Novo</button>
    </div>
</div>

<div class="ui divider"></div>


<table class="ui celled striped table" id="idTabela">
    <thead>
        <tr>
            <th>Período</th>
            <th>Titulo</th>
            <th>Descrição</th>
            <th>Ação</th>

        </tr>
    </thead>
    <tbody id="tbody">
        @foreach ($linha as $l)

        <tr>
            <td data-label="Período" style="width:100px;">{{$l->periodo}}</td>
            <td data-label="Título">{{$l->titulo}}</td>
            <td data-label="Descrição">{{$l->descricao}}</td>
            <td data-label="Ação" style="width:100px;">
                <a class="ui tiny yellow icon button" onClick="editarLinha('{{$l->id}}', '{{$l->periodo}}', '{{$l->titulo}}', '{{$l->descricao}}', '{{$l->image}}')">
                    <i class="pencil icon"></i>
                </a>
                <a onClick="apagar('{{$l->id}}')" class="ui tiny red icon button">
                    <i class="trash icon"></i>
                </a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

<div class="ui modal" id="dlgLinha">
    <div class="header"><i class="history icon"></i>Cadastrar Linha Do Tempo</div>
    <div class="content">
        <form method="post" action="/criarlinha" enctype="multipart/form-data" id="form">
            <div class="field">
                <div class="ui equal width grid">
                    <div class="equal width row">
                        <div class="eight wide column">
                            <div class="ui special cards">
                                <div class="card">
                                    <div class="blurring dimmable image">
                                        <div class="ui dimmer transition hidden">
                                            <div class="content">
                                                <div class="center">
                                                    <div class="ui inverted button btn-file">
                                                        <span id="text-btn-file">Adicionar foto</span>
                                                        <input type="file" name="upload-imagem-cadastro" id="upload-imagem-cadastro">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="{{asset('img/intra_bola_branca.png')}}" id="visualizarImagemCadastro" class="ui Medium image">
                                    </div>
                                    <div class="extra content">
                                        <center>
                                            <p>Tamanho Máximo de Imagem 500x500</p>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column" style="margin-top: 5%;">
                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                            <div class="ui form">
                                <div class="field">
                                    <label>Período</label>
                                    <input type="text" rows="2" name="periodo" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="periodo" required="true">
                                </div>
                            </div>
                            <div class="ui dividing header"></div>
                            <div class="ui form">
                                <div class="field">
                                    <label>Título</label>
                                    <input type="text" rows="2" name="titulo" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="titulo">
                                </div>
                            </div>
                            <div class="ui dividing header"></div>
                            <div class="ui form">
                                <div class="field">
                                    <label>Descrição</label>
                                    <textarea name="descricao" id="descricao" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="ui dividing header"></div>

                        </div>
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

<div class="ui modal" id="altLinha">
    <div class="header"><i class="history icon"></i>Linha Do Tempo</div>
    <div class="content">
        <form method="post" class="formEdit" action="/criarlinha" enctype="multipart/form-data" id="form">
            <div class="field">
                <div class="ui equal width grid">
                    <div class="equal width row">
                        <div class="eight wide column">
                            <div class="ui special cards">
                                <div class="card">
                                    <div class="blurring dimmable image">
                                        <div class="ui dimmer transition hidden">
                                            <div class="content">
                                                <div class="center">
                                                    <div class="ui inverted button btn-file">
                                                        <span id="text-btn-file">Adicionar foto</span>
                                                        <input type="file" name="upload-imagem" id="upload-imagem">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="{{asset('img/intra_bola_branca.png')}}" id="visualizarImagem">
                                    </div>
                                    <div class="extra content">
                                        <center>
                                            <p>Tamanho Máximo de Imagem 500x500</p>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column" style="margin-top: 5%;">
                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                            <div class="ui form">
                                <div class="field">
                                    <label>Período</label>
                                    <input type="text" rows="2" name="periodo" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="periodo">
                                </div>
                            </div>
                            <div class="ui dividing header"></div>
                            <div class="ui form">
                                <div class="field">
                                    <label>Título</label>
                                    <input type="text" rows="2" name="titulo" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="titulo">
                                </div>
                            </div>
                            <div class="ui dividing header"></div>
                            <div class="ui form">
                                <div class="field">
                                    <label>Descrição</label>
                                    <textarea name="descricao" id="descricao" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="ui dividing header"></div>

                        </div>
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

    $(document).ready(function() {
        console.clear();
        $('.special.cards .image').dimmer({
            on: 'hover'
        });
        //cards especiais (imagem do veiculo com preview).
        $('.special.cards .image .imagemcardModal').dimmer({
            on: 'hover'
        });

        previewPessoa();
        previewPessoaCadastro();
    });

    // Modal Cadastrar
    function novaLinha() {
        $('#id').val('');
        $('#periodo').val('');
        $('#titulo').val('');
        $('#descricao').val('');
        $('#upload-imagem-cadastro').val('');
        $('#dlgLinha').modal('show');
    }

    // Modal Editar
    function editarLinha(id, periodo, titulo, descricao, image) {
        console.log(periodo);
        $('.formEdit').attr('action', '/alterarlinha/' + id);
        $('#visualizarImagem').attr('src', 'storage/' + image);
        $('#altLinha #id').val(id);
        $('#altLinha #periodo').val(periodo);
        $('#altLinha #titulo').val(titulo);
        $('#altLinha #descricao').val(descricao);
        $('#altLinha #image').val(image);
        $('#altLinha').modal('show');
    }

    //Função de preview da imagem pessoa que o usúario escolheu.
    function previewPessoa() {
        $("#upload-imagem").change(function() {
            const file = $(this)[0].files[0]
            const fileReader = new FileReader()

            fileReader.onloadend = function() {
                $("#visualizarImagem").attr('src', fileReader.result)
            }
            fileReader.readAsDataURL(file)
        });
    }

    function previewPessoaCadastro() {
        $("#upload-imagem-cadastro").change(function() {
            const file = $(this)[0].files[0]
            const fileReader = new FileReader()

            fileReader.onloadend = function() {
                $("#visualizarImagemCadastro").attr('src', fileReader.result)
            }
            fileReader.readAsDataURL(file)
        });
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
                window.location.href = "/excluirlinha/" + id;

            }

        })
    }
</script>

@endsection