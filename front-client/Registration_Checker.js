
function Registration_Checker()
{   
        var verif=0;
   
    var cin=window.document.getElementById('cin').value; 
     var first_name=window.document.getElementById('first_name').value;
  var email=window.document.getElementById('email').value;
    var last_name=window.document.getElementById('last_name').value;
      
    var phone=window.document.getElementById('phone').value;  
    var password =window.document.getElementById("password").value;
    var password1 =window.document.getElementById("password1").value;
    var dt=new Date();
    dt.getDate();
     
     if ( /^\s*$/.test(cin) || /^\s*$/.test(first_name) || /^\s*$/.test(last_name) || /^\s*$/.test(email)||  /^\s*$/.test(phone)|| /^\s*$/.test(password)|| /^\s*$/.test(password1) )
    {alert("Veuillez Remplir tous les champs");verif=1; } 
    if (cin.length!=8)
    {alert("Le Cin doit comprendre 8 chiffres");verif=1;}
    if (phone.length!=8)
    {alert("le Num de telephone doit comprendre 8 chiffres");verif=1;}
    if (password1!=password)
    {alert("password incorrect");verif=1;}
    




      
if (verif)
{return false;}
else{return true;}




}