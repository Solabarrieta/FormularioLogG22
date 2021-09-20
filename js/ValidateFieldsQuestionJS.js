let reg = new RegExp('{a-z}{a-z}*{0-9}{0-9}{0-9}@ikasle{.}{eus,es}');
let 

function testEmail(email){
    let ikasle = email.match(reg);
    let profe = email.match(reg);
    let estaBien = ikasle&&profe;
    if(!estaBien){
        alert("El correo que has introducido no es correcto!!!")
    }else{

    }
}