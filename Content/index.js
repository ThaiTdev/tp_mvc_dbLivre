//cette fonction sert à validez la suppression d'une ligne de la table .
//ma fonction prend deux paramètres
//le controller et id_fournisseur ou id_commande ou id_livre
function validateDelete(controller, id) {
  //je créer un div que je stock dans ma variable bgWindow.
  const bgWindow = document.createElement("div");
  //j'ajoute un id="bgWindow" à ma div.
  bgWindow.setAttribute("id", "bgWindow");
  //j'ajoute un onclick="hidePopup()"  à ma div.
  bgWindow.setAttribute("onclick", "hidePopup()");
  //dans ma nameArray je stock l'élement qui a pour class="element" qui est concaténé avec id_fournisseur ou autres d'ou element${id}.

  const nameArray = document.getElementsByClassName(`element${id}`);

  let displayedName = nameArray[0].innerText;
  for (let i = 1; i < nameArray.length; i++) {
    displayedName += " - " + nameArray[i].innerText;
  }
  //je créer une variable popup
  const popup = document.createElement("div");
  //je lui inject une classe popup
  popup.classList.add("popup");
  //je lui inject un id="popup"
  popup.setAttribute("id", "popup");
  //et je lui inject du text
  popup.innerHTML = `
    <p class="popup__question">Voulez-vous supprimer ${displayedName} ?</p>
    <div class="popup__buttons">
        <button onclick="hidePopup()">Annuler</button>
        <button onclick="redirectDelete('${controller}', ${id})">Valider</button>
    </div>`;
  bgWindow.appendChild(popup);
  //ma div  stocké dans ma variable bgWindow prend pour enfant la div qui est stocké dans la vaiable popup
  document.body.appendChild(bgWindow);
  //le body a pour enfant la variable bgWindow
}
//je créer une fonction qui prend 2 paramètres le controller et id_fournisseur ou id_commande ou id_livre
function redirectDelete(controller, id) {
  //et qui renvoi à la page http demandée
  window.location.href = `http://localhost/admin/?controller=${controller}&action=supprimer_${controller}&id=${id}`;
}

function hidePopup() {
  // je stock dans une variable nommée bgWindow la div bgWindow
  const bgWindow = document.getElementById("bgWindow");
  //maintenant  je dit que j'enlève la div bgWindow du body
  document.body.removeChild(bgWindow);
}

///////////////////////////////////////////////////////////////////////////////FONCTION AFFICHE CODE///////////////////////////////////////////
const affiche = document.querySelectorAll(".unmask");
affiche.forEach((item) => {
  console.log(item);
  $(item).on("click", function () {
    item.classList.add("active");
    if ($(this).prev("input").attr("type") == "password")
      changeType($(this).prev("input"), "text");
    setTimeout(() => {
      changeType($(this).prev("input"), "password");
      // changeType($(this).prev("input"), "password-confirm");
      item.classList.remove("active");
    }, 1000);
  });
  // else changeType($(this).prev("input"), "password");
});
//
// x = élément du DOM, type = nouveau type à attribuer
function changeType(x, type) {
  if (x.prop("type") == type) return x; // ça serait facile.
  try {
    // Une sécurité d'IE empêche ceci
    return x.prop("type", type);
  } catch (e) {
    // On tente de recréer l'élément
    // En créant d'abord une div
    var html = $("<div>").append(x.clone()).html();
    var regex = /type=(\")?([^\"\s]+)(\")?/;
    // la regex trouve type=text ou type="text"
    // si on ne trouve rien, on ajoute le type à la fin, sinon on le remplace
    var tmp = $(
      html.match(regex) == null
        ? html.replace(">", ' type="' + type + '">')
        : html.replace(regex, 'type="' + type + '"')
    );

    // on rajoute les vieilles données de l'élément
    tmp.data("type", x.data("type"));
    var events = x.data("events");
    var cb = (function (events) {
      return function () {
        //Bind all prior events
        for (i in events) {
          var y = events[i];
          for (j in y) tmp.bind(i, y[j].handler);
        }
      };
    })(events);
    x.replaceWith(tmp);
    setTimeout(cb, 10); // On attend un peu avant d'appeler la fonction
    return tmp;
  }
}
