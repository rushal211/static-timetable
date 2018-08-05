<?php
$conn = mysqli_connect('localhost', 'root', '', 'timetable');
if ($conn) {
    
    $monday           = $_GET['monday'];
    $mondayroom       = "";
    $mondayfaculty    = "";
    $tuesday          = $_GET['tuesday'];
    $tuesdayroom      = $_GET['tuesdayroom'];
    $tuesdayfaculty   = $_GET['tuesdayfaculty'];
    $wednesday        = $_GET['wednesday'];
    $wednesdayroom    = $_GET['wednesdayroom'];
    $wednesdayfaculty = $_GET['wednesdayfaculty'];
    $thursday         = $_GET['thursday'];
    $thursdayroom     = $_GET['thursdayroom'];
    $thursdayfaculty  = $_GET['thursdayfaculty'];
    $friday           = $_GET['friday'];
    $fridayroom       = $_GET['fridayroom'];
    $fridayfaculty    = $_GET['fridayfaculty'];
    $saturday         = $_GET['saturday'];
    $saturdayroom     = $_GET['saturdayroom'];
    $saturdayfaculty  = $_GET['saturdayfaculty'];
    
    
    $monday2           = $_GET['monday2'];
    $monday2room       = $_GET['monday2room'];
    $monday2faculty    = $_GET['monday2faculty'];
    $tuesday2          = $_GET['tuesday2'];
    $tuesday2room      = $_GET['tuesday2room'];
    $tuesday2faculty   = $_GET['tuesday2faculty'];
    $wednesday2        = $_GET['wednesday2'];
    $wednesday2room    = $_GET['wednesday2room'];
    $wednesday2faculty = $_GET['wednesday2faculty'];
    $thursday2         = $_GET['thursday2'];
    $thursday2room     = $_GET['thursday2room'];
    $thursday2faculty  = $_GET['thursday2faculty'];
    $friday2           = $_GET['friday2'];
    $friday2room       = $_GET['friday2room'];
    $friday2faculty    = $_GET['friday2faculty'];
    $saturday2         = $_GET['saturday2'];
    $saturday2room     = $_GET['saturday2room'];
    $saturday2faculty  = $_GET['saturday2faculty'];
    
    $monday3                = $_GET['monday3'];
    $monday3room            = $_GET['monday3room'];
    $monday3faculty         = $_GET['monday3faculty'];
    $tuesday3               = $_GET['tuesday3'];
    $tuesday3room           = $_GET['tuesday3room'];
    $tuesday3faculty        = $_GET['tuesday3faculty'];
    $wednesday3             = $_GET['wednesday3'];
    $wednesday3room         = $_GET['wednesday3room'];
    $wednesday3faculty      = $_GET['wednesday3faculty'];
    $thursday3batch1        = $_GET['thursday3batch1'];
    $thursday3batch1room    = $_GET['thursday3batch1room'];
    $thursday3batch1faculty = $_GET['thursday3batch1faculty'];
    $thursday3batch2        = $_GET['thursday3batch2'];
    $thursday3batch2room    = $_GET['thursday3batch2room'];
    $thursday3batch2faculty = $_GET['thursday3batch2faculty'];
    $thursday3batch3        = $_GET['thursday3batch3'];
    $thursday3batch3room    = $_GET['thursday3batch3room'];
    $thursday3batch3faculty = $_GET['thursday3batch3faculty'];
    $thursday3batch4        = $_GET['thursday3batch4'];
    $thursday3batch4room    = $_GET['thursday3batch4room'];
    $thursday3batch4faculty = $_GET['thursday3batch4faculty'];
    $friday3                = $_GET['friday3'];
    $friday3room            = $_GET['friday3room'];
    $friday3faculty         = $_GET['friday3faculty'];
    $saturday3              = $_GET['saturday3'];
    $saturday3room          = $_GET['saturday3room'];
    $saturday3faculty       = $_GET['saturday3faculty'];
    
    $monday4                = $_GET['monday4'];
    $monday4room            = $_GET['monday4room'];
    $monday4faculty         = $_GET['monday4faculty'];
    $tuesday4               = $_GET['tuesday4'];
    $tuesday4room           = $_GET['tuesday4room'];
    $tuesday4faculty        = $_GET['tuesday4faculty'];
    $wednesday4             = $_GET['wednesday4'];
    $wednesday4room         = $_GET['wednesday4room'];
    $wednesday4faculty      = $_GET['wednesday4faculty'];
    $thursday4batch1        = $_GET['thursday4batch1'];
    $thursday4batch1room    = $_GET['thursday4batch1room'];
    $thursday4batch1faculty = $_GET['thursday4batch1faculty'];
    $thursday4batch2        = $_GET['thursday4batch2'];
    $thursday4batch2room    = $_GET['thursday4batch2room'];
    $thursday4batch2faculty = $_GET['thursday4batch2faculty'];
    $thursday4batch3        = $_GET['thursday4batch3'];
    $thursday4batch3room    = $_GET['thursday4batch3room'];
    $thursday4batch3faculty = $_GET['thursday4batch3faculty'];
    $thursday4batch4        = $_GET['thursday4batch4'];
    $thursday4batch4room    = $_GET['thursday4batch4room'];
    $thursday4batch4faculty = $_GET['thursday4batch4faculty'];
    $friday4                = $_GET['friday4'];
    $friday4room            = $_GET['friday4room'];
    $friday4faculty         = $_GET['friday4faculty'];
    $saturday4              = $_GET['saturday4'];
    $saturday4room          = $_GET['saturday4room'];
    $saturday4faculty       = $_GET['saturday4faculty'];
    
    $monday5batch1    = $_GET['monday5batch1'];
    $monday5batch2    = $_GET['monday5batch2'];
    $monday5batch3    = $_GET['monday5batch3'];
    $monday5batch4    = $_GET['monday5batch4'];
    $tuesday5batch1   = $_GET['tuesday5batch1'];
    $tuesday5batch2   = $_GET['tuesday5batch2'];
    $tuesday5batch3   = $_GET['tuesday5batch3'];
    $tuesday5batch4   = $_GET['tuesday5batch4'];
    $wednesday5batch1 = $_GET['wednesday5batch1'];
    $wednesday5batch2 = $_GET['wednesday5batch2'];
    $wednesday5batch3 = $_GET['wednesday5batch3'];
    $wednesday5batch4 = $_GET['wednesday5batch4'];
    $thursday5batch1  = $_GET['thursday5batch1'];
    $thursday5batch2  = $_GET['thursday5batch2'];
    $thursday5batch3  = $_GET['thursday5batch3'];
    $thursday5batch4  = $_GET['thursday5batch4'];
    $friday5          = $_GET['friday5'];
    $saturday5        = $_GET['saturday5'];
    
    // rooms 
    $monday5batch1room    = $_GET['monday5batch1room'];
    $monday5batch2room    = $_GET['monday5batch2room'];
    $monday5batch3room    = $_GET['monday5batch3room'];
    $monday5batch4room    = $_GET['monday5batch4room'];
    $tuesday5batch1room   = $_GET['tuesday5batch1room'];
    $tuesday5batch2room   = $_GET['tuesday5batch2room'];
    $tuesday5batch3room   = $_GET['tuesday5batch3room'];
    $tuesday5batch4room   = $_GET['tuesday5batch4room'];
    $wednesday5batch1room = $_GET['wednesday5batch1room'];
    $wednesday5batch2room = $_GET['wednesday5batch2room'];
    $wednesday5batch3room = $_GET['wednesday5batch3room'];
    $wednesday5batch4room = $_GET['wednesday5batch4room'];
    $thursday5batch1room  = $_GET['thursday5batch1room'];
    $thursday5batch2room  = $_GET['thursday5batch2room'];
    $thursday5batch3room  = $_GET['thursday5batch3room'];
    $thursday5batch4room  = $_GET['thursday5batch4room'];
    $friday5room          = $_GET['friday5room'];
    $saturday5room        = $_GET['saturday5room'];
    
    //--
    // faculty
    $monday5batch1faculty    = $_GET['monday5batch1faculty'];
    $monday5batch2faculty    = $_GET['monday5batch2faculty'];
    $monday5batch3faculty    = $_GET['monday5batch3faculty'];
    $monday5batch4faculty    = $_GET['monday5batch4faculty'];
    $tuesday5batch1faculty   = $_GET['tuesday5batch1faculty'];
    $tuesday5batch2faculty   = $_GET['tuesday5batch2faculty'];
    $tuesday5batch3faculty   = $_GET['tuesday5batch3faculty'];
    $tuesday5batch4faculty   = $_GET['tuesday5batch4faculty'];
    $wednesday5batch1faculty = $_GET['wednesday5batch1faculty'];
    $wednesday5batch2faculty = $_GET['wednesday5batch2faculty'];
    $wednesday5batch3faculty = $_GET['wednesday5batch3faculty'];
    $wednesday5batch4faculty = $_GET['wednesday5batch4faculty'];
    $thursday5batch1faculty  = $_GET['thursday5batch1faculty'];
    $thursday5batch2faculty  = $_GET['thursday5batch2faculty'];
    $thursday5batch3faculty  = $_GET['thursday5batch3faculty'];
    $thursday5batch4faculty  = $_GET['thursday5batch4faculty'];
    $friday5faculty          = $_GET['friday5faculty'];
    $saturday5faculty        = $_GET['saturday5faculty'];
    //--
    
    $monday6batch1    = $_GET['monday6batch1'];
    $monday6batch2    = $_GET['monday6batch2'];
    $monday6batch3    = $_GET['monday6batch3'];
    $monday6batch4    = $_GET['monday6batch4'];
    $tuesday6batch1   = $_GET['tuesday6batch1'];
    $tuesday6batch2   = $_GET['tuesday6batch2'];
    $tuesday6batch3   = $_GET['tuesday6batch3'];
    $tuesday6batch4   = $_GET['tuesday6batch4'];
    $wednesday6batch1 = $_GET['wednesday6batch1'];
    $wednesday6batch2 = $_GET['wednesday6batch2'];
    $wednesday6batch3 = $_GET['wednesday6batch3'];
    $wednesday6batch4 = $_GET['wednesday6batch4'];
    $thursday6batch1  = $_GET['thursday6batch1'];
    $thursday6batch2  = $_GET['thursday6batch2'];
    $thursday6batch3  = $_GET['thursday6batch3'];
    $thursday6batch4  = $_GET['thursday6batch4'];
    $friday6          = $_GET['friday6'];
    $saturday6        = $_GET['saturday6'];
    
    //rooms
    $monday6batch1room       = $_GET['monday6batch1room'];
    $monday6batch2room       = $_GET['monday6batch2room'];
    $monday6batch3room       = $_GET['monday6batch3room'];
    $monday6batch4room       = $_GET['monday6batch4room'];
    $tuesday6batch1room      = $_GET['tuesday6batch1room'];
    $tuesday6batch2room      = $_GET['tuesday6batch2room'];
    $tuesday6batch3room      = $_GET['tuesday6batch3room'];
    $tuesday6batch4room      = $_GET['tuesday6batch4room'];
    $wednesday6batch1room    = $_GET['wednesday6batch1room'];
    $wednesday6batch2room    = $_GET['wednesday6batch2room'];
    $wednesday6batch3room    = $_GET['wednesday6batch3room'];
    $wednesday6batch4room    = $_GET['wednesday6batch4room'];
    $thursday6batch1room     = $_GET['thursday6batch1room'];
    $thursday6batch2room     = $_GET['thursday6batch2room'];
    $thursday6batch3room     = $_GET['thursday6batch3room'];
    $thursday6batch4room     = $_GET['thursday6batch4room'];
    $friday6room             = $_GET['friday6room'];
    $saturday6room           = $_GET['saturday6room'];
    //faculty
    $monday6batch1faculty    = $_GET['monday6batch1faculty'];
    $monday6batch2faculty    = $_GET['monday6batch2faculty'];
    $monday6batch3faculty    = $_GET['monday6batch3faculty'];
    $monday6batch4faculty    = $_GET['monday6batch4faculty'];
    $tuesday6batch1faculty   = $_GET['tuesday6batch1faculty'];
    $tuesday6batch2faculty   = $_GET['tuesday6batch2faculty'];
    $tuesday6batch3faculty   = $_GET['tuesday6batch3faculty'];
    $tuesday6batch4faculty   = $_GET['tuesday6batch4faculty'];
    $wednesday6batch1faculty = $_GET['wednesday6batch1faculty'];
    $wednesday6batch2faculty = $_GET['wednesday6batch2faculty'];
    $wednesday6batch3faculty = $_GET['wednesday6batch3faculty'];
    $wednesday6batch4faculty = $_GET['wednesday6batch4faculty'];
    $thursday6batch1faculty  = $_GET['thursday6batch1faculty'];
    $thursday6batch2faculty  = $_GET['thursday6batch2faculty'];
    $thursday6batch3faculty  = $_GET['thursday6batch3faculty'];
    $thursday6batch4faculty  = $_GET['thursday6batch4faculty'];
    $friday6faculty          = $_GET['friday6faculty'];
    $saturday6faculty        = $_GET['saturday6faculty'];
    
    // Subject 
    $insert = "UPDATE detailstemp SET time1 = '$monday' ,
                                  time2 = '$monday2' , 
                                  time3 = '$monday3' , 
                                  time4 = '$monday4' , 
                                  time5 = '$monday5batch1.$monday5batch2.$monday5batch3.$monday5batch4' ,
                                  time6 = '$monday6batch1.$monday6batch2.$monday6batch3.$monday6batch4'
                                   WHERE week='Monday'";
    
    $res = mysqli_query($conn, $insert);
    
    $insert2 = "UPDATE detailstemp SET time1 = '$tuesday' ,
                                  time2 = '$tuesday2' , 
                                  time3 = '$tuesday3' , 
                                  time4 = '$tuesday4' , 
                                  time5 = '$tuesday5batch1.$tuesday5batch2.$tuesday5batch3.$tuesday5batch4' ,
                                  time6 = '$tuesday6batch1.$tuesday6batch2.$tuesday6batch3.$tuesday6batch4'
                                   WHERE week='Tuesday'";
    
    $res = mysqli_query($conn, $insert2);
    
    $insert3 = "UPDATE detailstemp SET time1 = '$wednesday' ,
                                  time2 = '$wednesday2' , 
                                  time3 = '$wednesday3' , 
                                  time4 = '$wednesday4' , 
                                  time5 = '$wednesday5batch1.$wednesday5batch2.$wednesday5batch3.$wednesday5batch4' ,
                                  time6 = '$wednesday6batch1.$wednesday6batch2.$wednesday6batch3.$wednesday6batch4'
                                   WHERE week='Wednesday'";
    
    $res = mysqli_query($conn, $insert3);
    
    $insert4 = "UPDATE detailstemp SET time1 = '$thursday' ,
                                  time2 = '$thursday2' , 
                                  time3 = '$thursday3batch1.$thursday3batch2.$thursday3batch3.$thursday3batch4' , 
                                  time4 = '$thursday4batch1.$thursday4batch2.$thursday4batch3.$thursday4batch4' , 
                                  time5 = '$thursday5batch1.$thursday5batch2.$thursday5batch3.$thursday5batch4' ,
                                  time6 = '$thursday6batch1.$thursday6batch2.$thursday6batch3.$thursday6batch4'
                                   WHERE week='Thursday'";
    
    $res = mysqli_query($conn, $insert4);
    
    $insert5 = "UPDATE detailstemp SET time1 = '$friday' ,
                                  time2 = '$friday2' , 
                                  time3 = '$friday3' , 
                                  time4 = '$friday4' , 
                                  time5 = '$friday5' ,
                                  time6 = '$friday6'
                                   WHERE week='Friday'";
    
    $res = mysqli_query($conn, $insert5);
    
    $insert6 = "UPDATE detailstemp SET time1 = '$saturday' ,
                                  time2 = '$saturday2' , 
                                  time3 = '$saturday3' , 
                                  time4 = '$saturday4' , 
                                  time5 = '$saturday5' ,
                                  time6 = '$saturday6'
                                   WHERE week='Saturday'";
    
    $res = mysqli_query($conn, $insert6);
    
    
    // Rooms 
    $insert = "UPDATE rooms SET time1 = '$mondayroom' ,
                                  time2 = '$monday2room' , 
                                  time3 = '$monday3room' , 
                                  time4 = '$monday4room' , 
                                  time5 = '$monday5batch1room.$monday5batch2room.$monday5batch3room.$monday5batch4room' ,
                                  time6 = '$monday6batch1room.$monday6batch2room.$monday6batch3room.$monday6batch4room'
                                   WHERE week='Monday'";
    
    $res = mysqli_query($conn, $insert);
    
    $insert2 = "UPDATE rooms SET time1 = '$tuesdayroom' ,
                                  time2 = '$tuesday2room' , 
                                  time3 = '$tuesday3room' , 
                                  time4 = '$tuesday4room' , 
                                  time5 = '$tuesday5batch1room.$tuesday5batch2room.$tuesday5batch3room.$tuesday5batch4room' ,
                                  time6 = '$tuesday6batch1room.$tuesday6batch2room.$tuesday6batch3room.$tuesday6batch4room'
                                   WHERE week='Tuesday'";
    
    $res = mysqli_query($conn, $insert2);
    
    $insert3 = "UPDATE rooms SET time1 = '$wednesdayroom' ,
                                  time2 = '$wednesday2room' , 
                                  time3 = '$wednesday3room' , 
                                  time4 = '$wednesday4room' , 
                                  time5 = '$wednesday5batch1room.$wednesday5batch2room.$wednesday5batch3room.$wednesday5batch4room' ,
                                  time6 = '$wednesday6batch1room.$wednesday6batch2room.$wednesday6batch3room.$wednesday6batch4room'
                                   WHERE week='Wednesday'";
    
    $res = mysqli_query($conn, $insert3);
    
    $insert4 = "UPDATE rooms SET time1 = '$thursdayroom' ,
                                  time2 = '$thursday2room' , 
                                  time3 = '$thursday3batch1room.$thursday3batch2room.$thursday3batch3room.$thursday3batch4room' , 
                                  time4 = '$thursday4batch1room.$thursday4batch2room.$thursday4batch3room.$thursday4batch4room' , 
                                  time5 = '$thursday5batch1room.$thursday5batch2room.$thursday5batch3room.$thursday5batch4room' ,
                                  time6 = '$thursday6batch1room.$thursday6batch2room.$thursday6batch3room.$thursday6batch4room'
                                   WHERE week='Thursday'";
    
    $res = mysqli_query($conn, $insert4);
    
    $insert5 = "UPDATE rooms SET time1 = '$fridayroom' ,
                                  time2 = '$friday2room' , 
                                  time3 = '$friday3room' , 
                                  time4 = '$friday4room' , 
                                  time5 = '$friday5room' ,
                                  time6 = '$friday6room'
                                   WHERE week='Friday'";
    
    $res = mysqli_query($conn, $insert5);
    
    $insert6 = "UPDATE rooms SET time1 = '$saturdayroom' ,
                                  time2 = '$saturday2room' , 
                                  time3 = '$saturday3room' , 
                                  time4 = '$saturday4room' , 
                                  time5 = '$saturday5room' ,
                                  time6 = '$saturday6room'
                                   WHERE week='Saturday'";
    
    $res = mysqli_query($conn, $insert6);
    
    // Faculty 
    $insert = "UPDATE faculty SET time1 = '$mondayfaculty' ,
                                  time2 = '$monday2faculty' , 
                                  time3 = '$monday3faculty' , 
                                  time4 = '$monday4faculty' , 
                                  time5 = '$monday5batch1faculty.$monday5batch2faculty.$monday5batch3faculty.$monday5batch4faculty' ,
                                  time6 = '$monday6batch1faculty.$monday6batch2faculty.$monday6batch3faculty.$monday6batch4faculty'
                                   WHERE week='Monday'";
    
    $res = mysqli_query($conn, $insert);
    
    $insert2 = "UPDATE faculty SET time1 = '$tuesdayfaculty' ,
                                  time2 = '$tuesday2faculty' , 
                                  time3 = '$tuesday3faculty' , 
                                  time4 = '$tuesday4faculty' , 
                                  time5 = '$tuesday5batch1faculty.$tuesday5batch2faculty.$tuesday5batch3faculty.$tuesday5batch4faculty' ,
                                  time6 = '$tuesday6batch1faculty.$tuesday6batch2faculty.$tuesday6batch3faculty.$tuesday6batch4faculty'
                                   WHERE week='Tuesday'";
    
    $res = mysqli_query($conn, $insert2);
    
    $insert3 = "UPDATE faculty SET time1 = '$wednesdayfaculty' ,
                                  time2 = '$wednesday2faculty' , 
                                  time3 = '$wednesday3faculty' , 
                                  time4 = '$wednesday4faculty' , 
                                  time5 = '$wednesday5batch1faculty.$wednesday5batch2faculty.$wednesday5batch3faculty.$wednesday5batch4faculty' ,
                                  time6 = '$wednesday6batch1faculty.$wednesday6batch2faculty.$wednesday6batch3faculty.$wednesday6batch4faculty'
                                   WHERE week='Wednesday'";
    
    $res = mysqli_query($conn, $insert3);
    
    $insert4 = "UPDATE faculty SET time1 = '$thursdayfaculty' ,
                                  time2 = '$thursday2faculty' , 
                                  time3 = '$thursday3batch1faculty.$thursday3batch2faculty.$thursday3batch3faculty.$thursday3batch4faculty' , 
                                  time4 = '$thursday4batch1faculty.$thursday4batch2faculty.$thursday4batch3faculty.$thursday4batch4faculty' , 
                                  time5 = '$thursday5batch1faculty.$thursday5batch2faculty.$thursday5batch3faculty.$thursday5batch4faculty' ,
                                  time6 = '$thursday6batch1faculty.$thursday6batch2faculty.$thursday6batch3faculty.$thursday6batch4faculty'
                                   WHERE week='Thursday'";
    
    $res = mysqli_query($conn, $insert4);
    
    $insert5 = "UPDATE faculty SET time1 = '$fridayfaculty' ,
                                  time2 = '$friday2faculty' , 
                                  time3 = '$friday3faculty' , 
                                  time4 = '$friday4faculty' , 
                                  time5 = '$friday5faculty' ,
                                  time6 = '$friday6faculty'
                                   WHERE week='Friday'";
    
    $res = mysqli_query($conn, $insert5);
    
    $insert6 = "UPDATE faculty SET time1 = '$saturdayfaculty' ,
                                  time2 = '$saturday2faculty' , 
                                  time3 = '$saturday3faculty' , 
                                  time4 = '$saturday4faculty' , 
                                  time5 = '$saturday5faculty' ,
                                  time6 = '$saturday6faculty'
                                   WHERE week='Saturday'";
    
    $res = mysqli_query($conn, $insert6);
    
    header('location: result.php');
} else {
    echo "not";
}

?>