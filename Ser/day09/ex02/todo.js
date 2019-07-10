var butt = document.getElementById('butt');
var ft_list = document.getElementById('ft_list');

console.log(document.cookie);
function create_todo(value) {
        var chill = document.createElement('div');
        if (value) {
            chill.innerHTML = value;
        }
        else
            chill.innerHTML = prompt("Enter your TO-DO task");
        if (chill.innerHTML) {
            ft_list.insertBefore(chill, ft_list.childNodes[0]);
            var cookieName = chill.innerHTML;
            document.cookie = cookieName + "=" + 1;
            chill.onclick = function () {
                if (confirm("Delete?")) {
                    document.cookie = cookieName + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
                    ft_list.removeChild(chill);
                }
            };
        }
}

if (document.cookie) {
    var x = document.cookie.split(";");
    var patt = new RegExp("\\w+(?==)");

    console.log("begin.x: ", x);
    x.forEach(function (value) {
        if (value.match(patt))
            create_todo(value.match(patt).toString());
    });
}

butt.onclick = function () {
    create_todo();
};