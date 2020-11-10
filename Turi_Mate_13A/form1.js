window.addEventListener('load',init)

function init(){
    document.getElementById("elkuld").addEventListener("click",ellenorzes);
}

function ellenorzes(e){
    let hibak=[];
    //email:
    if(document.getElementById("email").value=="")
    hibak.push("Írja be az email címet");
    //select lista ellenorzése:
    let valtozo=document.getElementById("sel").selectedIndex;
    console.log(valtozo);
    if(parseInt(valtozo)==0 )
    hibak.push("Válassz ki egy nyelvet");
    //checkbox:
    if( !document.querySelector('input[name="mikor[]"]:checked') )
        hibak.push("Válassz ki egy napszakot");
    //radio:
    if(  !document.querySelector('input[name=kategoria]:checked') )
        hibak.push("Válassz ki egy kategóriát");

    if(hibak.length>0){
        e.preventDefault();
        document.getElementById("hibalista").innerHTML=hibak.reduce((s,e)=>s+`<li>${e}</li>` , "");
    }

}