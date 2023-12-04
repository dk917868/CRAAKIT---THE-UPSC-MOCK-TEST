<?php
if (isset($_POST['ECONOMY'])) {
    // Store the value of the text input element in a PHP variable
    $mytext = $_POST['ECONOMY'];
    echo 'You entered: ' . $mytext;
}
else if(isset($_POST['ETHICS'])) {
    // Store the value of the text input element in a PHP variable
    $mytext = $_POST['ETHICS'];
    echo 'You entered: ' . $mytext;
}
?>

<form  method="post">

<div id="SubjectWise" class="collapse text-center" aria-labelledby="headingSubjects" data-parent="#accordionSidebar">
    <div class="bg-primary py-3 collapse-inner rounded " id="my-dropdown">
        

            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Economy" aria-expanded="false" aria-controls="pagesCollapseAuth">
                <span><i class="fas fa-book-open"></i> &emsp;<input type="submit" value="ECONOMY" name="ECONOMY" style="background-color: transparent; border-color: transparent; color: black;"></span>

            </a>
            <div class="collapse" id="Economy" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                <div class="bg-white py-2 collapse-inner rounded">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link text-dark text-center" href="#"><?php  echo 'You entered: ' . $mytext; ?></a>
                        <a class="nav-link text-dark text-center" href="#">FEB</a>
                        <a class="nav-link text-dark text-center" href="#">MAR</a>
                    </nav>
                </div>
            </div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ethics" aria-expanded="false" aria-controls="pagesCollapseAuth">
                <span><i class="fas fa-book-open"></i> &emsp;<input type="submit" value="ETHICS" name="ETHICS" style="background-color: transparent; border-color: transparent; color: black;"></span>

            </a>
            <div class="collapse" id="ethics" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                <div class="bg-white py-2 collapse-inner rounded">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link text-dark text-center" href="#"><?php  echo 'You entered: ' . $mytext; ?></a>
                        <a class="nav-link text-dark text-center" href="#">FEB</a>
                        <a class="nav-link text-dark text-center" href="#">MAR</a>
                    </nav>
                </div>
            </div>
        
    </div>
</div>
</form>