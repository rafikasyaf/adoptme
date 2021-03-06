<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Adopt Me Admin</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="index.html">Adopt Me</a>
        <nav class="navbar navbar-static-top">
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
                  <li><a href="{{url('logout')}}"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="adoptme/images/apollo.png" alt="User Image"></div>
            <div class="pull-left info">
              <p>Apollo Shelter</p>
              <p class="designation">Admin</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="{{url('index')}}"><i class="fa fa-envelope"></i><span>Adoption Request</span></a></li>
            <li class="treeview"><a href=#><i class="fa fa-paw"></i><span>Animal</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{url('admin-cat')}}"><img src="admin/images/whitecat.png" class="cats">Cat</a></li>
                <li><a href="{{url('admin-dog')}}"><img src="admin/images/whitedog.png" class="cats">Dog</a></li>
              </ul>
            </li>
           <li><a href="{{url('admin-profile')}}"><i class="fa fa-user"></i><span>Profile</span></a></li>
          </ul>
        </section>
      </aside>
      <!-- END sidenav -->
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h2><i class="fa fa-envelope"></i> Adoption Request</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                   <tr>
                      <th><center>Name</center></th>
                      <th><center>Email</center></th>
                      <th><center>Adoption Request for</center></th>
                      <th><center>Adoption Form</center></th>
                      <th><center>Status</center></th>
                      <th><center>Update Status</center></th>    
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $v)
                    <tr>
                      <td>{{$v->name}}</td>
                      <td>{{$v->email}}</td>
                      <td>{{$v->adoptfor}}</td>
                      <td><a href="{{asset($v->adoptionform)}}">Download Form</a></td>
                      <td>{{$v->status}}</td>  
                      <td>  
                        <form class="form" method="post" action="{{url('index/'.$v->id.'/update')}}" enctype="multipart/form-data">
                      {{csrf_field()}}
                          <div class="form-group">
                            <select class="form-control nav" name="status">
                                <option value="Upload Adoption Form">Upload Adoption Form</option>
                                <option value="Adoption Form Validation">Adoption Form Validation</option>
                                <option value="Interview">Interview</option>
                                <option value="Trial">Trial</option>
                                <option value="Canceled">Canceled</option>
                                <option value="Adoption Success">Adoption Success</option>
                                <option value="Adoption Failed">Adoption Failed</option>
                            </select>
                            <button type="submit">Save</button>
                          </div>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- Javascripts-->
    <script src="{{ asset('admin/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin/js/plugins/pace.min.js')}}"></script>
    <script src="{{ asset('admin/js/main.js')}}"></script>
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{ asset('admin/js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>
</html>