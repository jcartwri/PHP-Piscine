var butt = document.getElementById('sub');
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
    	{
        	console.log(value.match(patt).toString());
        	create_todo(value.match(patt).toString());
    	}
    });
}

butt.onclick = function ()
{
    create_todo();
};







// var newBtn = document.getElementById("sub");
// var listContainer = document.getElementById("ft_list");
// var i = 0;
// var	mas = [];

// console.log(document.cookie);
// //document.cookie = "serezha=molodec";

// function add_elem()
// {
// 	var new_element = document.createElement('div');
// 	new_element.setAttribute('onclick', 'dellet_elem(this)');
// 	var to_do = prompt("input text");
// 	new_element.innerHTML = to_do;
// 	listContainer.insertBefore(new_element, listContainer.childNodes[0]);
// 	document.cookie = "hush" + new_element.innerHTML + "=" + i;
// 	mas[i] = new_element.innerHTML;
// 	i++;
// }

// function dellet_elem(obj)
// {
// 	if (confirm("Do you want to remove that TO DO?"))
// 	{
// 		obj.remove();
// 		document.cookie = "hush" + obj.innerHTML + "=;expires=-1";  //Thu, 01 Jan 1970 00:00:00 GMT";
// 		for(i in mas){
// 			if (mas[i] == obj.innerHTML)
// 				mas.splice(i, 1);
// 		}
// 	}
// }

// newBtn.onclick = function () {
// 	add_elem();
// }

// if (document.cookie)
// {
// 	var x = document.cookie.split(';');
// 	regex = "hush[^=]*";
// 	for (j in x)
// 	{
// 		if (/hush[^=]*/.test(x[j]))
// 		{
// 			var re = "[^(hush)]*"
// 			var str = x[j].match(regex);
// 			var s = str.match("[^(hush)]*");
// 			console.log(s);
// 			var new_element = document.createElement('div');
// 			new_element.setAttribute('onclick', 'dellet_elem(this)');
// 			new_element.innerHTML = s;
// 			listContainer.insertBefore(new_element, listContainer.childNodes[0]);
// 		}
// 	}
// }