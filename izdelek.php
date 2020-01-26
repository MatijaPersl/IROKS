<?php

function component($imeizdelek, $cenaizdelek, $slikaizdelek){
$element="

<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
            <form action=\"index.php\" method=\"post\">
            <div class=\"card shadow\">
                <div>
                    <img src=\"./images/image1_galaxys10.png\" alt=\"image1\" class=\"img-fluid card-img-top\"
                </div>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">$imeizdelek</h5>
                    <h6>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"far fa-star\"></i>
                    </h6>
                    <p class=\"card-text\">
                        Some quick text to build on the hard
                    </p>
                    <h5>
                        <small style=\"text-decoration: line-through;\">1300€</small>
                        <span class=\"price\">900€</span>
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