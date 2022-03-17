<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Modal Templates</title>

  <!-- vendor css -->
  <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
  <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link href="../lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
  <link href="../lib/highlightjs/github.css" rel="stylesheet">

  <!-- Bracket CSS -->
  <link rel="stylesheet" href="../css/bracket.css">
</head>

<body>

  <!-- ========== START: LEFT PANEL ============ -->
  @include('layouts.lpanel')
  <!-- ============ END: LEFT PANEL ============ -->


  <!-- =========== START: HEAD PANEL =========== -->
  @include('layouts.hpanel')
  <!-- ============ END: HEAD PANEL ============ -->


  <!-- ========== START: RIGHT PANEL =========== -->
  @include('layouts.rpanel')
  <!-- =========== END: RIGHT PANEL ============ -->

  <!-- =========== START: MAIN PANEL =========== -->
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="/">Home</a>
        <a class="breadcrumb-item" href="/">Pages</a>
        <span class="breadcrumb-item active">Modal Template</span>
      </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
      <h4 class="tx-gray-800 mg-b-5">Modal</h4>
      <p class="mg-b-0">Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>
    </div>

    <div class="br-pagebody">
      <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Basic Modal</h6>
        <p class="mg-b-25 mg-lg-b-50">Below is the static example of the basic modal.</p>

        <div class="pd-y-50 bg-gray-700">
          <!-- this modal is static modal for presentation purpose. -->
          <!-- class .d-block annd .pos-relative in .modal is for demo only -->
          <div class="modal d-block pos-static">
            <div class="modal-dialog" role="document">
              <div class="modal-content bd-0">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-25">
                  <h4 class="lh-4 mg-b-20 tx-inverse">Why We Use Electoral College, Not Popular Vote</h4>
                  <p class="mg-b-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Save changes</button>
                  <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Close</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->
        </div><!-- pd-y-50 -->
        <div class="pd-y-30 tx-center bg-dark">
          <a href="" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemo1">View Live Demo</a>
        </div><!-- pd-y-30 -->

        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-t-80 mg-b-10">Small Modal</h6>
        <p class="mg-b-25 mg-lg-b-50">Below is the static example of small modal</p>

        <div class="pd-y-50 bg-gray-700">
          <!-- this modal is static modal for presentation purpose. -->
          <!-- class .d-block annd .pos-relative in .modal is for demo only -->
          <div class="modal d-block pos-static">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content bd-0">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Notice</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
                  <p class="mg-b-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                </div>
                <div class="modal-footer justify-content-center">
                  <button type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Save changes</button>
                  <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Close</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->
        </div><!-- pd-y-50 bg-gray -->
        <div class="pd-y-30 tx-center bg-dark">
          <a href="" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemo2">View Live Demo</a>
        </div><!-- pd-y-30 -->

        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-t-80 mg-b-10">Large Modal</h6>
        <p class="mg-b-25 mg-lg-b-50">Below is the static example of large modal</p>

        <div class="pd-y-50 bg-gray-700">
          <!-- this modal is static modal for presentation purpose. -->
          <!-- class .d-block annd .pos-relative in .modal is for demo only -->
          <div class="modal d-block pos-static">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-25">
                  <h4 class="lh-3 mg-b-20"><a href="" class="tx-inverse hover-primary">Why We Use Electoral College, Not Popular Vote</a></h4>
                  <p class="mg-b-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Save changes</button>
                  <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Close</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->
        </div><!-- pd-y-50 bg-gray -->
        <div class="pd-y-30 tx-center bg-dark">
          <a href="" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemo3">View Live Demo</a>
        </div><!-- pd-y-30 -->

        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-t-80 mg-b-10">Modal Alert Messages</h6>
        <p class="mg-b-25 mg-lg-b-50">Below is the static example of modal alert messages.</p>


        <div class="pd-y-50 bg-gray-700">
          <div class="modal d-block pos-static">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
                  <h4 class="tx-success mg-b-20">Congratulations!</h4>
                  <p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                  <button type="button" class="btn btn-success tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20">
                    Continue</button>
                  </div><!-- modal-body -->
                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
            </div><!-- modal -->
          </div><!-- pd-y-50 -->
          <div class="pd-y-30 tx-center bg-dark">
            <a href="" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemo4">View Live Demo</a>
          </div><!-- pd-y-30 -->

          <div class="pd-y-50 bg-gray-700 mg-t-30">
            <div class="modal d-block pos-static">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body tx-center pd-y-20 pd-x-20">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="icon icon ion-ios-close-outline tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                    <h4 class="tx-danger mg-b-20">Error: Cannot process your entry!</h4>
                    <p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                    <button type="button" class="btn btn-danger tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" aria-label="Close">
                      Continue</button>
                    </div><!-- modal-body -->
                  </div><!-- modal-content -->
                </div><!-- modal-dialog -->
              </div><!-- modal -->
            </div><!-- pd-y-50 -->
            <div class="pd-y-30 tx-center bg-dark">
              <a href="" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemo5">View Live Demo</a>
            </div><!-- pd-y-30 -->

            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-t-80 mg-b-10">Using Grid Modal</h6>
            <p class="mg-b-25 mg-lg-b-50">Below is the static example of modal that uses grid</p>

            <div class="pd-y-50 bg-gray-700 mg-t-20">
              <div class="modal d-block pos-static">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content bd-0 rounded-0">
                    <div class="modal-body pd-0">
                      <div class="row no-gutters">
                        <div class="col-lg-6 bg-primary">
                          <div class="pd-40">
                            <h4 class="tx-white mg-b-20"><span>[</span> bracket + <span>]</span></h4>
                            <p class="tx-white op-7 mg-b-60">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <p class="tx-white tx-13">
                              <span class="tx-uppercase tx-medium d-block mg-b-15">Our Address:</span>
                              <span class="op-7">Ayala Center, Cebu Business Park, Cebu City, Cebu, Philippines 6000</span></p>
                            </div>
                          </div><!-- col-6 -->
                          <div class="col-lg-6">
                            <div class="pd-y-30 pd-xl-x-30">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <div class="pd-x-30 pd-y-10">
                                <h3 class="tx-inverse  mg-b-5">Welcome back!</h3>
                                <p>Sign in to your account to continue</p>
                                <br>
                                <div class="form-group">
                                  <input type="email" name="email" class="form-control pd-y-12" placeholder="Enter your email">
                                </div><!-- form-group -->
                                <div class="form-group mg-b-20">
                                  <input type="email" name="password" class="form-control pd-y-12" placeholder="Enter your password">
                                  <a href="" class="tx-12 d-block mg-t-10">Forgot password?</a>
                                </div><!-- form-group -->

                                <button class="btn btn-primary pd-y-12 btn-block">Sign In</button>

                                <div class="mg-t-30 mg-b-20 tx-12">Don't have an account yet? <a href="">Sign Up</a></div>
                              </div>
                            </div><!-- pd-20 -->
                          </div><!-- col-6 -->
                        </div><!-- row -->

                      </div><!-- modal-body -->
                    </div><!-- modal-content -->
                  </div><!-- modal-dialog -->
                </div><!-- modal -->
              </div><!-- pd-y-50 -->
              <div class="pd-y-30 tx-center bg-dark">
                <a href="" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemo6">View Live Demo</a>
              </div><!-- pd-y-30 -->

              <div class="pd-y-50 bg-gray-700 mg-t-20">
                <div class="modal d-block pos-static">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content bd-0">
                      <div class="modal-body pd-0">
                        <div class="row flex-row-reverse no-gutters">
                          <div class="col-lg-6">
                            <button type="button" class="close mg-t-15 mg-r-20" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <img src="http://via.placeholder.com/912x912" class="img-fluid rounded-right" alt="">
                          </div><!-- col-6 -->
                          <div class="col-lg-6 rounded-left">
                            <div class="pd-40">
                              <h4 class="mg-b-5 tx-inverse lh-2 tx-uppercase">Subscribe to our</h4>
                              <h2 class="tx-sm-56 tx-semibold tx-uppercase tx-inverse mg-b-15">Newsletter</h2>
                              <p class="mg-b-20">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <p class="mg-b-20"><a href="" class="btn btn-outline-info bd-2 pd-y-12 pd-x-25 tx-uppercase tx-12 tx-semibold tx-spacing-1">Subscribe</a></p>
                              <p class="tx-12 mg-b-0">
                                <span class="tx-uppercase tx-12 tx-bold d-block mg-b-5">Our Address:</span>
                                <span>Ayala Center, Cebu Business Park, Cebu City, Cebu, Philippines 6000</span></p>
                              </div>
                            </div><!-- col-6 -->
                          </div><!-- row -->

                        </div><!-- modal-body -->
                      </div><!-- modal-content -->
                    </div><!-- modal-dialog -->
                  </div><!-- modal -->
                </div><!-- pd-y-50 -->
                <div class="pd-y-30 tx-center bg-dark">
                  <a href="" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemo7">View Live Demo</a>
                </div><!-- pd-y-30 -->

              </div><!-- br-section-wrapper -->
            </div><!-- br-pagebody -->
          </div><!-- br-mainpanel -->
          <!-- ============ END: HEAD PANEL ============ -->

          <!-- BASIC MODAL -->
          <div id="modaldemo1" class="modal fade">
            <div class="modal-dialog modal-dialog-vertical-center" role="document">
              <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-25">
                  <h4 class="lh-3 mg-b-20"><a href="" class="tx-inverse hover-primary">Why We Use Electoral College, Not Popular Vote</a></h4>
                  <p class="mg-b-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Save changes</button>
                  <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->

          <!-- SMALL MODAL -->
          <div id="modaldemo2" class="modal fade">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Notice</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
                  <p class="mg-b-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                </div>
                <div class="modal-footer justify-content-center">
                  <button type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Save changes</button>
                  <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->

          <!-- LARGE MODAL -->
          <div id="modaldemo3" class="modal fade">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
                  <h4 class=" lh-3 mg-b-20"><a href="" class="tx-inverse hover-primary">Why We Use Electoral College, Not Popular Vote</a></h4>
                  <p class="mg-b-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary tx-size-xs">Save changes</button>
                  <button type="button" class="btn btn-secondary tx-size-xs" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->

          <!-- MODAL ALERT MESSAGE -->
          <div id="modaldemo4" class="modal fade">
            <div class="modal-dialog" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
                  <h4 class="tx-success tx-semibold mg-b-20">Congratulations!</h4>
                  <p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                  <button type="button" class="btn btn-success tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close">
                    Continue</button>
                  </div><!-- modal-body -->
                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
            </div><!-- modal -->

            <div id="modaldemo5" class="modal fade">
              <div class="modal-dialog" role="document">
                <div class="modal-content tx-size-sm">
                  <div class="modal-body tx-center pd-y-20 pd-x-20">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="icon icon ion-ios-close-outline tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                    <h4 class="tx-danger  tx-semibold mg-b-20">Error: Cannot process your entry!</h4>
                    <p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                    <button type="button" class="btn btn-danger tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close">
                      Continue</button>
                    </div><!-- modal-body -->
                  </div><!-- modal-content -->
                </div><!-- modal-dialog -->
              </div><!-- modal -->

              <!-- MODAL GRID -->
              <div id="modaldemo6" class="modal fade">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
                    <div class="modal-body pd-0">
                      <div class="row no-gutters">
                        <div class="col-lg-6 bg-primary">
                          <div class="pd-40">
                            <h4 class="tx-white mg-b-20"><span>[</span> title + <span>]</span></h4>
                            <p class="tx-white op-7 mg-b-60">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <p class="tx-white tx-13">
                              <span class="tx-uppercase tx-medium d-block mg-b-15">Our Address:</span>
                              <span class="op-7">Ayala Center, Cebu Business Park, Cebu City, Cebu, Philippines 6000</span></p>
                            </div>
                          </div><!-- col-6 -->
                          <div class="col-lg-6 bg-white">
                            <div class="pd-30">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <div class="pd-x-30 pd-y-10">
                                <h3 class="tx-inverse  mg-b-5">Welcome back!</h3>
                                <p>Sign in to your account to continue</p>
                                <br>
                                <div class="form-group">
                                  <input type="email" name="email" class="form-control pd-y-12" placeholder="Enter your email">
                                </div><!-- form-group -->
                                <div class="form-group mg-b-20">
                                  <input type="email" name="password" class="form-control pd-y-12" placeholder="Enter your password">
                                  <a href="" class="tx-12 d-block mg-t-10">Forgot password?</a>
                                </div><!-- form-group -->

                                <button class="btn btn-primary pd-y-12 btn-block">Sign In</button>

                                <div class="mg-t-30 mg-b-20 tx-12">Don't have an account yet? <a href="">Sign Up</a></div>
                              </div>
                            </div><!-- pd-20 -->
                          </div><!-- col-6 -->
                        </div><!-- row -->

                      </div><!-- modal-body -->
                    </div><!-- modal-content -->
                  </div><!-- modal-dialog -->
                </div><!-- modal -->

                <div id="modaldemo7" class="modal fade animated fadeInLeftBig">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content bd-0">
                      <div class="modal-body pd-0">
                        <div class="row flex-row-reverse no-gutters">
                          <div class="col-lg-6">
                            <button type="button" class="close mg-t-15 mg-r-20" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <img src="http://via.placeholder.com/912x912" class="img-fluid rounded-right" alt="">
                          </div><!-- col-6 -->
                          <div class="col-lg-6 rounded-left">
                            <div class="pd-40">
                              <h4 class="mg-b-5 tx-inverse lh-2 tx-uppercase">Subscribe to our</h4>
                              <h2 class="tx-sm-56 tx-semibold tx-uppercase tx-inverse mg-b-15">Newsletter</h2>
                              <p class="mg-b-20">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <p class="mg-b-20"><a href="" class="btn btn-outline-info bd-2 pd-y-12 pd-x-25 tx-uppercase tx-12 tx-semibold tx-spacing-1">Subscribe</a></p>
                              <p class="tx-12 mg-b-0">
                                <span class="tx-uppercase tx-12 tx-bold d-block mg-b-5">Our Address:</span>
                                <span>Ayala Center, Cebu Business Park, Cebu City, Cebu, Philippines 6000</span></p>
                              </div>
                            </div><!-- col-6 -->
                          </div><!-- row -->

                        </div><!-- modal-body -->
                      </div><!-- modal-content -->
                    </div><!-- modal-dialog -->
                  </div><!-- modal -->

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../lib/moment/moment.js"></script>
    <script src="../lib/jquery-ui/jquery-ui.js"></script>
    <script src="../lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="../lib/peity/jquery.peity.js"></script>
    <script src="../lib/highlightjs/highlight.pack.js"></script>

    <script src="../js/bracket.js"></script>
    <script>
      $(function(){

        // showing modal with effect
        $('.modal-effect').on('click', function(){
          var effect = $(this).attr('data-effect');
          $('#modaldemo8').addClass(effect, function(){
            $('#modaldemo8').modal('show');
          });
          return false;
        });

        // hide modal with effect
        $('#modaldemo8').on('hidden.bs.modal', function (e) {
          $(this).removeClass (function (index, className) {
              return (className.match (/(^|\s)effect-\S+/g) || []).join(' ');
          });
        });
      });
    </script>

  </body>
</html>
