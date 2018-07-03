<!DOCTYPE html>
<html>
<head>
<title>Update Event</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Sign Up Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/vis.js"></script>
    <link href="css/vis.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
        #mynetwork {
            margin-left: 100px;
            width: 1500px;
            height: 900px;
            /*border: 1px solid lightgray;*/
        }
    </style>
</head>
<body bgcolor="#FFFFFF">

        <form action="/htdocs/People/modules/templates/UserProfilePage.php" method="post">
        <div>
        <h2 class="sub-head"><? echo "Smart Node for EventUp"; ?></h2>
        <div class="sub-main">  
        <input class="ok" type="submit" value="Home">
        </div>
        </form>

    <div id="mynetwork"></div>
    <script type="text/javascript">
                    // create an array with nodes
                        var nodes = new vis.DataSet([
                        {id: 1, label: 'Admin'},
                        {id: 2, label: 'EventOrganizer1'},
                        {id: 3, label: 'EventOrganizer2'},
                        {id: 4, label: 'EventOrganizer3'},
                        {id: 5, label: 'John'},
                        {id: 6, label: 'Hendrick'},
                        {id: 7, label: 'Ish'},
                        {id: 8, label: 'Sow'},
                        {id: 9, label: 'Jane'},
                        {id: 10, label: 'Helen'},
                        {id: 11, label: 'Kate'},
                        {id: 12, label: 'Rick'},
                        {id: 13, label: 'Jean'},
                        {id: 14, label: 'Bane'},
                        {id: 15, label: 'Elham'},
                        {id: 16, label: 'Richard'},
                        {id: 17, label: 'Kylie'},
                        {id: 18, label: 'Kim'},
                        {id: 19, label: 'Jenner'},
                        {id: 20, label: 'Kent'}

                                
                    ]);

                    // create an array with edges
                    var edges = new vis.DataSet([
                        {from: 1, to: 2},
                        {from: 1, to: 3},
                        {from: 1, to: 4},
                        {from: 2, to: 4},
                        {from: 2, to: 5},
                        {from: 2, to: 6},
                        {from: 3, to: 7},
                        {from: 2, to: 8},
                        {from: 2, to: 9},
                        {from: 3, to: 10},
                        {from: 3, to: 11},
                        {from: 3, to: 12},
                        {from: 3, to: 13},
                        {from: 3, to: 14},
                        {from: 3, to: 15},
                        {from: 4, to: 16},
                        {from: 4, to: 17},
                        {from: 4, to: 18},
                        {from: 4, to: 19},
                        {from: 4, to: 20}
                    ]);

                    // create a network
                    var container = document.getElementById('mynetwork');

                    // provide the data in the vis format
                    var data = {
                        nodes: nodes,
                        edges: edges
                    };
                    var options = {};

                    // initialize your network!
                    var network = new vis.Network(container, data, options);
                    </script>
        </div>
</body>
</html>