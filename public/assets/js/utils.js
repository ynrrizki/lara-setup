// utils
/**
 * @param {*} url
 * @param {*} success
*/
function requestServer(params) {
    console.log('request dulu ges')
    $.ajax({
        url: params.url,
        type: params.type,
        dataType: params.dataType,
        success: params.success,
    })
}

/**
 * @param {*} route
 * @param {*} id
*/
function setupUrl(route, id) {
    let url = {}

    let url_edit = route.edit.replace(':id', id)
    let url_update = route.update.replace(':id', id)

    url = {
        edit: url_edit,
        update: url_update,
    }

    return url
}

/**
 * @param {*} modalElement
 * @param {*} formElement
 * @param {*} route
*/
function formAfterDismiss(modalElement, formElement, route) {
    modalElement.on('hidden.bs.offcanvas', function () {
        if (!$(this).hasClass('show')) {
            formElement[0].reset();
            formElement.attr('action', route);
            $(formElement.attr('id') + ' > input[name="_method"]').remove();
        }
    })
}

/**
 * @param {*} data
 * @param {*} modalTarget
 * @param {*} showUrlParams
*/
function generateActionButtons(data, modalTarget, showUrlParams, showDetails) {
    var show = '';
    if (showUrlParams != null && showUrlParams.length > 0) {
        showUrlParams = showUrlParams.replace(':id', data);
        show = `<a href="${showUrlParams}" class="btn btn-sm text-primary btn-icon item-show"><i class="bx bxs-show"></i></a>`
        showDetails = `<a href="${showDetails}" target="_blank" class="btn btn-sm text-primary btn-icon item-show"><i class="bx bx-plus"></i></a>`
        return (
            `
            <a href="javascript:;" class="btn btn-sm text-danger btn-icon item-delete" data-bs-toggle="modal" data-bs-target="#modal-confirm" data-delete="${data}"><i class="bx bxs-trash"></i></a>
            <a href="javascript:;" class="btn btn-sm text-primary btn-icon item-edit" data-bs-toggle="modal" data-bs-target="#${modalTarget.attr('id')}" data-edit="${data}"><i class="bx bxs-edit"></i></a>
            ${show}
            `
        )
    }
    return (
        `
        <a href="javascript:;" class="btn btn-sm text-danger btn-icon item-delete" data-bs-toggle="modal" data-bs-target="#modal-confirm" data-delete="${data}"><i class="bx bxs-trash"></i></a>
        <a href="javascript:;" class="btn btn-sm text-primary btn-icon item-edit" data-bs-toggle="modal" data-bs-target="#${modalTarget.attr('id')}" data-edit="${data}"><i class="bx bxs-edit"></i></a>
        `
    )
}
