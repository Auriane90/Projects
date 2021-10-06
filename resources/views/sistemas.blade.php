@extends('layout.Administracao') @section('corpo')

<div class="ui secondary menu">
    <div class="left menu">
        <h1 class="ui header">
            <i class="desktop icon"></i>Sistemas
        </h1>
    </div>
    <div class="right menu">
        <button onClick="novoSistema()" class="ui teal icon button">Novo</button>
    </div>
</div>

<div class="ui divider"></div>



<table class="ui green table" id="idTabela">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Ação</th>

        </tr>
    </thead>
    <tbody id="tbody">

        @foreach ($sistemas as $s)

        <tr>
            <td data-label="Nome">{{$s->nome}}</td>
            <td data-label="Ação">
                <a class="ui tiny yellow icon button" onClick="EdiatarSistema('{{$s->id}}', '{{$s->nome}}', '{{$s->image}}')">
                    <i class="pencil icon"></i>
                </a>
                <a onClick="apagar('{{$s->id}}')" class="ui tiny red icon button">
                    <i class="trash icon"></i>
                </a>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>

<div class="ui modal" id="dlgSistemas">
    <div class="header"><i class="desktop icon"></i>Cadastrar Sistemas</div>
    <div class="content">
        <form method="post" action="/criarSistema" enctype="multipart/form-data" id="form">
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
                        <div class="column" style="margin-top: 2%;">
                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                            <div class="ui form">
                                <div class="field">
                                    <label>Nome</label>
                                    <input type="text" rows="2" name="nome" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="nome">
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

<div class="ui modal" id="altSistemas">
    <div class="header"><i class="desktop icon"></i>Editar Sistemas</div>
    <div class="content">
        <form method="post" action="" class="formEdit" enctype="multipart/form-data" id="form">
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
                        <div class="column" style="margin-top: 2%;">
                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                            <div class="ui form">
                                <div class="field">
                                    <label>Nome</label>
                                    <input type="text" rows="2" name="nome" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;" id="nome">
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

    // Modal Cadastrar
    function novoSistema() {
        $('#id').val('');
        $('#nome').val('');
        $('#upload-imagem-cadastro').val('');
        $('#dlgSistemas').modal('show');
    }

    // Modal editar
    function EdiatarSistema(id, nome, image) {
        $('.formEdit').attr('action', '/alterarSistemas/' + id);
        $('#visualizarImagem').attr('src', 'storage/' + image);
        $('#altSistemas #id').val(id);
        $('#altSistemas #nome').val(nome);
        $('#altSistemas').modal('show');
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

    // Pesquisa
    // Pesquisa
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
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
                window.location.href = "/excluirSistema/" + id;

            }

        })
    }
</script>


@endsection