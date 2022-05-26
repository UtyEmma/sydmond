@extends('admin.layouts.app')

@section('page')
<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between flex-wrap">
        <div class="d-flex align-items-end flex-wrap">
          <div class="mr-md-3 mr-xl-5">
            <h2>Welcome back,</h2>
            <p class="mb-md-0">Your analytics dashboard template.</p>
          </div>
          <div class="d-flex">
            <i class="mdi mdi-home text-muted hover-cursor"></i>
            <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
            <p class="text-primary mb-0 hover-cursor">Analytics</p>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-end flex-wrap">
          <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
            <i class="mdi mdi-download text-muted"></i>
          </button>
          <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
            <i class="mdi mdi-clock-outline text-muted"></i>
          </button>
          <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
            <i class="mdi mdi-plus text-muted"></i>
          </button>
          <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
        </div>
      </div>
    </div>
</div>
  <div class="row" id="proBanner">
    <div class="col-md-12 grid-margin">
      <div class="card bg-gradient-primary border-0">
        <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
          <p class="mb-0 text-white font-weight-medium">Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more!                  </p>
          <div class="d-flex">
            <a href="https://www.bootstrapdash.com/product/majestic-admin-pro?utm_source=organic&utm_medium=banner&utm_campaign=free-preview" target="_blank" class="btn btn-outline-light mr-2 bg-gradient-danger border-0">Check Pro Version</a>
            <button id="bannerClose" class="btn border-0 p-0 ml-auto">
              <i class="mdi mdi-close text-white"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body dashboard-tabs p-0">
          <ul class="nav nav-tabs px-4" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="purchases-tab" data-toggle="tab" href="#purchases" role="tab" aria-controls="purchases" aria-selected="false">Earnings</a>
            </li>
          </ul>
          <div class="tab-content py-0 px-0">
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
              <div class="d-flex flex-wrap justify-content-xl-between">
                <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                  <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                  <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted"></small>
                    <div class="dropdown">
                        <h5>All Time Stats</h5>
                    </div>
                  </div>
                </div>
                <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                  <i class="mdi mdi-account mr-3 icon-lg text-danger"></i>
                  <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Users</small>
                    <h5 class="mr-2 mb-0">{{$stats->no_users}}</h5>
                  </div>
                </div>
                <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                  <i class="mdi mdi-currency-usd mr-3 icon-lg text-success"></i>
                  <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Revenue</small>
                    <h5 class="mr-2 mb-0">{{number_format($stats->total_transactions)}}</h5>
                  </div>
                </div>
                <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                  <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                  <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Courses</small>
                    <h5 class="mr-2 mb-0">{{$stats->no_courses}}</h5>
                  </div>
                </div>
                <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                  <i class="mdi mdi-upload mr-3 icon-lg text-danger"></i>
                  <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Batches</small>
                    <h5 class="mr-2 mb-0">{{$stats->no_batches}}</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
              <div class="d-flex flex-wrap justify-content-xl-between">
                <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                  <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                  <div class="d-flex flex-column justify-content-around">
                      <h5 class="mr-2 mb-0">User Data</h5>
                  </div>
                </div>
                <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                  <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                  <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Total Users</small>
                      <h5 class="mr-2 mb-0">{{$stats->no_users}}</h5>
                  </div>
                </div>
                <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                  <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                  <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Mentors</small>
                    <h5 class="mr-2 mb-0">{{$stats->no_mentors}}</h5>
                  </div>
                </div>
                <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                  <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                  <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Students</small>
                    <h5 class="mr-2 mb-0">{{$stats->no_students}}</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
              <div class="d-flex flex-wrap justify-content-xl-between">
                <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                  <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                  <div class="d-flex flex-column justify-content-around">
                    <h5 class="mr-2 mb-0">App Earnings</h5>
                  </div>
                </div>
                <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                  <i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i>
                  <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Total Revenue</small>
                    <h5 class="mr-2 mb-0">{{$stats->total_transactions}}</h5>
                  </div>
                </div>
                <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                  <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                  <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Total Deposits</small>
                    <h5 class="mr-2 mb-0">{{$stats->total_deposits}}</h5>
                  </div>
                </div>
                <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                  <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                  <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Total Withdrawals</small>
                    <h5 class="mr-2 mb-0">{{$stats->total_withdrawals}}</h5>
                  </div>
                </div>
                <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                  <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                  <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Flagged</small>
                    <h5 class="mr-2 mb-0">3497843</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
      <div class="col-md-6 stretch-card mb-4">
        <div class="card">
            <div class="card-body">
              <h4 class="card-title">Mentor Requests</h4>
              <p class="card-description">
                <span class="badge badge-light font-weight-bolder">{{count($mentor_requests)}}</span> {{Str::plural('request', count($mentor_requests))}}
              </p>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>KYC Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @if(count($mentor_requests) > 0)
                        @foreach ($mentor_requests as $mentor)
                            <tr>
                                <td>
                                    <a href="/users/{{$mentor->unique_id}}">{{$mentor->firstname}} {{$mentor->lastname}}</a>
                                </td>
                                <td><label class="badge badge-warning">{{$mentor->kyc_status}}</label></td>
                                <td colspan="2">
                                    <a href="/users/{{$mentor->unique_id}}" class="btn btn-outline-warning">View Profile</a>
                                    <a href="/users/{{$mentor->unique_id}}/actions/approve?action=true" class="btn btn-outline-primary">Approve</a>
                                </td>
                            </tr>
                        @endforeach
                      @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
      <div class="col-md-6 stretch-card mb-4">
        <div class="card">
            <div class="card-body">
              <h4 class="card-title">Verification Requests</h4>
              <p class="card-description">
                <span class="badge badge-light font-weight-bolder">{{count($verification_requests)}}</span> {{Str::plural('request', count($verification_requests))}}
              </p>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Verification Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                        @foreach ($verification_requests as $mentor)
                            <tr>
                                <td>
                                    <a href="/users/{{$mentor->unique_id}}">{{$mentor->firstname}} {{$mentor->lastname}}</a>
                                </td>
                                <td><label class="badge badge-warning">{{$mentor->is_verified}}</label></td>
                                <td colspan="2">
                                    <a href="/users/{{$mentor->unique_id}}" class="btn btn-outline-warning">View Profile</a>
                                    <a href="/users/{{$mentor->unique_id}}/actions/verify?action=true" class="btn btn-outline-primary">Verify</a>
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
  <div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title">Recent Purchases</p>
          <div class="table-responsive">
            <table id="recent-purchases-listing" class="table">
              <thead>
                <tr>
                    <th>Name</th>
                    <th>Status report</th>
                    <th>Office</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>Gross amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>Jeremy Ortega</td>
                    <td>Levelled up</td>
                    <td>Catalinaborough</td>
                    <td>$790</td>
                    <td>06 Jan 2018</td>
                    <td>$2274253</td>
                </tr>
                <tr>
                    <td>Alvin Fisher</td>
                    <td>Ui design completed</td>
                    <td>East Mayra</td>
                    <td>$23230</td>
                    <td>18 Jul 2018</td>
                    <td>$83127</td>
                </tr>
                <tr>
                    <td>Emily Cunningham</td>
                    <td>support</td>
                    <td>Makennaton</td>
                    <td>$939</td>
                    <td>16 Jul 2018</td>
                    <td>$29177</td>
                </tr>
                <tr>
                    <td>Minnie Farmer</td>
                    <td>support</td>
                    <td>Agustinaborough</td>
                    <td>$30</td>
                    <td>30 Apr 2018</td>
                    <td>$44617</td>
                </tr>
                <tr>
                    <td>Betty Hunt</td>
                    <td>Ui design not completed</td>
                    <td>Lake Sandrafort</td>
                    <td>$571</td>
                    <td>25 Jun 2018</td>
                    <td>$78952</td>
                </tr>
                <tr>
                    <td>Myrtie Lambert</td>
                    <td>Ui design completed</td>
                    <td>Cassinbury</td>
                    <td>$36</td>
                    <td>05 Nov 2018</td>
                    <td>$36422</td>
                </tr>
                <tr>
                    <td>Jacob Kennedy</td>
                    <td>New project</td>
                    <td>Cletaborough</td>
                    <td>$314</td>
                    <td>12 Jul 2018</td>
                    <td>$34167</td>
                </tr>
                <tr>
                    <td>Ernest Wade</td>
                    <td>Levelled up</td>
                    <td>West Fidelmouth</td>
                    <td>$484</td>
                    <td>08 Sep 2018</td>
                    <td>$50862</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
