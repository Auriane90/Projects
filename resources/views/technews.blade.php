@extends('layout.Administracao')@section('corpo')
<div class="ui secondary menu">
    <div class="left menu">
        <h1 class="ui header">
            <i class="newspaper icon"></i>Technews
        </h1>
    </div>
    <div class="right menu">
        <button onclick="novoTechnews();" class="ui teal icon button">Novo</button>
    </div>
</div>

<div class="ui divider"></div>


<table class="ui green table" id="idTabela">
    <thead>
        <tr>
            <th>Título</th>
            <th>Subtitulo</th>
            <th>Data</th>
            <th>Cliente</th>
            <th>Descrição</th>
            <th>Ação</th>

        </tr>
    </thead>
    <tbody id="tbody">
        @foreach ($tec as $t)
        <tr>
            <td data-label="Título">{{$t->titulo}}</td>
            <td data-label="Subtitulo">{{$t->subtitulo}}</td>
            <td data-label="Data">{{$t->data}}</td>
            <td data-label="Cliente">{{$t->cliente}}</td>
            <td data-label="Descrição">{{$t->descricao}}</td>
            <td data-label="Ação" style="width:100px;">
                <a value="{{$t->id}}" class="ui tiny yellow icon button" onClick="editarLinha({{$t->id}}, '{{$t->titulo}}', '{{$t->subtitulo}}', '{{$t->data}}', '{{$t->cliente}}', '{{$t->descricao}}', '{{$t->image}}')">
                    <i class="pencil icon"></i>
                </a>
                <a onClick="apagar({{$t->id}})" class="ui tiny red icon button">
                    <i class="trash icon"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="ui modal" id="dlgTechnews">
    <div class="header"><i class="newspaper icon"></i>Cadastrar Technews</div>
    <div class="content">
        <form method="post" action="/criarTechnews" enctype="multipart/form-data" id="form">
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
                                        <img src="{{asset('img/intra_bola_branca.png')}}" id="visualizarImagemCadastro">
                                    </div>
                                    <div class="extra content">
                                        <center>
                                            <p>Tamanho Máximo de Imagem 500x500</p>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui form">
                                <div class="field">
                                    <label>Título</label>
                                    <input type="text" rows="2" name="titulo" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="titulo">
                                </div>
                            </div>
                            <div class="ui dividing header"></div>
                            <div class="ui form">
                                <div class="field">
                                    <label>Subtitulo</label>
                                    <input type="text" rows="2" name="subtitulo" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="subtitulo">
                                </div>
                            </div>
                            <div class="ui dividing header"></div>
                            <div class="ui form">
                                <div class="field">
                                    <label>Data</label>
                                    <input type="text" rows="2" name="data" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="data">
                                </div>
                            </div>
                            <div class="ui dividing header"></div>
                            <div class="ui form">
                                <div class="field">
                                    <label>Cliente</label>
                                    <input type="text" rows="2" name="cliente" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="cliente">
                                </div>
                            </div>
                            <div class="ui dividing header"></div>

                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                        </div>

                    </div>
                    <div class="ui form">
                        <div class="field">
                            <label>Descrição</label>
                            <textarea name="descricao" id="descricao" cols="110" rows="5"></textarea>
                        </div>
                    </div><br>

                </div><br>
            </div>
            <div class="actions">

                <button type="reset" class="ui black deny button">Cancelar</i></button>


                <button type="submit" class="ui positive right labeled icon button">Cadastrar<i class="play icon"></i></button>


            </div>
    </div>
    </form>
</div>



<div class="ui modal" id="altTechnews">
    <div class="header"><i class="newspaper icon"></i>Editar Technews</div>
    <div class="content">
        <form method="post" action="/criarTechnews" class="formEdit" enctype="multipart/form-data" id="form">
            <div class="field">
                <div class="ui equal width grid">
                    <div class="equal width row">
                        <div class="column" style="margin-top: 2%;">

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
                                        <img src="" id="visualizarImagem">
                                    </div>
                                    <div class="extra content">
                                        <center>
                                            <p>Tamanho Máximo de Imagem 500x500</p>
                                        </center>
                                    </div>
                                </div>
                            </div>






                        </div>
                        <div class="column" style="margin-top: 2%;">
                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                            <div class="ui form">
                                <div class="field">
                                    <label>Título</label>
                                    <input type="text" rows="2" name="titulo" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="titulo">
                                </div>
                            </div>
                            <div class="ui dividing header"></div>
                            <div class="ui form">
                                <div class="field">
                                    <label>Subtitulo</label>
                                    <input type="text" rows="2" name="subtitulo" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="subtitulo">
                                </div>
                            </div>
                            <div class="ui dividing header"></div>
                            <div class="ui form">
                                <div class="field">
                                    <label>Data</label>
                                    <input type="text" rows="2" name="data" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="data">
                                </div>
                            </div>
                            <div class="ui dividing header"></div>
                            <div class="ui form">
                                <div class="field">
                                    <label>Cliente</label>
                                    <input type="text" rows="2" name="cliente" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="cliente">
                                </div>
                            </div>


                            <div class="ui dividing header"></div>

                        </div>
                    </div>
                    <div class="ui form">
                        <div class="field">
                            <label>Descrição</label>
                            <textarea name="descricao" id="descricao" cols="110" rows="5"></textarea>
                        </div>
                    </div><br>
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

    // Modal Cadastro
    function novoTechnews() {
        $('#id').val('');
        $('#titulo').val('');
        $('#subtitulo').val('');
        $('#data').val('');
        $('#cliente').val('');
        $('#upload-imagem-cadastro').val('');
        $('#dlgTechnews').modal('show');
    }

    // Modal Editar
    function editarLinha(id, titulo, subtitulo, data, cliente, descricao, image) {

        $('.formEdit').attr('action', '/alterarTechnews/' + id);
        $('#visualizarImagem').attr('src', 'storage/' + image);
        $('#altTechnews #id').val(id);
        $('#altTechnews #titulo').val(titulo);
        $('#altTechnews #subtitulo').val(subtitulo);
        $('#altTechnews #data').val(data);
        $('#altTechnews #cliente').val(cliente);
        $('#altTechnews #descricao').val(descricao);
        $('#altTechnews').modal('show');


    }

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
                window.location.href = "/excluirTechnews/" + id;

            }

        })
    }
</script>


@endsection