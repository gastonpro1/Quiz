


let timer = 30
let timerId = setInterval(countdown, 1000);

function countdown() {
    if (timer == -1) {
        clearTimeout(timerId);
        document.querySelector('#timer').innerHTML = 'Votre temps est écoulé';
    } else {
        document.querySelector('#timer').innerHTML = timer;
        timer--;
    }
}


/* function changeColor(Question_id, reponseVouF, choix1, choix2, choix3) {

    console.log("Résultat: " + reponseVouF);
    console.log("choix1: " + choix1);
    console.log("choix2: " + choix2);
    console.log("choix3: " + choix3);
    console.log("id: " + id);

    allDiv = document.querySelectorAll('input');
    console.log(allDiv);

switch (id) {
        case 1:
            console.log('--------- id1 ----------')
            if (reponseVouF === choix1) {
                changeColorInput('1.1', 'green');
                changeColorInput('1.2', 'red');
                changeColorInput('1.3', 'red');
            } else if (reponseVouF === choix2) {
                changeColorInput('1.1', 'red');
                changeColorInput('1.2', 'green');
                changeColorInput('1.3', 'red');
            } else {
                changeColorInput('1.1', 'red');
                changeColorInput('1.2', 'red');
                changeColorInput('1.3', 'green');
            }

              case 2:
          
            if (reponseVouF=== choix1) {
                changeColorInput('1.1', 'green');
                changeColorInput('1.2', 'red');
                changeColorInput('1.3', 'red');
            } else if (reponseVouF === choix2) {
                changeColorInput('1.1', 'red');
                changeColorInput('1.2', 'green');
                changeColorInput('1.3', 'red');
            } else {
                changeColorInput('1.1', 'red');
                changeColorInput('1.2', 'red');
                changeColorInput('1.3', 'green');
            }

              case 3:
       
            if (reponseVouF === choix1) {
                changeColorInput('1.1', 'green');
                changeColorInput('1.2', 'red');
                changeColorInput('1.3', 'red');
            } else if (reponseVouF=== choix2) {
                changeColorInput('1.1', 'red');
                changeColorInput('1.2', 'green');
                changeColorInput('1.3', 'red');
            } else {
                changeColorInput('1.1', 'red');
                changeColorInput('1.2', 'red');
                changeColorInput('1.3', 'green');
            }

              case 4:
           
            if (reponseVouF === choix1) {
                changeColorInput('1.1', 'green');
                changeColorInput('1.2', 'red');
                changeColorInput('1.3', 'red');
            } else if (reponseVouF === choix2) {
                changeColorInput('1.1', 'red');
                changeColorInput('1.2', 'green');
                changeColorInput('1.3', 'red');
            } else {
                changeColorInput('1.1', 'red');
                changeColorInput('1.2', 'red');
                changeColorInput('1.3', 'green');
            }

              case 5:
       
            if (reponseVouF === choix1) {
                changeColorInput('1.1', 'green');
                changeColorInput('1.2', 'red');
                changeColorInput('1.3', 'red');
            } else if (reponseVouF === choix2) {
                changeColorInput('1.1', 'red');
                changeColorInput('1.2', 'green');
                changeColorInput('1.3', 'red');
            } else {
                changeColorInput('1.1', 'red');
                changeColorInput('1.2', 'red');
                changeColorInput('1.3', 'green');
            }

              case 6:
 
            if (reponseVouF === choix1) {
                changeColorInput('1.1', 'green');
                changeColorInput('1.2', 'red');
                changeColorInput('1.3', 'red');
            } else if (reponseVouF=== choix2) {
                changeColorInput('1.1', 'red');
                changeColorInput('1.2', 'green');
                changeColorInput('1.3', 'red');
            } else {
                changeColorInput('1.1', 'red');
                changeColorInput('1.2', 'red');
                changeColorInput('1.3', 'green');
            }

              case 7:
       
            if (reponseVouF === choix1) {
                changeColorInput('1.1', 'green');
                changeColorInput('1.2', 'red');
                changeColorInput('1.3', 'red');
            } else if (reponseVouF === choix2) {
                changeColorInput('1.1', 'red');
                changeColorInput('1.2', 'green');
                changeColorInput('1.3', 'red');
            } else {
                changeColorInput('1.1', 'red');
                changeColorInput('1.2', 'red');
                changeColorInput('1.3', 'green');
            }

              case 8:
     
            if (reponseVouF === choix1) {
                changeColorInput('1.1', 'green');
                changeColorInput('1.2', 'red');
                changeColorInput('1.3', 'red');
            } else if (reponseVouF === choix2) {
                changeColorInput('1.1', 'red');
                changeColorInput('1.2', 'green');
                changeColorInput('1.3', 'red');
            } else {
                changeColorInput('1.1', 'red');
                changeColorInput('1.2', 'red');
                changeColorInput('1.3', 'green');
            }

              case 9:
      
            if (reponseVouF === choix1) {
                changeColorInput('1.1', 'green');
                changeColorInput('1.2', 'red');
                changeColorInput('1.3', 'red');
            } else if (reponseVouF === choix2) {
                changeColorInput('1.1', 'red');
                changeColorInput('1.2', 'green');
                changeColorInput('1.3', 'red');
            } else {
                changeColorInput('1.1', 'red');
                changeColorInput('1.2', 'red');
                changeColorInput('1.3', 'green');
            }

              case 10:
          
            if (reponseVouF === choix1) {
                changeColorInput('1.1', 'green');
                changeColorInput('1.2', 'red');
                changeColorInput('1.3', 'red');
            } else if (reponseVouF === choix2) {
                changeColorInput('1.1', 'red');
                changeColorInput('1.2', 'green');
                changeColorInput('1.3', 'red');
            } else {
                changeColorInput('1.1', 'red');
                changeColorInput('1.2', 'red');
                changeColorInput('1.3', 'green');
            }

            

           break;
            
            function changeColorInput(id, color) {
    document.querySelector("input[id='" + id + "']").style.backgroundColor = color;
}
            
            */