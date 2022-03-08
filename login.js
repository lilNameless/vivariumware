function validateForm(){
  var nome=document.getElementsByName("nome")[0].value;
  var pass=document.getElementsByName('passwd')[0].value;
  var elencoErrori=document.getElementsByName('elencoErrori')[0];
  elencoErrori.innerHTML="";
  var errori=[];
  var regExpPass = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/

  if (nome==null || nome=="") {
    errori.push("Il nome utente è obbligatorio;<br>");
  }

  if (pass==null || pass=="") {
    errori.push("la password è obbligatoria;<br>");
  } else if(!regExpPass.test(pass)) {
    errori.push("La password non è corretta;");
  }

  if (errori.length>0) {
    for(var x=0;x<errori.length;x++) {
      elencoErrori.innerHTML+=errori[x];
    }
    return false;
  } else {
    alert("ok");
    document.forms[0].submit();
  }
}
