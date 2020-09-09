<?php


function component($ime,$cena,$slika,$opis){
$element="

<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
            <form action=\"index.php\" method=\"post\">
            <div class=\"card shadow\">
                <div>
                    <img src=\"./images/$slika\" alt=\"image not loading\" class=\"img-fluid card-img-top\"
                </div>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">$ime</h5>
                    <h6>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"far fa-star\"></i>
                    </h6>
                    <p class=\"card-text\">
                        $opis
                    </p>
                    <h5>
                        <small style=\"text-decoration: line-through;\">1300€</small>
                        <span class=\"price\">$cena €</span>
                    </h5>
                    <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to cart <i class=\"fas fa-shopping-cart\"></i> </button>
                </div>
            </div>
            </form>
        </div>
    </div>

";
echo $element;
}


