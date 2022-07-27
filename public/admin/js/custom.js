$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

let errorMsg = $('.errorMsg'),
    url = '',
    dataTable = $('#dataTable'),
    formData;




function runToast(msg, code){

    if (code == '200'){
        Notiflix.Notify.success(msg);
    }else{
        Notiflix.Notify.failure(msg);
    }
}


function runAjaxPrompt(url, type = null){
    Notiflix.Block.pulse('#dataTable');
    let msg = 'You won\'t be able to revert this!';

    if (type === 'product'){

        msg = "Deleting a product will delete it from all available stores. Are you sure you want to proceed?"
    }

    Notiflix.Confirm.show(
        'Are You Sure?',
        msg,
        'Yes, Delete',
        'No',
        function okCb() {
            $.post(url, function (response){
                console.log(response)
                if(response.code == '200'){
                    Notiflix.Report.success(
                        'Success',
                        response.msg,
                        'Okay',
                    );
                    $('#dataTable').DataTable().ajax.reload();
                }else{
                    runToast(response.msg, response.code)
                }
            });


        },
        {
            width: '320px',
            borderRadius: '8px',
        },
    );
    Notiflix.Block.remove('#dataTable');

}



function updateSubmitAttrAndShowModal(form, url, modal, formType){
    if (formType === 'class'){
        form = $('.'+form);
    }else{
        form = $('#'+form);
    }

    form.attr('action', url);
    console.log(form.attr('action'));

    showModal($('#'+modal));
}

function showModal(modal){
    modal.modal('show');
}

function hideModal(modal){
    modal.modal('hide');
}


//========================== FORM SUBMIT FUNCTION ======================


function runSubmission(url, form, withDatatable = false){

    // Notiflix.Block.pulse('.addItem');

    $.ajax({

        url: url,
        method: 'POST',
        data: form,
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,

    }).done((response) => {

        console.log('', response)

        if(response.code == '200'){

            runToast(response.msg, response.code)

            if(withDatatable == true){
                $('#dataTable').DataTable().ajax.reload();
            }

            // Notiflix.Block.remove('.addItem');

            setTimeout(function () {

                $('.addItem').closest('.modal').modal('hide');

            }, 1000)

            $(".addItem").trigger("reset");

            $("select").val(null).trigger("change");


        }else{

            runToast(response.msg, response.code)

            // Notiflix.Block.remove('.addItem');
        }
    })
}

$('.addItem').submit(function (e){
    e.preventDefault();

    url = $(this).attr('action');

    formData = new FormData(this);

    runSubmission(url, formData, false);
});




//========================== LIST ITEM DELETE FUNCTION ======================
dataTable.on('click', '#deleteBtn', function (e){
    e.preventDefault();
    runAjaxPrompt($(this).attr('href'));
    updateData()
});

dataTable.on('click', '#updateBtn', function (e){
    e.preventDefault();

    $.post($(this).attr('href'), function (response) {
        console.log('update response', response)

        if (response.code == "200"){
            console.log('update response', response)
            $('#edit_aifr').val(response.data.aifr)
            $('#edit_trifr').val(response.data.trifr)
            $('#edit_ltirf').val(response.data.ltirf)
            $('#edit_lti').val(response.data.lti)
            $('#edit_damage_free').val(response.data.damage_free)


            updateSubmitAttrAndShowModal('editIndicator', response.url, 'editModal', 'id');
        }
        })
    })
