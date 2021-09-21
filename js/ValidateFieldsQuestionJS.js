
    let regIkasle = new RegExp('[a-z][a-z]+[0-9]{3}[@]ikasle\.ehu\.(eus|es)');
    let regIrakasle = new RegExp('([a-z]+\.[a-z]+[@]ehu\.(eus|es)|[a-z]+[@]ehu\.(eus|es))');
    let email = document.getElementById("correo").value;
    let enunciado = document.getElementById("enunciado").value;
    let resCorrecta = document.getElementById("correcta").value;
    let resIncorrecta = document.getElementById("incorrecta").value;
    let resIncorrecta1 = document.getElementById("incorrecta1").value;
    let resIncorrecta2 = document.getElementById("incorrecta2").value;
    let select = document.getElementById("complejidad").value;
    let tema = document.getElementById("tema").value;
    let image = document.getElementById("inputFile").value;

function testEmail(){
    
    if(regIkasle.test(email)||regIrakasle.test(email)){
        enviarCuestionario()
    }else{
        let result = document.getElementById("textEmail");
        result.innerText = `El correo ${email} no es valido, por favor introduce uno nuevo`
    }
}



function comprobarCamposVacios(){
    let requires = [{variable: email, parrafo: "textCorreo"},
                    {variable: enunciado, parrafo: "textEnunciado"},
                    {variable: resCorrecta, parrafo: "textCorrecta"},
                    {variable: resIncorrecta, parrafo: "textIncorrecta"},
                    {variable: resIncorrecta, parrafo: "textIncorrecta1"},
                    {variable: resIncorrecta2, parrafo: "textIncorrecta2"},
                    {variable: select, parrafo: "textComplejidad"},
                    {variable: tema, parrafo: "textTema"},
                    {variable: image, parrafo: "textImage"}]
    
    let camposVacios=0; 
    debugger
    requires.map(()=>{
        if(requires.variable === null){
            let result = document.getElementById(requires.parrafo);
            result.innerText = 'Este campo es obligatorio'
            camposVacios++;
        }
    });

    if(camposVacios===0){
        testEmail();
    }
}

function enviarCuestionario(){
    alert("Pregunta Creada correctamente!!");

}