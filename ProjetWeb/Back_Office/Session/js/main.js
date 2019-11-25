function myFunction()
{
    passe=F.user_pass.value;
    passe1=F.re_pass.value;
    F.role.value="Client";
    var verif=1;
    if(F.user_name.value==""){
    verif=0;
    alert("Le Nom est obligatoire");}
    
    if(F.user_email.value=="")
    {
        verif=0;
    alert("Veuillez entrer votre email "); 
    }
    if(passe=="")
    {
        verif=0;
    alert("Veuillez saisir un mot de passe "); 
    }
    if(passe1=="")
    {
        verif=0;
    alert("Veuillez repeter le mot de passe "); 
    }
    
    if(passe!=passe1){
    alert("Vérifier que les deux mot de passe sont identiques");
    verif=0;
    }

    if(!(F.agree_term.checked)){
    alert("veuillez accepter les conditions d'utilisation");
    verif=0;}
    
    if(verif!=0)
    alert("Merci pour votre inscription");
}  
    
