<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="css/lightbox.css" rel="stylesheet">
    <script src="js/lightbox.min.js"></script>
       <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

	<title></title>
</head>
<body>
	<script>
        $(function () {
            $("#dialog").dialog({
                autoOpen: false,
                show: {
                    effect: "blind",
                    duration: 1000
                },
                hide: {
                    effect: "explode",
                    duration: 1000
                }
            });

            $("#btnAddButton").click(function () {
                $("#divcontainer").html("<button class='A' id='mybtn'>Edit</button>");
                //$("#divcontainer").append("<button class='A' id='mybtn'>Edit</button>"); // Also you could use append metdod
                $("#dialog").dialog({
                    autoOpen: false,
                    show: {
                        effect: "blind",
                        duration: 1000
                    },
                    hide: {
                        effect: "explode",
                        duration: 1000
                    }
                });
                $("#mybtn").click(function () {
                    alert("Hello"); //Check whether this event working
                    $("#dialog").dialog("open");
             
                    return false;
                });

                return false;
            });
        });
    </script>

        <div>
            <div id="dialog" title="Basic dialog">
                <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
            </div>
            <asp:Button ID="btnAddButton" runat="server" Text="AddButton" />
            <div id="divcontainer">
            </div>
            <button id="opener">Open Dialog</button>
        </div>
</body>
</html>
    