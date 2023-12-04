<!-- home page of user -->
<?php
include "header.php";
?>
<!-- Main Content -->
<div id="content" style="min-height: 600px;">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Circle Buttons -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="m-2 font-weight-bold text-primary" id="countdowntimer" style="display: block;"></div>
                <div class="font-weight-bold text-gray" style="text-align: center"><?php echo "You are taking " .$_SESSION['subname'] . " (" .$_SESSION['DateOfPaper']. ") "." Subject Mock Test" ?></div>
            </div>
            <div class="card-body">
                <div class="row">
                    <br>
                    <div style="padding-left: 30px;">
                        <div id="current_que" style="float:left">0</div>
                        <div style="float:left">/</div>
                        <div id="total_que" style="float:left">0</div>
                    </div>
                </div>

                <div style="padding-left: 30px; min-height: 280px;" id="load_questions">
                    <!--loading questions here-->
                </div>

                <div class="" style="min-height:50px">
                    <div class="col-lg-4 text-center">

                        <input type="button" class="btn btn-warning" value="< Prev" onclick="load_previous();">&nbsp;
                        <input type="button" class="btn btn-success" value="Next >" onclick="load_next();">

                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!--question ends editing-->

<script type="text/javascript">
    function load_total_que() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("total_que").innerHTML = xmlhttp.responseText;

            }

        };
        xmlhttp.open("GET", "forajax/load_total_que.php", true);
        xmlhttp.send(null);
    }

    var questionno = "1";
    load_questions(questionno);

    function load_questions(questionno) {

        document.getElementById("current_que").innerHTML = questionno;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if (xmlhttp.responseText == "over") {
                   window.location = "result.php";
                } else {
                    document.getElementById("load_questions").innerHTML = xmlhttp.responseText;
                    load_total_que();
                }
            }

        };
        xmlhttp.open("GET", "forajax/load_questions.php?questionno=" + questionno, true);
        xmlhttp.send(null);
    }

    function radioclick(radiovalue, questionno) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {


            }

        };
        xmlhttp.open("GET", "forajax/save_answer_in_session.php?questionno=" + questionno + "&value1=" + radiovalue, true);
        xmlhttp.send(null);
    }

    function load_previous() {
        if (questionno == "1") {
            load_questions(questionno);

        } else {
            questionno = eval(questionno) - 1;
            load_questions(questionno);
        }


    }

    function load_next() {
        questionno = eval(questionno) + 1;
        load_questions(questionno);

    }
</script>

<script type="text/javascript">
    setInterval(function() {
        timer();
    }, 1000);

    function timer() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if (xmlhttp.responseText <= "00:00:01") {
                   window.location = "result.php";
                }
                document.getElementById("countdowntimer").innerHTML = xmlhttp.responseText;
            }

        };
        xmlhttp.open("GET", "forajax/load_timer.php", true);
        xmlhttp.send(null);
    }
</script>

<?php
include "./footer.php";
?>