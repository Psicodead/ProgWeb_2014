var nombres=[];
var lats=[];
var longs=[];
var indice=0;
var map;
var mapSetting;

$(document).ready(inicializar());
function inicializar(){
	/**Google maps**/
	//defino las configuraciones del mapa, la posicion sobre el mapa y zoom que permita ver bien los marcadores
	posicion = new google.maps.LatLng(3.451535, -76.5372188);
	mapContainer = document.getElementById('miMapa')
	mapSetting = {
		center:posicion,zoom:16,
		mapTypeId:google.maps.MapTypeId.ROADMAP,
		mapTypeControl:false,
		navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
	}

	//creo el mapa y lo inicializo con los valores definidos en el bloque anterior
	map = new google.maps.Map(document.getElementById("miMapa"), mapSetting);


	/**DRAG AND DROP**/
	var iconos=document.querySelectorAll('#iconos > figure> img');
	for(var i=0; i<iconos.length;i++){
		iconos[i].addEventListener('dragstart',arrastrando,false);
		iconos[i].addEventListener('dragend',arrastrado,false)
	}
	areaSens=document.getElementById('lienzo');
	lienzo=areaSens.getContext('2d');

	areaSens.addEventListener('dragenter',entrar,false);
	areaSens.addEventListener('dragleave',salir,false);
	areaSens.addEventListener('dragover',function(e){
		e.preventDefault();},false);

	areaSens.addEventListener('drop', soltar, false);
}

/*** DRAG AND DROP**/
function entrar(e){
	e.preventDefault();
	conteArea=document.getElementById("areaSensible")
	conteArea.style.background='rgba(0,0,0,0.4)';
	var texto=document.getElementById('texto');
	texto.style.visibility='hidden';
}

function salir(e){
	e.preventDefault();
	areaSens.style.background='#FFFFFF';
}

function arrastrado(e){
	elemento=e.target;
	
}

function arrastrando(e){
	elemento=e.target;
	e.dataTransfer.setData('Text',elemento.getAttribute('id'));
	e.dataTransfer.setDragImage(e.target,62,62);
}

function soltar(e){
	e.preventDefault();
	/*map = new google.maps.Map(document.getElementById("miMapa"), mapSetting);
	descomentar esta linea de codigo para que al arrastrar un nuevo elemento solo
	se vean los marcadores de dicho elemento.
	*/
	var id=e.dataTransfer.getData('Text');
	var elemento=document.getElementById(id);
	console.log(id);
	var posX=(indice*50);
	var posY=areaSens.offsetTop;
	conteArea.style.background='rgba(0,0,0,0.1';
	lienzo.drawImage(elemento,posX,posY,50,50);
	indice++;
	
	//Envio por post el id del elemento que estoy arrastrando
	$.ajax({
		type: "POST",
		url: "optenerInfo.php",
		data: { tipoElemento: id }
	}).done(function(){
		console.log("Solicitud enviada al API");
		}).success(function(result){
			console.log("Resultado: "+result);
			var laInfo=JSON.parse(result);
			for(i=0;i<laInfo.sitio.length;i++){
				nombres[i]=laInfo.sitio[i].nom;
				lats[i]=laInfo.sitio[i].lat;
				longs[i]=laInfo.sitio[i].lon;
			}
			crearMarcador();
		}).error(function(error){
			console.log("Error: "+ error);
		})
	}

//Google maps//
function crearMarcador(r){
	//aqui agrego un nuevo marcador
       for(i = 0;i<nombres.length;i++){
       	var marcador=new google.maps.Marker({
       		position: new google.maps.LatLng(lats[i],longs[i]),
       		map:map,
       		title: nombres[i]
       	});
       }

     
}