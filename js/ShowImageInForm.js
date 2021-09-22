    /*
    const etImagen = document.getElementById("imagePreview");
    
    inputFile.onchange = () => {
        const reader = new FileReader();
        console.log(inputFile.files[0]);
        reader.readAsDataURL(inputFile.files[0]);

        reader.onload = () => {
            etImagen.setAttribute("src", reader.result);
            console.log(reader.result);
        }
    
    }*/
    function previewImage(){
        const inptFile = document.getElementById("inputFile");
        const figura = document.createElement("figure");
        const etDiv = document.getElementById("div-image");
        const imagen = document.createElement("img");

        figura.classList.add('image-container');

        etDiv.appendChild(figura);

        imagen.classList.add("image-container__image");
        figura.appendChild(imagen);
        inptFile.onchange = ()=>{
            const reader = new FileReader();
            reader.readAsDataURL(inptFile.files[0]);
    
            reader.onload = ()=> {
                imagen.setAttribute("src", reader.result);
            }
        } 

    }