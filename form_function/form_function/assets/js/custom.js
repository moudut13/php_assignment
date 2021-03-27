$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});


$('input[name="photo"]').change(function (e){
    let file_url = URL.createObjectURL(e.target.files[0]);
    $('img#view_photo').attr('src',file_url);
});