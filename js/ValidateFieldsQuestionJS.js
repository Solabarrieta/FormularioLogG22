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


    requires.forEach((entrada)=>{
        if(entrada.variable === ""){
            let result = document.getElementById(entrada.parrafo);
            camposVacios++;
        }
    });

    if(testEmail(email)){
        if(camposVacios===0){
            let result = document.getElementById("textEnunciado");
            if(enunciado.value===""){
                alert('Este campo es obligatorio');
                return false;
            }else if(enunciado.length<10){
                alert(`Este campo tiene que tener como minimo 10 caracteres, solo has puesto ${enunciado.length}`);
                return false;
            }else{
                return true;
            }
        }else{
            alert('Hay campos sin rellenar');
            return false;
        }
    
    }else{
        alert('El correo que has introducido no es correcto!');
    }
}




function testEmail(){
    let regIkasle =/[a-z][a-z]+[0-9]{3}[@]ikasle\.ehu\.(eus|es)/ ;
    let regIrakasle = /([a-z]+\.[a-z]+[@]ehu\.(eus|es)|[a-z]+[@]ehu\.(eus|es))/;

    let email = document.getElementById("email").value;
    
    if(regIkasle.test(email)||regIrakasle.test(email)){
        return true;
    }else{
        let result = document.getElementById("textEmail");
        alert(`El correo ${email} no es valido, por favor introduce uno nuevo`);
        return false;
    }
}


function enviarCuestionario(){
    alert("Pregunta Creada correctamente!!");

}