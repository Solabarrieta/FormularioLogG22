$(function (){//Esta es la abreviatura de $(document).ready(function loquesea(){});
 $("#boton").click(function(){
    let correcto = false;
    let email = $("#email").val();
    let enunciado = $("#enunciado").val();
    let resCorrecta = $("#correcta").val();
    let resIncorrecta = $("#incorrecta").val();
    let resIncorrecta1 = $("#incorrecta1").val();
    let resIncorrecta2 = $("#incorrecta2").val();
    let select = $("#complejidad").val();
    let tema = $("#tema").val();


    let requires = [{variable: email, parrafo: "textCorreo"},
                    {variable: resCorrecta, parrafo: "textCorrecta"},
                    {variable: resIncorrecta, parrafo: "textIncorrecta"},
                    {variable: resIncorrecta1, parrafo: "textIncorrecta1"},
                    {variable: resIncorrecta2, parrafo: "textIncorrecta2"},
                    {variable: select, parrafo: "textComplejidad"},
                    {variable: tema, parrafo: "textTema"}];

    let camposVacios = 0;

    let result = $("#textEnunciado");
    if(enunciado.value===""){
        result.html('Este campo es obligatorio');
    }else if(enunciado.length<10){
         result.html(`Este campo tiene que tener como minimo 10 caracteres, solo has puesto ${enunciado.length}`);
    }


    requires.forEach((entrada)=>{
        if(entrada.variable === ""){
            let str = "#" + entrada.parrafo;
            let result = $(str);
            result.html('Este campo es obligatorio');
            camposVacios++;
        }
    });


    if(camposVacios === 0 && testEmail()){
        enviarCuestionario();
    }

    function testEmail(){
        let regIkasle = new RegExp('[a-z][a-z]+[0-9]{3}[@]ikasle\.ehu\.(eus|es)');
        let regIrakasle = new RegExp('([a-z]+\.[a-z]+[@]ehu\.(eus|es)|[a-z]+[@]ehu\.(eus|es))');
        debugger
        let email = $("#email").val();
        
        if(regIkasle.test(email)||regIrakasle.test(email)){
            return true;
        }else{
            let result = $("#textEmail");
            result.html(`El correo ${email} no es valido, por favor introduce uno nuevo`);
            return false;
        }
    }

    function enviarCuestionario(){
        alert("Pregunta creada correctamente!!");
    }


 });
});