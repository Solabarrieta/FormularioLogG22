
function testEmail(){
    let regIkasle = new RegExp('[a-z][a-z]+[0-9]{3}[@]ikasle\.ehu\.(eus|es)');
    let regIrakasle = new RegExp('([a-z]+\.[a-z]+[@]ehu\.(eus|es)|[a-z]+[@]ehu\.(eus|es))');
    let input = document.getElementById("correo");
    let email = input.value;
    
    if(regIkasle.test(email)||regIrakasle.test(email)){
        alert("Tu correo es correcto!!")
    }else{
        alert("El correo que has introducido no es correcto!!!")
    }
}