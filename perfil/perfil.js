
function displayData(item) {
  switch(item){
    case "cadastro":
        return document.getElementById(item).classList.toggle('show')
        break;
    case "pagamento":
        return document.getElementById(item).classList.toggle('show')
        break;
    case "historico":
        return document.getElementById(item).classList.toggle('show')
        break;
    case "pedidosEmAndamento":
        return document.getElementById(item).classList.toggle('show')
        break;
    case "pedidosRecorrentes":
        return document.getElementById(item).classList.toggle('show')
        break;     
  }
}

function closeSection(item) {
    switch(item){
        case "cadastro":
            return document.getElementById(item).classList.remove('show')
            break;
        case "pagamento":
            return document.getElementById(item).classList.remove('show')
            break;
        case "historico":
            return document.getElementById(item).classList.remove('show')
            break;
        case "pedidosEmAndamento":
            return document.getElementById(item).classList.remove('show')
            break;
        case "pedidosRecorrentes":
            return document.getElementById(item).classList.remove('show')
            break;     
      }
}