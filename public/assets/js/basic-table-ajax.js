$(document).ready(function () {
    'use strict';
    var dt_basic_table = basic_table_config.idTable
    var dt_form_modal = basic_table_config.idFormModal
    var storeUrl = basic_table_config.storeUrl
    var showUrl = basic_table_config.showUrl ?? ''
    var showDetails = basic_table_config.showDetails ?? ''
    var editUrl = basic_table_config.editUrl
    var updateUrl = basic_table_config.updateUrl
    var header_actions_position = basic_table_config.header_actions_position

    dt_basic_table.show();
    if (dt_basic_table.length) {
        dt_basic_table.DataTable({
            columnDefs: [{
                targets: 0,
                orderable: false,
                searchable: false,
                checkboxes: true,
            },
            {
                targets: header_actions_position,
                orderable: false,
                searchable: false,
                render: function (data, type, full, meta) {
                    return generateActionButtons(data, dt_form_modal, showUrl, showDetails);
                }
            }
            ],
            dom: '<"row mx-1"<"col-sm-12 col-md-3" l><"col-sm-12 col-md-9"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-md-end justify-content-center flex-wrap me-1"<"me-3"f>B>>>t<"row mx-2"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            language: {
                sLengthMenu: "_MENU_",
                search: "Search",
                searchPlaceholder: "Search.."
            },
            buttons: [{
                text: "Tambah",
                className: "add-new btn btn-primary mb-3 mb-md-0",
                attr: {
                    "data-bs-toggle": "modal",
                    "data-bs-target": "#" + dt_form_modal.attr('id')
                },
                init: function (api, node, config) {
                    $(node).removeClass("btn-secondary")
                }
            }],
        });
    }

    $('#head-cb').on('click', function () {
        $('.child-cb').prop('checked', this.checked)
    })

    $('.item-delete').on('click', function () {
        let data = $(this).data('delete')
        if (!$('input[name="ids[]"]:checked').length > 0) {
            $('input[name="id-confirm"]').val(data)
        }
    });

    $('.item-edit').on('click', function () {
        let id = $(this).data('edit')
        console.log('ngedit dulu gak seh?')
        let url = setupUrl({
            edit: editUrl,
            update: updateUrl
        }, id)
        requestServer({
            url: url.edit,
            type: 'GET',
            dataType: 'json',
            success: basic_table_config.requestServer,
        })
        dt_form_modal.find('input[name="_method"]').val('PUT')
        dt_form_modal.find('form').attr('action', url.update)
    })
    dt_form_modal.on('hidden.bs.modal', function () {
        $(this).find('form')[0].reset() // Reset the form inputs
        $(this).find('form').attr('action', storeUrl)
        $(this).find('input[name="_method"]').val('POST') // Reset the form method if needed
    });
})
