function fetchCategory(selected) {
    fetch(BASE_URL + '/categories/' + selected.value)
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
            hide(document.getElementById('error_message'));

            // remove next elements if parent has changed
            getNextElements(selected).forEach(el => el.remove());

            // only create categories if available
            if (data.length > 0) {
                let selectEl = document.createElement("select");
                selectEl.onchange = function () {
                    fetchCategory(this);
                };
                //Create and append the options
                data.forEach(category => {
                    let option = document.createElement("option");
                    option.value = category.id;
                    option.text = category.name;
                    selectEl.appendChild(option);
                });


                selected.after(selectEl);

            }
        }).catch(function () {
        show(document.getElementById('error_message'));
    });

}
