function comprobarCamposVacios(){
    let email = document.getElementById("email").value;
    let enunciado = document.getElementById("enunciado").value;
    let resCorrecta = document.getElementById("correcta").value;
    let resIncorrecta = document.getElementById("incorrecta").value;
    let resIncorrecta1 = document.getElementById("incorrecta1").value;
    let resIncorrecta2 = document.getElementById("incorrecta2").value;
    let select = document.getElementById("complejidad").value;
    let tema = document.getElementById("tema").value;


    let requires = [{variable: email, parrafo: "textCorreo"},
                    {variable: resCorrecta, parrafo: "textCorrecta"},
                    {variable: resIncorrecta, parrafo: "textIncorrecta"},
                    {variable: resIncorrecta1, parrafo: "textIncorrecta1"},
                    {variable: resIncorrecta2, parrafo: "textIncorrecta2"},
                    {variable: select, parrafo: "textComplejidad"},
                    {variable: tema, parrafo: "textTema"}]
    
    let camposVacios=0; 

    let result = document.getElementById("textEnunciado");
    if(enunciado.value===""){
        result.innerText = 'Este campo es obligatorio';
    }else if(enunciado.length<10){
        result.innerText = `Este campo tiene que tener como minimo 10 caracteres, solo has puesto ${enunciado.length}`;
    }

    requires.forEach((entrada)=>{
        if(entrada.variable === ""){
            let result = document.getElementById(entrada.parrafo);
            result.innerText = 'Este campo es obligatorio';
            camposVacios++;
        }
    });
    if(camposVacios===0){
        testEmail();
    }
}




function testEmail(){
    let regIkasle = new RegExp('[a-z][a-z]+[0-9]{3}[@]ikasle\.ehu\.(eus|es)');
    let regIrakasle = new RegExp('([a-z]+\.[a-z]+[@]ehu\.(eus|es)|[a-z]+[@]ehu\.(eus|es))');

    let email = document.getElementById("email").value;
    
    if(regIkasle.test(email)||regIrakasle.test(email)){
        enviarCuestionario()
    }else{
        let result = document.getElementById("textEmail");
        result.innerText = `El correo ${email} no es valido, por favor introduce uno nuevo`
    }
}


function enviarCuestionario(){
    alert("Pregunta Creada correctamente!!");

}