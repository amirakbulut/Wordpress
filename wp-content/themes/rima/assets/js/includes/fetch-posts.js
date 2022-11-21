const fetch_posts = (post_type = 'post', form_id, action, ppp = 12, paged = 1) => {
    const wp_backend = "/wp-admin/admin-ajax.php";
    let filter_data = new FormData(form_id);

    filter_data.append('post_type', post_type);
    filter_data.append('ppp', ppp);
    filter_data.append('paged', paged);

    fetch(wp_backend, {
        method: 'POST',
        credentials: 'same-origin',
        headers: {
            'Cache-Control': 'no-cache',
        },
        body: new URLSearchParams({
            action: action,
            filter_data
        })
    }).then(response => response.json())
    .then(response => console.log(response))
    .catch(err => console.log(err));
}

export default fetch_posts;