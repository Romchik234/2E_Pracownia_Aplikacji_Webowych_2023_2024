function calculate(){
    var iloscPaliwa = document.querySelector(".iloscLitrow").value;
    
    var rodzaj = document.getElementById("typPaliwa").value;
    var wynik = 0;
    switch (rodzaj) {
        case rodzaj = "pb95":
            wynik = iloscPaliwa * 6.70;
            break;
        case rodzaj ="pb98":
            wynik = iloscPaliwa* 7.04;
            break;
        case rodzaj = "on":
            wynik = iloscPaliwa * 6.58;
            break;
        case rodzaj= "lpg":
            wynik = iloscPaliwa * 3.04; 
            break;
    }
    console.log(iloscPaliwa);
    console.log(rodzaj);
   
    document.getElementById("wynik").innerText = "Zapłacisz: ";
    document.getElementById("wynik").innerText +=  wynik;
    
}