function alterarImg(img, input){

    var target = document.getElementById(img);
    
    var file = document.querySelector('#'+input).files[0];    
    var reader = new FileReader();
    
    reader.onloadend = function () {
    
    target.src = reader.result;
    
    };
    
    if (file) {
    
    reader.readAsDataURL(file);
    
    } else {
    
    target.src = "";
    
    }
    
    }