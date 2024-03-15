$(function () {
  fetch("/api/fournisseur")
    .then((response) => response.json())
    .then((fournisseurs) => {
      fournisseurs.forEach((fournisseur) => {
        const fournisseurElement = `
            <div class="${fournisseur.nomfourn}" id="fournisseur">
                <h3>${fournisseur.nomfourn}</h3>
                <hr>
                <div class="liste-ingredients"></div>   
            </div>
        `;
        $(".fournisseurs").append(fournisseurElement);

        const ingredients = fournisseur.ingredients;

        ingredients.forEach((ingredient) => {
          const ingredientElement = `
                    <div class="ingredient">
                        <h4>${ingredient.nomingre}</h4>
                            <ul>
                                <li>Frais: ${
                                  ingredient.frais === "1" ? "Oui" : "Non"
                                }</li>
                                <li>Quantité: 
                                <button id="decrease-${
                                  ingredient.idingredient
                                }">-</button>
                                <span id="quantity">${
                                  ingredient.stockunite
                                }</span>
                                <button id="increase-${
                                  ingredient.idingredient
                                }">+</button>
                                </li>
                                <li>Stock minimum: ${ingredient.stockmin}</li>
                            </ul>
                    </div>
                `;
          $(`.${fournisseur.nomfourn} .liste-ingredients`).append(
            ingredientElement
          );

          $(`.${fournisseur.nomfourn}`).on(
            "click",
            "#increase-" + ingredient.idingredient,
            function () {
              const quantity = parseInt(
                $(`#increase-${ingredient.idingredient}`)
                  .siblings("#quantity")
                  .text()
              );

              const newQuantity = quantity + 1 <= 0 ? 0 : quantity + 1;

              $(`#increase-${ingredient.idingredient}`)
                .siblings("#quantity")
                .text(newQuantity);

              updateQuantity(ingredient.idingredient, newQuantity);
            }
          );

          $(`.${fournisseur.nomfourn}`).on(
            "click",
            "#decrease-" + ingredient.idingredient,
            function () {
              const quantity = parseInt(
                $(`#decrease-${ingredient.idingredient}`)
                  .siblings("#quantity")
                  .text()
              );

              const newQuantity = quantity - 1 <= 0 ? 0 : quantity - 1;

              $(`#decrease-${ingredient.idingredient}`)
                .siblings("#quantity")
                .text(newQuantity);

              updateQuantity(ingredient.idingredient, newQuantity);
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
