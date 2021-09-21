function previewImage(){
    const inputFile = document.getElementById("inputFile");
    const etImagen = document.getElementById("imagePreview");
    
    inputFile.onchange = () => {
        const reader = new FileReader();
        console.log(inputFile.files[0]);
        reader.readAsDataURL(inputFile.files[0]);

        reader.onload = () => {
            etImagen.setAttribute("src", reader.result);
            console.log(reader.result);
        }
    
    }
}