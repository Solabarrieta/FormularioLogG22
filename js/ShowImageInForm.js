function previewImage(){
    
    let file = document.getElementById("inputFile").onchange = (parametro)=>{
        if(file != ""){
            debugger
            let lector = new FileReader();
            lector.readAsDataURL(parametro.target.files[0]);
    
            lector.onload = ()=>{
                debugger
                let preview = document.getElementById("imagen"),
                image = document.createElement('img');
    
                image.src = lector.result;
    
                preview.innerHTML = '';
                preview.append(image);
            }
        }else{
            let text = document.getElementById("textFile");
            text.innerText="No se puede previsualizar la imagen, no se ha subido ninguna..."
        }
    };


}