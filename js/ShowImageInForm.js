let n = 0;

function previewImage(){

    if(n===0){

        const inptFile = document.getElementById("inputFile");
        const section = document.getElementById("s1");
        const imagen = document.createElement("img");
        const text = document.createElement("p");
        const salto = document.createElement("br");


        imagen.classList.add("image-container__image");
        text.innerText = 'Imagenes seleccionadas : ';
        section.appendChild(text);
        section.appendChild(salto);

        
        section.appendChild(imagen);

        inptFile.onchange = ()=>{
            const reader = new FileReader();
            reader.readAsDataURL(inptFile.files[0]);
    
            reader.onload = ()=> {
                imagen.setAttribute("src", reader.result);
            }
        } 
        n++;
    }
}