@include('layouts.master')
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
            <h5 class="centered">Sam Soffes</h5>
            <li class="mt">
              <a class="active" href="index.html">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu" href="form.html">
              <a href="form.html">
                <i class="fa fa-desktop"></i>
                <span>Contact Admin</span>
                </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
              <i class="fa fa-piggy-bank"></i>
                <span>My Account</span>
                </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-cogs"></i>
                <span>Components</span>
                </a>
              <ul class="sub">
                <li><a href="grids.html">Grids</a></li>
                <li><a href="calendar.html">Calendar</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="todo_list.html">Todo List</a></li>
                <li><a href="dropzone.html">Dropzone File Upload</a></li>
                <li><a href="inline_editor.html">Inline Editor</a></li>
                <li><a href="file_upload.html">Multiple File Upload</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-money"></i>
                <span>Orders</span>
                </a>
              <ul class="sub">
                <li><a href=""></a></li>
                <li><a href="advanced_form_components.html">Sales Transactions</a></li>
                <li><a href="form_validation.html">Form Validation</a></li>
                <li><a href="contactform.html">Contact Form</a></li>
              </ul>
            </li>
            <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-product-hunt" aria-hidden="true"></i>
              <span>Products</span>
              </a>
            <ul class="sub">
              <li><a href="basic_table.html">Add Product</a></li>
              <li><a href="responsive_table.html">My Product List</a></li>
              <li><a href="advanced_table.html"></a></li>
            </ul>
          </li>
          <li>



            <li>
              <a href="inbox.html">
                <i class="fa fa-envelope"></i>
                <span>Mail </span>
                <span class="label label-theme pull-right mail-info">2</span>
                </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class=" fa fa-bar-chart-o"></i>
                <span>Charts</span>
                </a>
              <ul class="sub">
                <li><a href="morris.html">Morris</a></li>
                <li><a href="chartjs.html">Chartjs</a></li>
                <li><a href="flot_chart.html">Flot Charts</a></li>
                <li><a href="xchart.html">xChart</a></li>
              </ul>
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
            <li>
              <a href="google_maps.html">
                <i class="fa fa-map-marker"></i>
                <span>Google Maps </span>
                </a>
            </li>
          </ul>
          <!-- sidebar menu end-->
        </div>
      </aside>
      <!--sidebar end-->




<section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> VENDORS</h3>
      <div class="row">
        <div class="col-md-12">
          <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i>Categories</h4>
            <hr>
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- /col-md-12 -->
        
             <!-- DIRECT MESSAGE PANEL -->
             <div class="col-md-8 mb">
              <div class="message-p pn">
                <div class="message-header">
                  <h5>DIRECT MESSAGE</h5>
                </div>
                <div class="row">
                  <div class="col-md-3 centered hidden-sm hidden-xs">
                    <img src="img/ui-danro.jpg" class="img-circle" width="65">
                  </div>
                  <div class="col-md-9">
                    <p>
                      <name>Innocent</name>
                      sent you a message.
                    </p>
                    <p class="small">3 hours ago</p>
                    <p class="message">do you still have more phones.</p>
                    <form class="form-inline" role="form">
                      <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputText" placeholder="Reply Dan">
                      </div>
                      <button type="submit" class="btn btn-default">Send</button>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /Message Panel-->
              
            </table>
          </div>
        </div>
        <!-- /col-md-12 -->
      </div>
      <!-- row -->
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
          
          <!-- /content-panel -->
        </div>
        <!-- /col-md-12 -->
      </div>
      <!-- /row -->
    </section>
  </section>



@include('layouts.footer')
