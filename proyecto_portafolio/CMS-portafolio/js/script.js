document.getElementById("addPeriodo").addEventListener("change", newPeriod);
function newPeriod(){
    var valSelect = document.getElementById("addPeriodo").value;
    if(valSelect == "n"){
       window.open("periodo.php","",'top=300,left=500,width=500,height=350');
    }
}

document.getElementById("addCurso").addEventListener("change", newCourse);
function newCourse(){
    var valSelect = document.getElementById("addCurso").value;
    if(valSelect == "n"){
        window.open("curso.php","",'top=300,left=500,width=500,height=350');
    }
}


document.getElementById("cancelElement").addEventListener("click",cancel);
function cancel(){
    window.close();
}


document.getElementById("newProject").addEventListener("click",addProject);
function addProject(){
     window.open("proyecto.php","",'top=200,left=500,width=500,height=500');
}

document.getElementById("btn-actualizarPeriodo").addEventListener("click",actualizarPeriodo);
function actualizarPeriodo(){
    document.getElementById("periodoActual").className="visible";
}

document.getElementById("guardarPeriodo").addEventListener("click",savePeriod);
function savePeriod(){
    document.getElementById("periodoActual").className="oculta";
}
document.getElementById("cancelPeriodo").addEventListener("click",cancelPeriod);
function cancelPeriod(){
    document.getElementById("periodoActual").className="oculta";
}
document.getElementById("curso").addEventListener("change", selCourse);
function selCourse(){
    var valSelect = document.getElementById("curso").value;
    if(valSelect == "n"){
        document.getElementById("addCourse").className="visible";
    }else{
        document.getElementById("addCourse").className="oculta";
    }
}

document.getElementById("idAddTech").addEventListener("click",addTech);
function addTech(){
    document.getElementById("newTech").className="visible";
}

document.getElementById("grupo").addEventListener("change", grupo);
function grupo(){
    var valSelect = document.getElementById("grupo").value;
    if(valSelect == "i"){
        document.getElementById("divInte").className="oculta";
    } else{
        document.getElementById("divInte").className="visible";
    }
}