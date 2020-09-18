function agregar(){
    var nombre = document.getElementById('nombre').value;
    var edad = document.getElementById('edad').value;
    console.log(nombre);
    
    var imgqr ='<img src="';
    var consulta = "http://127.0.0.1:8000/consulta/";
    var linkqr = "https://chart.apis.google.com/chart?cht=qr&chs=200x200&chl="+ consulta + nombre + edad;
    var imgqr = imgqr + linkqr + '" imageObject.crossOrigin="anonymous">';
    document.getElementById('qrimg').innerHTML = imgqr;
    document.getElementById('qr').value = consulta + nombre + edad;
}