/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var page = "controller/controller.php";
var table = $('#tabela_datable').DataTable();

function attTable(data){
    table.destroy();
    $("#tbody").html(data);
    table = $('#tabela_datable').DataTable({
        "lengthChange": false,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
        }
    });
}

// Timeline
function getDelTimeline(valorId) {
    $.ajax({
        type: 'POST',
        url: page,
        async: false,
        data: {
            action: "deleteData",
            idTimeline: valorId
        }, success: function (data, textStatus, jqXHR) {
            attTable(data);
            showData();
        }
    });
}

function showData() {
    $.ajax({
        url: page,
        type: 'POST',
        data: {
            action: "mostrarDados"
        },
        success: function (data) {
            attTable(data);
            $(".delTimeline").click(function () {
                var valorId = $(this).attr("id");
                swal({
                    title: 'VocÃª confirma esta operaÃ§Ã£o?',
                    text: "Essa operaÃ§Ã£o nÃ£o poderÃ¡ ser revestida!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonText: 'Cancelar',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim, eu desejo!'
                }).then((result) => {
                    if (result.value) {
                    if (getDelTimeline(valorId)) {
                        swal(
                            'Apagado!',
                            'Esse dado foi removido com sucesso.',
                            'success'
                        ).then((result) => {
                            alert('entrei');
                            showData();
                        });
                    }
                }
            });
            });
        }
    });
}
// Fim da Timeline

// Sistema
function showSystem() {
    $.ajax({
        url: page,
        type: 'POST',
        data: {
            action: "mostrarSistemas"
        },
        success: function (data) {
            table.destroy();
            $("#tbody").html(data);
            table = $('#tabela_datable').DataTable({
                "lengthChange": false,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
                }
            });
            $(".delSystem").click(function () {
                var valorId = $(this).attr("id");
                swal({
                    title: 'VocÃª confirma esta operaÃ§Ã£o?',
                    text: "Essa operaÃ§Ã£o nÃ£o poderÃ¡ ser revestida!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonText: 'Cancelar',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim, eu desejo!'
                }).then((result) => {
                    if (result.value) {
                    if (getDelSystem(valorId)) {
                        swal(
                            'Apagado!',
                            'Esse dado foi removido com sucesso.',
                            'success'
                        )
                        showSystem();
                    }

                }
            });
            });
        }
    });
}

function getDelSystem(valorId) {
    var boolean = true;
    $.ajax({
        type: 'POST',
        url: page,
        async: false,
        data: {
            action: "deleteDataSystem",
            idTimeline: valorId
        }, success: function (data, textStatus, jqXHR) {
            boolean = true;
        }
    });
    return boolean;
}
// Fim do sistema

// Portfolio
function showPortfolio() {
    $.ajax({
        url: page,
        type: 'POST',
        data: {
            action: "mostrarPortfolio"
        },
        success: function (data) {
            table.destroy();
            $("#tbody").html(data);
            table = $('#tabela_datable').DataTable({
                "lengthChange": false,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
                }
            });

            $(".delPortfolio").click(function () {
                var valorId = $(this).attr("id");
                swal({
                    title: 'VocÃª confirma esta operaÃ§Ã£o?',
                    text: "Essa operaÃ§Ã£o nÃ£o poderÃ¡ ser revestida!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonText: 'Cancelar',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim, eu desejo!'
                }).then((result) => {
                    if (result.value) {
                    if (getDelPortfolio(valorId)) {
                        swal(
                            'Apagado!',
                            'Esse dado foi removido com sucesso.',
                            'success'
                        )
                        showPortfolio();
                    }
                }
            });
            });
        }
    });
}

function getDelPortfolio(valorId) {
    var boolean = true;
    $.ajax({
        type: 'POST',
        url: page,
        async: false,
        data: {
            action: "deleteDataPortfolio",
            idPortfolio: valorId
        }, success: function (data, textStatus, jqXHR) {
            boolean = true;
            //$("swal2-confirm swal2-styled").click(showData());
        }
    });
    return boolean;
}
// Fim portfolio

//FAC
function showFac() {
    $.ajax({
        url: page,
        type: 'POST',
        data: {
            action: "mostrarPerguntas"
        },
        success: function (data) {
            table.destroy();
            $("#tbody").html(data);
            table = $('#tabela_datable').DataTable({
                "lengthChange": false,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
                }
            });
            $(".delFac").click(function () {
                var valorId = $(this).attr("id");
                swal({
                    title: 'VocÃª confirma esta operaÃ§Ã£o?',
                    text: "Essa operaÃ§Ã£o nÃ£o poderÃ¡ ser revestida!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonText: 'Cancelar',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim, eu desejo!'
                }).then((result) => {
                    if (result.value) {
                    if (getDelFac(valorId)) {
                        swal(
                            'Apagado!',
                            'Esse dado foi removido com sucesso.',
                            'success'
                        )
                        showFac();
                    }

                }
            });
            });
        }
    });
}

function getDelFac(valorId) {
    var boolean = true;
    $.ajax({
        type: 'POST',
        url: page,
        async: false,
        data: {
            action: "deleteDataFac",
            idFac: valorId
        }, success: function (data, textStatus, jqXHR) {
            boolean = true;
        }
    });
    return boolean;
}
//Fim do FAC

//Time
function showTeam() {
    $.ajax({
        url: page,
        type: 'POST',
        data: {
            action: "mostrarEquipe"
        },
        success: function (data) {
            table.destroy();
            $("#tbody").html(data);
            table = $('#tabela_datable').DataTable({
                "lengthChange": false,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
                }
            });

            $(".delTeam").click(function () {
                var valorId = $(this).attr("id");
                swal({
                    title: 'VocÃª confirma esta operaÃ§Ã£o?',
                    text: "Essa operaÃ§Ã£o nÃ£o poderÃ¡ ser revestida!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonText: 'Cancelar',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim, eu desejo!'
                }).then((result) => {
                    if (result.value) {
                    if (getDelTeam(valorId)) {
                        swal(
                            'Apagado!',
                            'Esse dado foi removido com sucesso.',
                            'success'
                        )
                        showTeam();
                    }
                }
            });
            });
        }
    });
}

function getDelTeam(valorId) {
    var boolean = true;
    $.ajax({
        type: 'POST',
        url: page,
        async: false,
        data: {
            action: "deleteDataTeam",
            idTeam: valorId
        }, success: function (data, textStatus, jqXHR) {
            boolean = true;
        }
    });
    return boolean;
}
//Fim do time

//Atendimento

function showAttendance() {
    $.ajax({
        url: page,
        type: 'POST',
        data: {
            action: "mostrarAtendimentos"
        },
        success: function (data) {
            table.destroy();
            $("#tbody").html(data);
            table = $('#tabela_datable').DataTable({
                "lengthChange": false,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
                }
            });
        }
    });
}
//Fim Atendimento