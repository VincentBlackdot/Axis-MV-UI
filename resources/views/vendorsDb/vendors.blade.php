<!DOCTYPE html>
<html lang="en">
@include('layouts.master')
<body>

 @include('layouts.topbar')
 
  
  <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">CLIENT 1</h5>
          <li class="mt">
            <a class="active" href="vendors.blade.php">
              <i class="fa fa-dashboard"></i>
              <span>Home</span>
              </a>
          </li>
          <li>
            <a href="inbox.html">
              <i class="fa fa-user"></i>
              <span>user profile </span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-product-hunt"></i>
              <span>products</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('home') }}">My Product List</a></li>
              <li><a href="{{ route('admin') }}" >Orders</a></li>
            
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-money"></i>
              <span>Sales</span>
              </a>
            <ul class="sub">
              <li><a href="grids.html">Top Customers</a></li>
              <li><a href="calendar.html">Returns and Refunds</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Invoice & Quotations</span>
              </a>
            <ul class="sub">
              <li><a href="profile.html">Quotation</a></li>
              <li><a href="invoice.html">Invoice</a></li>
              <li><a href="pricing_table.html">Pricing Table</a></li>
            </ul>
          </li>
          
          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.html">Lobby</a></li>
              <li><a href="chat_room.html"> Chat Room</a></li>
            </ul>
          </li>
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside><br><br><br><br>

   
    
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">

                   <!--dd product button ---->
      <div class="invite-row">
        <a href="/addproduct" class="btn btn-theme04 pull-left">+ ADD</a>
      
        <h4 class="pull-left" style ="padding-left: 10px"> PRODUCT</h4>
       
        <h4 class="pull-right" style ="padding-left: 10px"> ADVERTS</h4>
        <a href="#" class="btn btn-theme03 pull-right">+ ADD</a>

             
<div class="row mt">
  <div class="col-md-12">
    <div class="content-panel">
      <table class="table table-striped table-advance table-hover">
        <h4><i class="fa fa-angle-right"></i> TRANSACTIONS</h4>
        <hr>
        <thead>
          <tr>
            <th><i class="fa fa-bullhorn"></i>OrderID</th>
            <th class="id"><i class="fa fa-question-circle"></i>Product Name</th>
            <th><i class="fa fa-bookmark"></i>Units</th>
            <th><i class="fa fa-money"></i>cost</th>
            <th><i class=" fa fa-edit"></i>status</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <a href="basic_table.html#">0001</a>
            </td>
            <td class="hidden-phone">samsung s6</td>
            <td>2</td>
            <td>K2000</td>
            <td><span class="label label-warning label-mini">Delayed</span></td>
            <td>
              <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
              <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
              <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
            </td>
          </tr>
          <tr>
            <td>
              <a href="basic_table.html#">0002</a>
            </td>
            <td class="hidden-phone">headsets</td>
            <td>3</td>
            <td>K50</td>
            <td><span class="label label-success label-mini">Completed</span></td>
            <td>
              <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
              <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
              <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
            </td>
          </tr>
          <tr>
            <td>
              <a href="basic_table.html#">0003</a>
            </td>
            <td class="hidden-phone">Btooth speaker</td>
            <td>1</td>
            <td>K80</td>
            <td><span class="label label-primary label-mini">ON HOLD</span></td>
            <td>
              <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
              <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
              <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
            </td>
          </tr>
          <tr>
            <td>
              <a href="basic_table.html#">0004</a>
            </td>
            <td class="hidden-phone">infinix hot 8</td>
            <td>1</td>
            <td>k1,200</td>
            <td><span class="label label-danger label-mini">CANCELLED</span></td>
            <td>
              <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
              <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
              <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
            </td>
          </tr>
         
        </tbody>
      </table>
    </div>

      </div> 
     
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">

            <!--CUSTOM CHART START -->



            
          
            <!--custom chart end-->
            
           
    <!--main content end-->
  
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
