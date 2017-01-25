/*
$('a.plink').on('click', function(){
    console.log(this.id);
    var proyecto = this.id;
    window.location.href = "proyecto.php?pro=" + proyecto;
});
*/
$('body').on('click', '.plink',function(){
    console.log(this.id)
    var proyecto = this.id;
    window.location.href = "proyecto.php?pro=" + proyecto;
});
console.log("nada");