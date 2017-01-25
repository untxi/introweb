$('a.plink').on('click', function(){
    console.log(this.id);
    var proyecto = this.id;
    console.log("aiuda");
    window.location.href = "proyecto.php?pro=" + proyecto;
});