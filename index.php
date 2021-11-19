<?php
session_start();
include("conn.php");
error_reporting(0);
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>HMS</title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2:  Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  <?php include("header.php"); ?>
 
  <div class="card-group">
    <div class="card">
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src=".\image\Hostel.jpg" class="img-top d-block" data-bs-interval="1000" alt="...">
    </div>
    <div class="carousel-item">
      <img src=".\image\h1.jpg" class="img-top d-block" data-bs-interval="1000" alt="...">
    </div>
    <div class="carousel-item">
      <img src=".\image\h4.jfif" class="img-top d-block" data-bs-interval="1000" alt="...">
    </div> 
	<div class="carousel-item">
      <img src=".\image\h5.jfif" class="img-top d-block" data-bs-interval="1000" alt="...">
    </div>
	<div class="carousel-item">
      <img src=".\image\h6.jfif" class="img-top d-block" data-bs-interval="1000" alt="...">
    </div>
	<div class="carousel-item">
      <img src=".\image\h7.jfif" class="img-top d-block" data-bs-interval="1000" alt="...">
    </div>
	<div class="carousel-item">
      <img src=".\image\h8.jfif" class="img-top d-block" data-bs-interval="1000" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    </div>
    <div class="card">

      <div class="title" border="09px solid dark">
        <h1>Hostel </h1>
        <h2>Management</h2>
        <h3>System</h3>
        <h4>Stay with Friends, Relax with Friends And Enjoy With Friends</h4>
      </div>
    </div>

  </div>
   <div class="col-lg-6">

                <div class="custom-calendar-wrap">
                    <div id="custom-inner" class="custom-inner">
                        <div class="custom-header clearfix">
                            <nav>
                                <span id="custom-prev" class="custom-prev"></span>
                                <span id="custom-next" class="custom-next"></span>
                            </nav>
                            <h2 id="custom-month" class="custom-month"></h2>
                            <h2 id="custom-year" class="custom-year"></h2>
                        </div>
                        <div id="calendar" class="fc-calendar-container"></div>

                    </div>
                </div>


            </div>
        </div>

    </div>
    <!-- /#page-wrapper -->

<script >
    $(function() {

        var transEndEventNames = {
                'WebkitTransition' : 'webkitTransitionEnd',
                'MozTransition' : 'transitionend',
                'OTransition' : 'oTransitionEnd',
                'msTransition' : 'MSTransitionEnd',
                'transition' : 'transitionend'
            },
            transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
            $wrapper = $( '#custom-inner' ),
            $calendar = $( '#calendar' ),
            cal = $calendar.calendario( {
                onDayClick : function( $el, $contentEl, dateProperties ) {

                    if( $contentEl.length > 0 ) {
                        showEvents( $contentEl, dateProperties );
                    }

                },
                caldata : codropsEvents,
                displayWeekAbbr : true
            } ),
            $month = $( '#custom-month' ).html( cal.getMonthName() ),
            $year = $( '#custom-year' ).html( cal.getYear() );

        $( '#custom-next' ).on( 'click', function() {
            cal.gotoNextMonth( updateMonthYear );
        } );
        $( '#custom-prev' ).on( 'click', function() {
            cal.gotoPreviousMonth( updateMonthYear );
        } );

        function updateMonthYear() {
            $month.html( cal.getMonthName() );
            $year.html( cal.getYear() );
        }

        // just an example..
        function showEvents( $contentEl, dateProperties ) {

            hideEvents();

            var $events = $( '<div id="custom-content-reveal" class="custom-content-reveal"><h4>Events for ' + dateProperties.monthname + ' ' + dateProperties.day + ', ' + dateProperties.year + '</h4></div>' ),
                $close = $( '<span class="custom-content-close"></span>' ).on( 'click', hideEvents );

            $events.append( $contentEl.html() , $close ).insertAfter( $wrapper );

            setTimeout( function() {
                $events.css( 'top', '0%' );
            }, 25 );

        }
        function hideEvents() {

            var $events = $( '#custom-content-reveal' );
            if( $events.length > 0 ) {

                $events.css( 'top', '100%' );
                Modernizr.csstransitions ? $events.on( transEndEventName, function() { $( this ).remove(); } ) : $events.remove();

            }

        }

    });
</script>
<br>
<div class="container justify">
<div class="about">About Us</div>
<hr>
<p>Hostel is a place which is just like second home for the people who lives outside from the home they feel safe while living in hostel. To manage the data and information of the person who are living in hostel is a very complex task. It needs a lot of time of many people who are managing it. Our project Hostel Management System helps in keeping the track of work flow taking in the hostel. The hostel staff can keep the record of hostellers and every other details hence helping in reducing the work of the staff as well as hostellers.
</p>
<p>
The Hostel Management  system will work and  update the hostellers records, employees record , guest  record,  hostels  record and  hostellers fees record, hostellers attendance  record, hostel  buildings[blocks]  and  rooms  records, mess management and mess billings and addmission process, payment process can be done through  online. This  system automatically  calculates the hostel fees, mess bill etc.
</p>
<p>
It manages the student information, room information, room allocation details, fee details, mess bill details and employee details of the hostel. It is also used to generate reports of student details, fee details and mess bill details of the student. It  keeps track  of  the  number  of  students in  the room  and  availability of the room.  It  helps organization  from the manual work from which  it  is very difficult to find the record of the students and the mess bills of the students.
</p>
<p>
The "Hostel Management System" has been developed to override the problems prevailing in the practicing manual system. This software is supported to eliminate and in some cases reduce the hardships faced by this existing system. Moreover this system is designed for the particular need of the company to carry out operations in a smooth and effective manner.</p>
<p>
The application is reduced as much as possible to avoid errors while entering the data. It also provides error message while entering invalid data. No formal knowledge is needed for the user to use this system. Thus by this all it proves it is user-friendly. Hostel Management System , as described above, can lead to error free, secure, reliable and fast management system. It can assist the user to concentrate on their other activities rather to concentrate on the record keeping. Thus it will help organization in better utilization of resources.
</p>
<p>
Every organization, whether big or small, has challenges to overcome and managing the information of Room, Hostel, Student, Facility, Student Registration. Every Hostel Management System has different Hostel needs, therefore we design exclusive employee management systems that are adapted to your managerial requirements. This is designed to assist in strategic planning, and will help you ensure that your organization is equipped with the right level of information and details for your future goals. Also, for those busy executive who are always on the go, our systems come with remote access features, which will allow you to manage your workforce anytime, at all times. These systems will ultimately allow you to better manage resources.
</p>
</div>
<br>
  <img src=".\image\Back2.jpg" class="img-bottom" alt="...">
  <?php include("footer.php"); ?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
    if(isset($_SESSION['status']) && $_SESSION['status'] !='')
	{
	 ?>
<script>
swal({
  title: "<?php echo $_SESSION['status'];?>",
  icon: "<?php echo $_SESSION['status_code'];?>",
  button: "Done",
});
</script>
<?php 
    unset($_SESSION['status']);
	}
?>


</body>

</html>