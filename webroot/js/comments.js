
var url = window.location.protocol + "//"+ window.location.host + "/" + location.pathname.split('/')[1] + "/comments/add/";

function afficher(el)
{
    user_id = $(el).attr('user_id');
    event_id = $(el).attr('event_id');
}

$('.btn_comment').on('click', () => {

    $.post(
        url,
        {
            comment: "commenrt",
            user_id: user_id,
            event_id: event_id
        }, function (data, status) {
            alert(status)
            if (status === SUCCESS) {
                var obj = jQuery.parseJSON(data);

                if (obj.error) {
                    alert('Erreur. Contacter le webmaster');
                }

                if (obj.act === 'saved') {
                    perm.html(YES);
                } else if (obj.act === 'deleted') {
                    perm.html(NO);
                }
            } else {
                alert('Une erreur s\'est produite');
            }
        }
    );
})
