class Coche{

	public color: string;
	public modelo: string;
	public velocidad: number;

	constructor(modelo:any = null){
		this.color = "Blanco";
		this.velocidad = 0;

		if(modelo == null){
			this.modelo = "BMW Generico";
		}else{
			this.modelo = modelo;
		}
		
	}

	public getColor(){
		return this.color;
	}

	public setColor(color: string){
		this.color = color;
	}

	public acelerar(){
		this.velocidad++;
	}

	public frenar(){
		this.velocidad--;
	}

	public getVelocidad():number{
		return this.velocidad;
	}

	public getModelo(){
		return this.modelo;
	}

	public setModelo(modelo){
		this.modelo = modelo;
	}

}

var coche = new Coche("Renault Clio");

coche.setColor("ROJO");

coche.acelerar();
coche.acelerar();
coche.acelerar();

console.log("modelo del coche 1 es: " + coche.getModelo());
console.log("color del coche 1 es: " + coche.getColor());
console.log("velocidad del coche 1 es: " + coche.getVelocidad());

coche.frenar();
console.log("velocidad del coche 1 despues de frenar es: " + coche.getVelocidad());


//interfaces:
/*
interface CocheBase{
	getModelo():string;
	getVelocidad():number;
}

class Coche implements CocheBase{

	public getModelo(){
		return this.modelo;
	}

	public getVelocidad():number{
		return this.velocidad;
	}

}
*/

/*
var coche_dos = new Coche();
var coche_tres = new Coche();

coche_dos.setColor("AZUL");
coche_tres.setColor("VERDE");

console.log("color del coche 2 es: " + coche_dos.getColor());
console.log("color del coche 3 es: " + coche_tres.getColor());
*/
