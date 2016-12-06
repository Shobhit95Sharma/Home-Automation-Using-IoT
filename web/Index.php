<!--
Created By: Shobhit_Sharma
"Minor project: Home Automation using IoT"
Last Updated: 30-Nov-2016
-->
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pi | Controlling Devices</title>
    
    <!--BootStrap-->
    <link href="boot/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins -->
    <script src="boot/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script type="text/javascript">
        /*
                        Start and stop of
                        temperature sensor
                        */
        function start() {
            refreshcon = setInterval(function () {
                $('#temp_sensor').load('data.php', function () {});
            }, 2000);
            // document.getElementById('temp_sensor').value=load('data.php',function(){});
            // },1000);//Interval in milliseconds
        }
        //To stop autoload
        function stop() {
            try {
                clearInterval(refreshcon);
            } catch (err) {}
        }
    </script>
</head>

<body>
    <div class="container-fluid">

        <!--Start Section -->

        <div class="row text-center" id="head" style="background-color: #1abc9c;color:#ffffff;
                                                          ">
            <center>
                <br/>
                <h1 style="font-size:55px;" id="headline">
                    Home Automation Using<br/>Internet Of Things
                    </h1>

                <img src="pi.png" class="img-responsive img-circle" style="display:inline" alt="Pi">
                <br/>
                <br/>
                <div class="row row-centered">
                    <div class="col-xs-6 col-md-6 col-centered">
                        <a href="#s_room" class="ghost-button">
                            <button type="button" id="new_btn" class="btn btn-info btn-lg">
                                <span class="glyphicon glyphicon-education"></span>&nbsp; Study Room </button>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-6 col-centered">
                        <a href="#kitchen" class="ghost-button">
                            <button type="button" id="new_btn" class="btn btn-info btn-lg">
                                <span class="glyphicon glyphicon-cutlery"></span>&nbsp; Kitchen</button>
                        </a>
                    </div>
                </div>

            </center>
            <br/>
            <br/>
            <br/>
            <br/>

        </div>
        <br/>
        <br/>
        <br/>
        <br/>

        <!--Controlling Study Room-->

        <div id="s_room" class="jumbotron text-center">
            <h3>Study Room's<br/>Controllable Devices</h3>
            <br/>
            <div class="row">

                <div class="well col-sm-4" id="room_light">
                    <p>Controlling Room's Light :</p>
                    <br/>
                    <button class="btn btn-warning" type="submit" name="SubmitButton" onClick="parent.location='on1.php'">
                        ON</button>

                    <br/>
                    <br/>

                    <button type="button" class="btn btn-warning" onClick="parent.location='off1.php'">
                        OFF</button>
                    <br/>
                    <br/>
                    <br/>
                </div>

                <div class="well col-sm-4" id="fan">
                    <p>Controlling Fan :</p>
                    <br/>
                    <button class="btn btn-warning" type="submit" name="SubmitButton" onClick="parent.location='moton.php'">
                        ON</button>

                    <br/>
                    <br/>

                    <button type="button" class="btn btn-warning" onClick="parent.location='motoff.php'">
                        OFF</button>
                    <br/>
                    <br/>
                    <br/>
                </div>

                <div class="well col-sm-4" id="lamp">
                    <p>Controlling Lamp:</p>
                    <br/>
                    <button class="btn btn-warning" type="submit" name="SubmitButton" onClick="parent.location='s_lon.php'">
                        ON</button>

                    <br/>
                    <br/>

                    <button type="button" class="btn btn-warning" onClick="parent.location='s_loff.php'">
                        OFF</button>
                    <br/>
                    <br/>
                    <br/>
                </div>

            </div>
        </div>

        <!--Controlling Kichen-->

        <div id="kitchen" class="jumbotron text-center">
            <h3>Kitchen's<br/>Controllable Devices</h3>
            <br/>
            <div class="row">

                <div class="well col-sm-4" id="led">
                    <p>Controlling Light's :</p>
                    <br/>
                    <button class="btn btn-warning" type="submit" name="SubmitButton" onClick="parent.location='k_lon.php'">
                        ON</button>

                    <br/>
                    <br/>

                    <button type="button" class="btn btn-warning" onClick="parent.location='k_loff.php'">
                        OFF</button>
                    <br/>
                    <br/>
                    <br/>
                </div>

                <div id="tempSensor" class="well col-sm-4">
                    <p>Monitor Temperature :</p>
                    <br/>
                    <label for="Temperature" id="lb" class="col-sm-2 control-label">
                        Temperature(&nbsp;<sup>o</sup>C): </label>
                    <label for="Temp" id="temp_sensor" style="font-size:15px;text-align:center;"><b></b> </label>
                    <br/>
                    <br/>
                    <br/>
                    <div class="col-md-6 col-md-offset-2">
                        <button type="button" class="btn btn-warning btn btn-default btn-md col-md-5" onClick="start()" style="margin-right:10px;">
                            Start</button>
                        &nbsp;&nbsp;
                        <button type="button" class="btn btn-warning btn btn-default btn-md col-md-5" onClick="stop()" style="margin-left:5px;">
                            Stop</button>

                    </div>

                </div>

                <div class="well col-sm-4" id="led">
                    <p>Controlling Microwave :</p>
                    <br/>
                    <button class="btn btn-warning" type="submit" name="SubmitButton" onClick="parent.location='k_mon.php'">
                        ON</button>

                    <br/>
                    <br/>

                    <button type="button" class="btn btn-warning" onClick="parent.location='k_moff.php'">
                        OFF</button>
                    <br/>
                    <br/>
                    <br/>
                </div>

            </div>
        </div>

        <!--Footer-->

        <div class="row text-center">
            <footer class="container-fluid text-center" style=" font-size:15px;background-color: #474e5d;color:#ffffff">
                <br/>
                <center>
                    <p>
                        Project and Web Page created for minor project under guidance of
                        <br/> <b>Dr. Pradeep Tomar </b>
                        <br/> Created By:
                        <br/>Bhawesh Chandola(13/ICS/015)
                        <br/>Shobhit Sharma(13/ICS/051)
                        <br/> Vasudev Yadav(13/ICS/058)
                        <br/>Vivek Bharti(13/ICS/062)
                        <br/>
                    </p>
                </center>
                <br/>
            </footer>
        </div>
    </div>
</body>

</html>