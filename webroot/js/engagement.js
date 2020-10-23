
var url = window.location.protocol + "//"+ window.location.host + "/" + location.pathname.split('/')[1] + "/engagements/add/";

function engaged(el)
{
    user_id = $(el).attr('user_id');
    event_id = $(el).attr('event_id');
    engagement = 1;

    // alert(user_id + ' ' + event_id + ' ' + engagement);

    $.post(
        url,
        (status, res) => {
            alert(status);
            alert(res);
        }
    )
}
