var Coche = /** @class */ (function () {
    function Coche(modelo) {
        if (modelo === void 0) { modelo = null; }
        this.color = "Blanco";
        this.velocidad = 0;
        if (modelo == null) {
            this.modelo = "BMW Generico";
        }
        else {
            this.modelo = modelo;
        }
    }
    Coche.prototype.getColor = function () {
        return this.color;
    };
    Coche.prototype.setColor = function (color) {
        this.color = color;
    };
    Coche.prototype.acelerar = function () {
        this.velocidad++;
    };
    Coche.prototype.frenar = function () {
        this.velocidad--;
    };
    Coche.prototype.getVelocidad = function () {
        return this.velocidad;
    };
    Coche.prototype.getModelo = function () {
        return this.modelo;
    };
    Coche.prototype.setModelo = function (modelo) {
        this.modelo = modelo;
    };
    return Coche;
}());
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
