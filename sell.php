<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>UVA F&Fs</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <nav id="navbar">
            <h1><a href="index.html" style="text-decoration: none">UVA Free and For Sale</a></h1><div class="wrap">
               <div class="search">
                    <label for = "search">
                        <input type="text" class="searchTerm" placeholder="What are you looking for?"><button type="submit" class="searchButton" style="height: 32px">
                        <i class="fa fa-search"></i>
                        </button>
                    </label>
               </div>
            </div><div id="navbuttons">
            </div>
        </nav>
        <aside class="left-container">
            <div class="btn-group">
                <button>All Items</button>
                <button>Books</button>
                <button>Furniture</button>
                <button>Clothing</button>
                <button>Miscellaneous</button>
                <button>Contact Us</button>
            </div>
        </aside><section class="right-container">

            <?php
                function convertToCard($name, $contact, $book)
                   {
                        echo '<div class="card">' . 
                                '<img src="https://images-na.ssl-images-amazon.com/images/I/41cXTXhiabL._SX366_BO1,204,203,200_.jpg">' .
                                '<div class="card-info">' . 
                                    '<div class="namefield">Name: ' . $name . '</div>' .
                                    '<div class="contactfield">Phone Number: ' . $contact . '</div>' .
                                    '<div class="bookfield">Textbook Type: ' . $book . '</div>' .
                                '</div>' .
                            '</div>';        
                   }
                $names = array('Roger', 'Carl', 'Yash');
                $numbers = array(2023034040, 2023034041, 2023034042);
                $textbooks = array('Physics', 'Math', 'Econ');
                $matrix = array('Name' => $names, 'Number' => $numbers, 'Books' => $textbooks);
                //echo implode(",", $matrix['Name']);
                for($i = 0; $i < sizeof($matrix); $i++)
                {
                    convertToCard($matrix['Name'][$i], $matrix['Number'][$i], $matrix['Books'][$i]);
                }
        
            ?>
        </section>
        
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
