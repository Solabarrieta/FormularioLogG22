
function testEmail(){
    let regIkasle = new RegExp('[a-z][a-z]+[0-9]{3}[@]ikasle\.ehu\.(eus|es)');
    let regIrakasle = new RegExp('([a-z]+\.[a-z]+[@]ehu\.(eus|es)|[a-z]+[@]ehu\.(eus|es))');
    let input = document.getElementById("correo");
    let email = input.value;
    let enunciado = document.getElementById("enunciado").value;
    let resCorrecta = document.getElementById("correcta").value;
    let resIncorrecta = document.getElementById("incorrecta").value;
    let resIncorrecta = document.getElementById("incorrecta1").value;
    let resIncorrecta = document.getElementById("incorrecta2").value;
    let select = document.getElementById("complejidad").value;
    let image = document.getElementById("inputFile").value;
    

    
    if(regIkasle.test(email)||regIrakasle.test(email)){
        alert("Correcto")
    }else{
        alert("Incorrecto")
    }
}