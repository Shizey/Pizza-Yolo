$(function () {
  fetch("/api/fournisseur")
    .then((response) => response.json())
    .then((fournisseurs) => {
      fournisseurs.forEach((fournisseur) => {
        const fournisseurElement = `
            <div class="${fournisseur.nomFournisseur}" id="fournisseur">
                <h3>${fournisseur.nomFournisseur}</h3>
                <hr>
                <div class="liste-ingredients"></div>   
            </div>
        `;
        $(".fournisseurs").append(fournisseurElement);

        const ingredients = fournisseur.ingredients;

        ingredients.forEach((ingredient) => {
          const ingredientElement = `
                    <div class="ingredient">
                        <h4>${ingredient.nomIngredient}</h4>
                            <ul>
                                <li>Frais: ${
                                  ingredient.isFrais === "1" ? "Oui" : "Non"
                                }</li>
                                <li>Quantité: 
                                <button id="decrease-${
                                  ingredient.idIngredient
                                }">-</button>
                                <span id="quantity">${
                                  ingredient.stockUnite
                                }</span>
                                <button id="increase-${
                                  ingredient.idIngredient
                                }">+</button>
                                </li>
                                <li>Stock minimum: ${ingredient.stockMin}</li>
                            </ul>
                    </div>
                `;
          $(`.${fournisseur.nomFournisseur} .liste-ingredients`).append(
            ingredientElement
          );

          $(`.${fournisseur.nomFournisseur}`).on(
            "click",
            "#increase-" + ingredient.idIngredient,
            function () {
              const quantity = parseInt(
                $(`#increase-${ingredient.idIngredient}`)
                  .siblings("#quantity")
                  .text()
              );

              const newQuantity = quantity + 1 <= 0 ? 0 : quantity + 1;

              $(`#increase-${ingredient.idIngredient}`)
                .siblings("#quantity")
                .text(newQuantity);

              updateQuantity(ingredient.idIngredient, newQuantity);
            }
          );

          $(`.${fournisseur.nomFournisseur}`).on(
            "click",
            "#decrease-" + ingredient.idIngredient,
            function () {
              const quantity = parseInt(
                $(`#decrease-${ingredient.idIngredient}`)
                  .siblings("#quantity")
                  .text()
              );

              const newQuantity = quantity - 1 <= 0 ? 0 : quantity - 1;

              $(`#decrease-${ingredient.idIngredient}`)
                .siblings("#quantity")
                .text(newQuantity);

              updateQuantity(ingredient.idIngredient, newQuantity);
            }
          );
        });
      });
    });

  function updateQuantity(idIngredient, quantity) {
    fetch(`/api/fournisseur/setIngredients/`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        type: "add",
        newQuantity: quantity,
        idIngredient: idIngredient,
      }),
    });
  }
});
