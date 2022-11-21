function acf_cta_cards_fetch_terms_of_chosen_tax()
{
    // cancel if ACF isn't defined
    if (typeof acf == 'undefined') { return; }

    // hook onto AJAX request of select field
    acf.add_filter('select2_ajax_data', function( data, args, $input, field, instance ){

        if(args.field.data.name == 'cards_post_type_category'){
            // get the chosen post type
            let post_type_field = acf.getFields({ name: 'cards_post_type' });
            let chosen_post_type_key = post_type_field[0].data.key;
            let chosen_post_type = document.querySelectorAll('.values [data-key=' + chosen_post_type_key + '] select')[0].value;

            // include it with the AJAX request so it knows which terms to return
            data.chosen_post_type = chosen_post_type;
        }
        
        return data;
    });
}

function acf_cta_cards_fetch_chosen_term()
{
    // cancel if ACF isn't defined
    if (typeof acf == 'undefined') { return; }

    // hook onto preperation of specific field
    acf.addAction('prepare_field/name=cards_post_type_category', (field) => {

        // grab current post ID from GET parameter
        let urlParamsString = window.location.search;
        let urlParams = new URLSearchParams(urlParamsString);

        let post_id = urlParams.get('post');

        // only run if there is a post ID (so not when creating a new item)
        if(post_id)
        {
            // fetch current value using custom endpoint
            let block = 'cta-cards';
            let url = '/wp-json/rima/acf/get-flexible-field?post_id=' + post_id + '&block=' + block + '&field=' + field.data.name;
            
            fetch(url, {
                method: 'GET',
                credentials: 'same-origin',
                headers: {
                    'Cache-Control': 'no-cache',
                },
            })
            .then(response => response.json())
            .then(response => {
                // set current value to be the value of the ACF field
                let post_type_field = acf.getFields({ name: 'cards_post_type_category' });
                let chosen_post_type_key = post_type_field[0].data.key;
                let field = document.querySelectorAll('.values [data-key=' + chosen_post_type_key + '] .description')[0];

                field.innerText =  'Huidige selectie: ' + response.value;
            })
            .catch(err => console.log(err));
        }

    });
}

function set_default_color_palette()
{
    acf.add_filter('color_picker_args', function( args, $field ){
        args.palettes = ['#cf0000', '#fff4f4', '#f7f7f7', '#ffffff']
        return args;
    });
}

(()=> {
    // includes the selected post type in the AJAX request to return the right terms
    acf_cta_cards_fetch_terms_of_chosen_tax();
    // fetch current selected term from custom endpoint
    acf_cta_cards_fetch_chosen_term();
    // default color palette
    set_default_color_palette();
})();