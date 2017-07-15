/**
 * Created by My_Pc on 28.05.2017.
 */
/*$.ajaxSetup({
    headers:{'X-CSRF-TOKEN':csrfToken
    }
});*/
$(function() {
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    var durum=parseInt($("body").data("status"));
    switch(durum){
        case 0:
            toastr.error('Hata Oluştu');
            break;
        case 1:
            toastr.success('İşlem Başarılı');
            break;
        case 2:
            toastr.info('İşlem Başarılı Fakat Yönetici Onayından Sonra Aktifleşecektir.');
            break;
        case 3:
            toastr.info('Bu Kayıt Size Ait Olmadığı İçin Silemezsiniz');
            break;


    }
});
$('[data-toggle="tooltip"]').tooltip();

$(document).ready(function() {

    //Show additional info text box when relevant checkbox checked
    $('.list-group-item').click(function() {
        if($('#item').is(':checked')) {

            $(this).closest('.additional-info-wrap').find('.additional-info').removeClass('hide').find('input,select').removeAttr('disabled');
        }
        else {
            $(this).closest('.additional-info-wrap').find('.additional-info').addClass('hide').find('input,select').val('').attr('disabled','disabled');
        }
    });
});

(function(a){a.createModal=function(b){
        defaults={title:"",
        message:"Your Message Goes Here!",
        closeButton:true,
        scrollable:false
    };
    var b=a.extend({},defaults,b);var c=(b.scrollable===true)?'overflow-y: auto;"':"";html='<div class="modal fade" id="myModal" >';html+='<div class="modal-dialog modal-lg">';html+='<div class="modal-content">';html+='<div class="modal-header">';html+='<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';if(b.title.length>0){html+='<h4 class="modal-title">'+b.title+"</h4>"}html+="</div>";html+='<div class="modal-body" '+c+">";html+=b.message;html+="</div>";html+='<div class="modal-footer">';if(b.closeButton===true){html+='<button type="button" class="btn btn-primary" data-dismiss="modal">Kapat</button>'}html+="</div>";html+="</div>";html+="</div>";html+="</div>";a("body").prepend(html);a("#myModal").modal().on("hidden.bs.modal",function(){a(this).remove()})}})(jQuery);

/*
 * Here is how you use it
 */
$(function(){
    $('.view-pdf').on('click',function(){
        var pdf_link = $(this).attr('href');
        var iframe = '<div class="iframe-container"><iframe src="'+pdf_link+'"></iframe></div>'
        $.createModal({
            title:'Gelen Fax',
            message: iframe,
            closeButton:true,
            scrollable:false
        });
        return false;
    });
})