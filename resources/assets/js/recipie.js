var ingredientsList = EXPORT_RecipieIngredientsList;

var Recipie = function () {

    var el = '#recipie-container';

    var ingredients = [];

    function getTitle (id) {
        for (var i = 0 ; i < ingredientsList.length; i++) {
            if (ingredientsList[i].id == id) {
                return ingredientsList[i];
            }
        }
        return null;
    }
    
    function getIndex (id) {
        for (var i = 0 ; i < ingredientsList.length; i++) {
            if (ingredientsList[i].id == id) {
                return i;
            }
        }
        return null;
    }

    function addIngredient() {
        var ingredient = {
            id: $(el).find('#ing-select').val(),
            quantity: $(el).find('#ing-qty').val(),
        };

        ingredients.push(ingredient);
        redrawRecipie()
    }

    function removeIngredient(id) {
        ingredients.splice(id, 1);
        redrawRecipie()
    }

    function updateIngredient() {
        this.ingredients.push(ingredient)
    }

    function redrawRecipie() {
        var html = '';

        var addBtn = '<a class="btn btn-primary-inverse" href="#" onClick="R.addIngredient()"> Add </a>';
        var selectIngredients = '<select id="ing-select" class="form-control">'
        
        for (var i = 0 ; i < ingredientsList.length; i++) {
            selectIngredients += '<option value="'+ ingredientsList[i].id +'">'+ ingredientsList[i].title +'</option>';    
        }

        selectIngredients += '</select>';
        html += '<tr>' +
                '<td>' + selectIngredients + '</td>' +
                '<td>' + '<input type="text" id="ing-qty" name="quantity" class="form-control" >' + '</td>' +
                '<td>' + addBtn + '</td>' +
                '</tr>';


        for (var i = 0; i < ingredients.length; i++) {
        
            var removeBtn = '<a class="btn btn-primary-inverse" href="#" onClick="R.removeIngredient(' + i + ')"> Remove </a>';
        

            html += '<tr>' +
                    '<td>' + '<input type="hidden" name="ingredientId[]" value="' + ingredients[i].id + '" />' +
                             getTitle(ingredients[i].id).title + '</td>' +
                    '<td>' + '<input type="hidden" name="ingredientQty[]" value="' + ingredients[i].quantity + '" >' +
                             ingredients[i].quantity + ' ' + getTitle(ingredients[i].id).unit.short_code + '</td>' +
                    '<td>' + removeBtn + '</td>' +
                    '</tr>';

        }

        $(el).find('tbody').html(html);
    }

    return {
        'redraw': redrawRecipie,
        'removeIngredient': removeIngredient,
        'addIngredient' : addIngredient
    }

};



R = Recipie();
R.redraw();