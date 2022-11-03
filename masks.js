
function onlynumber(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  //var regex = /^[0-9.,]+$/;
  var regex = /^[0-9.]+$/;
  if( !regex.test(key) ) {
     theEvent.returnValue = false;
     if(theEvent.preventDefault) theEvent.preventDefault();
  }
}

function mask(o,f){
  v_obj=o
  v_fun=f
  setTimeout("execmask()",1)
}

function execmask(){
  v_obj.value=v_fun(v_obj.value)
}

function masktel(v){
  v=v.replace(/\D/g,"");
  v=v.replace(/^(\d{2})(\d)/g,"($1) $2");
  v=v.replace(/(\d{5})(\d)/g,"$1-$2");
  return v;
}

function maskcpf(v){ 
  v=v.replace(/\D/g,"");
  v=v.replace(/(\d{3})(\d)/,"$1.$2");
  v=v.replace(/(\d{3})(\d)/,"$1.$2");
  v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2");
  return v;
}

function maskcep(v){ 
  v=v.replace(/\D/g,"");
  v=v.replace(/(\d{5})(\d)/,"$1-$2");
  return v;
}

function idcss( el ){
  return document.getElementById( el );
}

window.onload = function(){

  //CELULAR -------
  idcss('telefone').setAttribute('maxlength', 15);
  idcss('telefone').onkeypress = function(){
    onlynumber();
    mask( this, masktel );
  }
  //-------------

  //CPF ---------
  idcss('cpf').setAttribute('maxlength', 14);
  idcss('cpf').onkeypress = function(){
    onlynumber();
    mask( this, maskcpf );
  }
  //-------------

  //CEP ---------
  idcss('cep').setAttribute('maxlength', 9);
  idcss('cep').onkeypress = function(){
    onlynumber();
    mask( this, maskcep );
  }
  //-------------  
  
}