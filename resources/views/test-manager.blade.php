<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Practice - Manage Tests</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
  </head>

  <body class="collapsed-menu with-subleft">

    <!-- =========== START: LEFT PANEL =========== -->
    @include('layouts.lpanel')
    <!-- ============ END: LEFT PANEL ============ -->


    <!-- =========== START: HEAD PANEL =========== -->
    @include('layouts.hpanel')
    <!-- ============ END: HEAD PANEL ============ -->


    <!-- ========== START: RIGHT PANEL =========== -->
    @include('layouts.rpanel')
    <!-- =========== END: RIGHT PANEL ============ -->

    <!-- =========== START: MAIN PANEL =========== -->
    <div class="br-subleft">
        <div class="pd-10">
          <a href="" class="btn btn-teal bd-0 btn-compose"><i class="icon ion-ios-compose-outline"></i> New Test</a>
        </div>

        <h6 class="tx-uppercase tx-10 tx-mont tx-spacing-1 mg-t-10 pd-x-10 tx-white-7">Filter Tests</h6>

        <div class="mg-t-20 pd-x-10 mg-b-40">
            <div class="form-group">
            <input type="text" class="form-control form-control-inverse tx-13" placeholder="Enter Test Title">
            </div><!-- form-group -->
            <div class="form-group">
                <select class="form-control form-control-inverse tx-13 select1" data-placeholder="Course">
                    <option label="Course"></option>
                    <option value="1"> CS 145 </option>
                    <option value="2"> CS 192 </option>
                    <option value="3"> CS 9000 </option>
                </select>
            </div><!-- form-group -->
            <button class="btn btn-info btn-block tx-uppercase tx-10 tx-mont tx-spacing-2 tx-medium">Filter List</button>
        </div>
  
        <h6 class="tx-uppercase tx-10 mg-t-40 pd-x-10 bd-b pd-b-10 tx-roboto tx-white-7">Recently Accessed</h6>
  
        <nav class="nav br-nav-mailbox flex-column">
          <a href="" class="nav-link"><i class="icon ion-ios-folder-outline"></i> Test 1</a>
          <a href="" class="nav-link"><i class="icon ion-ios-folder-outline"></i> Test 2</a>
          <a href="" class="nav-link"><i class="icon ion-ios-folder-outline"></i> Test 3</a>
          <a href="" class="nav-link"><i class="icon ion-ios-folder-outline"></i> Test 4</a>
        </nav>
    </div><!-- br-subleft -->

    <div class="br-contentpanel">
      <div class="br-pageheader pd-y-15 pd-md-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="\">Home</a>
          <a class="breadcrumb-item" href="\">Pages</a>
          <span class="breadcrumb-item active">Test Manager</span>
        </nav>
      </div><!-- br-pageheader -->

      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Test Manager</h4>
        <p class="mg-b-0">Manage test under the courses you are handling</p>
      </div>

      <div class="d-flex align-items-center justify-content-start pd-x-20 pd-sm-x-30 pd-t-25 mg-b-20 mg-sm-b-30">

        <button id="showSubLeft" class="btn btn-secondary mg-r-10 hidden-lg-up"><i class="fa fa-navicon"></i></button>

        <!-- START: DISPLAYED FOR MOBILE ONLY -->
        <div class="dropdown hidden-sm-up">
          <a href="#" class="btn btn-outline-secondary" data-toggle="dropdown"><i class="icon ion-more"></i></a>
          <div class="dropdown-menu pd-10">
            <nav class="nav nav-style-1 flex-column">
              <a href="" class="nav-link">Edit</a>
              <a href="" class="nav-link">Delete</a>
            </nav>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <!-- END: DISPLAYED FOR MOBILE ONLY -->

        <div class="btn-group hidden-xs-down">
            <a href="#" class="btn btn-outline-info">Edit</a>
            <a href="#" class="btn btn-outline-info">Delete</a>
          </div><!-- btn-group -->

        <div class="btn-group mg-l-auto hidden-sm-down">
          <a href="#" class="btn btn-outline-info active">All</a>
          <a href="#" class="btn btn-outline-info">ID</a>
          <a href="#" class="btn btn-outline-info">Date</a>
          <a href="#" class="btn btn-outline-info">Author</a>
        </div><!-- btn-group -->

        <!-- START: DISPLAYED FOR MOBILE ONLY -->
        <div class="dropdown mg-l-auto hidden-md-up">
          <a href="#" class="btn btn-outline-secondary" data-toggle="dropdown">All <i class="fa fa-angle-down mg-l-5"></i></a>
          <div class="dropdown-menu dropdown-menu-right pd-10">
            <nav class="nav nav-style-1 flex-column">
                <a href="#" class="nav-link">All</a>
                <a href="#" class="nav-link">ID</a>
                <a href="#" class="nav-link">Date</a>
                <a href="#" class="nav-link">Author</a>
            </nav>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <!-- END: DISPLAYED FOR MOBILE ONLY -->

      </div><!-- d-flex -->

      <div class="br-pagebody pd-x-20 pd-sm-x-30">
        <div class="card bd-0 shadow-base">
          <table class="table mg-b-0">

            <thead>
              <tr>
                <th class="wd-5p">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </th>
                <th class="wd-5p hidden-xs-down">ID</th>
                <th class="tx-10-force tx-mont tx-medium">Test Name</th>
                <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Date Created</th>
                <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Author</th>
                <th class="wd-5p"></th>
              </tr>
            </thead>
            
            <tbody>

              <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td class="hidden-xs-down">1</td>
                <td>
                  <i class="fa-regular fa-book tx-22 tx-danger lh-0 valign-middle"></i>
                  <span class="pd-l-5">CS 145 - Radio Gaga</span>
                </td>
                <td class="hidden-xs-down">11/24/2022 6:00am</td>
                <td class="hidden-xs-down">Rey Christian Delos Reyes</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="" class="nav-link">Info (add tooltip)</a>
                      <a href="" class="nav-link">Rename</a>
                      <a href="" class="nav-link">Edit</a>
                      <a href="" class="nav-link">Delete</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>

              @for ($i = 0; $i < 5; $i++)
                <tr>
                    <td class="valign-middle">
                    <label class="ckbox mg-b-0">
                        <input type="checkbox"><span></span>
                    </label>
                    </td>
                    <td class="hidden-xs-down">{{ $i+2 }}</td>
                    <td>
                    <!--<i class="icon ion-document-text tx-24 tx-warning lh-0 valign-middle"></i>-->
                    <i class="fa-regular fa-book tx-22 tx-danger lh-0 valign-middle"></i>
                    <span class="pd-l-5">CS 180 - WoW</span>
                    </td>
                    <td class="hidden-xs-down">10/11/2022 7:22am</td>
                    <td class="hidden-xs-down">woof woof</td>
                    <td class="dropdown">
                    <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
                    <div class="dropdown-menu dropdown-menu-right pd-10">
                        <nav class="nav nav-style-1 flex-column">
                            <a href="" class="nav-link">Info (add tooltip)</a>
                            <a href="" class="nav-link">Rename</a>
                            <a href="" class="nav-link">Edit</a>
                            <a href="" class="nav-link">Delete</a>
                        </nav>
                    </div><!-- dropdown-menu -->
                    </td>
                </tr>
            @endfor

            </tbody>
          </table>
        </div>
      </div><!-- br-pagebody -->
      <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Filter Info:</div>
          <div>name, handler</div>
        </div>
      </footer>
    </div><!-- br-contentpanel -->

    <!-- ============ END: MAIN PANEL ============ -->

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../lib/moment/moment.js"></script>
    <script src="../lib/jquery-ui/jquery-ui.js"></script>
    <script src="../lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="../lib/peity/jquery.peity.js"></script>

    <script src="../js/bracket.js"></script>
    <script>
      $(function(){
        'use strict';

        // show only the icons and hide left menu label by default
        $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');

        $(document).on('mouseover', function(e){
          e.stopPropagation();
          if($('body').hasClass('collapsed-menu')) {
            var targ = $(e.target).closest('.br-sideleft').length;
            if(targ) {
              $('body').addClass('expand-menu');

              // show current shown sub menu that was hidden from collapsed
              $('.show-sub + .br-menu-sub').slideDown();

              var menuText = $('.menu-item-label,.menu-item-arrow');
              menuText.removeClass('d-lg-none');
              menuText.removeClass('op-lg-0-force');

            } else {
              $('body').removeClass('expand-menu');

              // hide current shown menu
              $('.show-sub + .br-menu-sub').slideUp();

              var menuText = $('.menu-item-label,.menu-item-arrow');
              menuText.addClass('op-lg-0-force');
              menuText.addClass('d-lg-none');
            }
          }
        });

        // Showing sub left menu
        $('#showSubLeft').on('click', function(){
          if($('body').hasClass('show-subleft')) {
            $('body').removeClass('show-subleft');
          } else {
            $('body').addClass('show-subleft');
          }
        });

      });
    </script>
  </body>
</html>
