var pars = document.getElementsByTagName("p");
console.log(pars[0].innerHTML);
console.log(pars[0].nodeName);
pars[0].innerHTML ="Nowy tekst";

//wyselekcjonowujemy dany element po klasie
var hero = document.querySelector(".hero-unit");
// console.log(hero);
//tworzymy nowy element
var subheading = document.createElement("h3");
//tworzymy zawartość tekstową nowego elementu
var text = document.createTextNode("Autor: Strefa");
//hierachiczne łączenie
//dodajemy do subheading text
subheading.appendChild(text);
//dodajemy subheading do hero-unit
hero.appendChild(subheading);