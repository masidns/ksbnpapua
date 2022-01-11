 // upload multiple file
var images = [];
var formData = new FormData();
function image_select() {
    var image = document.querySelector('#image').files;

    for (i = 0; i < image.length; i++) {
        if (check_duplicate(image[i])) {
            var item = {
                "name": image[i].name,
                "url": URL.createObjectURL(image[i]),
                "file": image[i],
            }
            images.push(item);
        }else{
            Swal.fire({
                title: 'Error!',
                text: image[i].name + " Gambar sudah ada!",
                icon: 'error'
            })
        }
    }
    $.each($('input[type=file]')[0].files, function(i, value){
        formData.append('gallerygambar['+i+']', value); // change this to value
    });
    document.getElementById('form').reset();
    document.getElementById('containerImage').innerHTML = image_show();
    
    // console.log(images);
}

$("form#form").submit(function(e) {
    e.preventDefault();  
    var item = document.getElementById('validationServer04').value;
    formData.append('newsevents_id', document.getElementById('validationServer04').value);
    $.ajax({
        url: "http://" + window.location.host + "/gallery/save",
        type: 'POST',
        data: formData,
        success: function (data) {
            Swal.fire({
                title: 'Success',
                text: "Proses Berhasil",
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                allowOutsideClick: false,
                }).then((result) => {
                if (result.isConfirmed) {
                    history.back();
                }
            })
        },
        cache: false,
        contentType: false,
        processData: false
    });
});

function image_show() {
    var image = "";
    images.forEach(item => {
        image += '<div class="image-container d-flex justify-align-content-center position-relative"><img src="' + item.url +'" alt=""><span class="position-absolute" onclick="delete_image('+ images.indexOf(item) +')"> &times;</span></div>';
    });
    return image;
}
    
function delete_image(e) {
    images.splice(e, 1);
    document.getElementById('containerImage').innerHTML = image_show();
}

// cek duplicate
function check_duplicate(param) {
    var image = true;
    if (images.length > 0) {
        for (i = 0; i < images.length; i++){
            if (images[i].name == param.name) {
                image = false;
                break;
            }
        }   
    }
    return image;
}
    // console.log('testing');
    // upload multiple file
    