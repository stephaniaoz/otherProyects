/*function greeter(person: string){
	return "Hello, "+person;
}

//var user = "Jane User";

var user = [0, 1, 2];

document.body.innerHTML = greeter(user);
*/

function holaMundo(nombre){
	return "Hola mundo!! soy "+nombre;
}

var nombre = "Victor Robles";
var resultado = holaMundo(nombre);

//document.getElementById("container").innerHTML = holaMundo(nombre);
var etiqueta = <HTMLElement>document.getElementById("container");
etiqueta.innerHTML = resultado;

//alert("Hola mundo Alert");

//variables y tipos:

//var nombre:any;  -->cualquier tipo
var nombre:string = "victor Robles";
var edad:number = 55;
var programador:boolean = true;
var langs: Array<string> = ["PHP", "JavaScript", "CSS"];

etiqueta.innerHTML = nombre+" - "+edad;

//Local: let, global: var

//funciones y tipado:

function devuelveNumero(num:number):string{//devuelve un string
	return "Número: "+num;
}

function devuelveString(texto:string):number{//devuelve un string
	if(texto == "hola"){
		var num = 66;
	}else{
		var num = 90;
	}

	return num;
}

alert(devuelveNumero(34));
alert(devuelveString("hola"));