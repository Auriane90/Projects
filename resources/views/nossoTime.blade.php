@extends('layout.Administracao') @section('corpo')
<div class="ui secondary menu">
    <div class="left menu">
        <h1 class="ui header">
            <i class="users icon"></i>Nosso Time
        </h1>
    </div>
    <div class="right menu">
        <button onclick="novoTime();" class="ui teal icon button">Novo</button>
    </div>
</div>


<table class="ui green table" id="idTabela">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cargo</th>
            <th>E-mail</th>
            <th>Ação</th>

        </tr>
    </thead>
    <tbody id="tbody">
        @foreach ($times as $t)
        <tr>
            <td data-label="Nome">{{$t->nome}}</td>
            <td data-label="Cargo">{{$t->cargo}}</td>
            <td data-label="E-mail">{{$t->email}}</td>
            <td data-label="Ação">
                <a class="ui tiny yellow icon button" onClick="editarTime('{{$t->id}}', '{{$t->nome}}', '{{$t->cargo}}', '{{$t->email}}', '{{$t->image}}')">
                    <i class="pencil icon"></i>
                </a>
                <a onClick="apagar('{{$t->id}}')" class="ui tiny red icon button">
                    <i class="trash icon"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="ui modal" id="dlgTime">
    <div class="header"><i class="users icon"></i>Cadastrar Time</div>
    <div class="content">
        <form method="post" action="/criarNossoTime" enctype="multipart/form-data" id="form">
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
                        <div class="column" style="margin-top: 5%;">
                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                            <div class="ui form">
                                <div class="field">
                                    <label>Nome</label>
                                    <input type="text" rows="2" name="nome" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="nome">
                                </div>
                            </div>
                            <div class="ui dividing header"></div>
                            <div class="ui form">
                                <div class="field">
                                    <label>Cargo</label>
                                    <input type="text" rows="2" name="cargo" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="cargo">
                                </div>
                            </div>
                            <div class="ui dividing header"></div>
                            <div class="ui form">
                                <div class="field">
                                    <label>E-mail</label>
                                    <input type="text" rows="2" name="email" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="email">
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

<div class="ui modal" id="altTime">
    <div class="header"><i class="users icon"></i>Editar Time</div>
    <div class="content">
        <form method="post" class="formEdit" action="" enctype="multipart/form-data" id="form">
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
                        <div class="column" style="margin-top: 5%;">
                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                            <div class="ui form">
                                <div class="field">
                                    <label>Nome</label>
                                    <input type="text" rows="2" name="nome" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="nome">
                                </div>
                            </div>
                            <div class="ui dividing header"></div>
                            <div class="ui form">
                                <div class="field">
                                    <label>Cargo</label>
                                    <input type="text" rows="2" name="cargo" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="cargo">
                                </div>
                            </div>
                            <div class="ui dividing header"></div>
                            <div class="ui form">
                                <div class="field">
                                    <label>E-mail</label>
                                    <input type="text" rows="2" name="email" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="email">
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

    function novoTime() {
        $('#id').val('');
        $('#nome').val('');
        $('#cargo').val('');
        $('#email').val('');
        $('#image').val('');
        $('#dlgTime').modal('show');
    }

    function editarTime(id, nome, cargo, email, image) {
        $('.formEdit').attr('action', '/alterarNossoTime/' + id);
        $('#visualizarImagem').attr('src', 'storage/' + image);
        $('#altTime #id').val(id);
        $('#altTime #nome').val(nome);
        $('#altTime #cargo').val(cargo);
        $('#altTime #email').val(email);
        $('#altTime #image').val(image);
        $('#altTime').modal('show');
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
                window.location.href = "/excluirNossoTime/" + id;

            }

        })
    }
</script>


@endsection