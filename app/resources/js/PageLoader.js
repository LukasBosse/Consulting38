function loadContent(pageURL) {
    $.get(pageURL + ".html", function(html_string)
    {
        document.getElementById("varContent").innerHTML = html_string;
    });
}