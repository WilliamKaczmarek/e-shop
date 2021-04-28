function masquer(){
    for(i = 0 ; i <document.getElementsByClassName("stock").length ; i++){
        document.getElementsByClassName("stock")[i].style.display = document.getElementsByClassName("stock")[i].style.display == 'block' ? "none" : "block";
    }

}

function ajouter_stock(el){
    let nombre = parseInt(el.previousElementSibling.value);
    let max_nombre = parseInt(el.parentElement.parentElement.parentElement.querySelector(".stock").textContent.substring(8));

    if(nombre<max_nombre){
        el.previousElementSibling.value = nombre + 1;
        if(nombre==1){
            el.parentElement.firstElementChild.style.pointerEvents = "auto";
        }
    }
    if(nombre==max_nombre){
        console.log("maximum");
        el.style.pointerEvents = "none";
    }
}

function supp_stock(el){
    let nombre = parseInt(el.nextElementSibling.value);
    let max_nombre = parseInt(el.parentElement.parentElement.parentElement.querySelector(".stock").textContent.substring(8));
    if(nombre>0){
        el.nextElementSibling.value = nombre - 1;
        if(nombre == max_nombre-1){
            el.parentElement.lastElementChild.style.pointerEvents = "auto";
        }
    }
    if(nombre==0){
        console.log("minimum");
        el.style.pointerEvents = "none";
    }
}

function update_stock(el) {
    
	ref = el.parentElement.querySelector(".product-ref").innerHTML.slice(5,7); //on recup la ref L./k./A. de produits.php
	qty = el.parentElement.querySelector(".moins").nextElementSibling.value; 
    if (qty == 0) {return false}
    var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
      		console.log(this.responseText);
      		location.reload();
    	}
  	};
	xhttp.open("POST", "http://localhost/arrangeTP3/php/update_stock.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("ref="+ ref + "&qty=" + qty);
}

