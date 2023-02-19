
$('.cc-date').datepicker({
    format: "yyyy/mm/dd",
    language: "es",
    startDate: new Date(),
    daysOfWeekDisabled: "0"
  });

var btn = document.getElementById('btn1');
var seccion = document.getElementById('seccion');
var input = document.getElementById('search');

btn.onclick=function(){

    var info = input.value;
    console.log(info);
    //enviar informacion
    const XHR = new XMLHttpRequest();
    XHR.open('POST', '../php/horarios_disponibles.php', true);
    XHR.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    XHR.send('datos= '+ info);
    //recibir informacion
    XHR.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var datos = this.responseText;
            seccion.innerHTML = datos;
        }
    }
}