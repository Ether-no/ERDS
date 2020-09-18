function agregar(){
    var nombre = document.getElementById('nombre').value;
    var edad = document.getElementById('edad').value;
    console.log(nombre);
    document.getElementById('qr').value = nombre + edad;
    var imgqr ='<img src="';
    var linkqr = "https://chart.apis.google.com/chart?cht=qr&chs=200x200&chl=" + nombre + edad;
    var imgqr = imgqr + linkqr + '" imageObject.crossOrigin="anonymous">';
    document.getElementById('qrimg').innerHTML = imgqr;

}