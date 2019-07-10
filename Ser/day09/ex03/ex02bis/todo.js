var butt = $('#butt');
var ft_list = $('#ft_list');

function delete_me(divId, cookieName) {
    if (confirm("Delete?")) {
        document.cookie = cookieName + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
        divId.remove();
    }
}

butt.click(function () {
    var value = prompt("fill in a new TO DO");
    if (value)
        create_todo(value);
});

function create_todo(value) {
    var chill = $('#div');
    if (value) {
        chill.innerHTML = value;
    } else
        chill.innerHTML = prompt("Enter your TO-DO task");
    if (chill.innerHTML) {
        var cookieName = chill.innerHTML;
        document.cookie = cookieName + "=" + 1;
        ft_list.prepend($("<div>" + value + "</div>").click(function () {
            delete_me(this, cookieName);
        }));
    }
}

if (document.cookie) {
    var x = document.cookie.split(";");
    var patt = new RegExp("\\w+(?==)");
    x.forEach(function (value) {
        create_todo(value.match(patt).toString());
    });
}

