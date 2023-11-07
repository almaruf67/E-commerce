@extends('Admin.layout.app')
@section('title','Panel')
@section('content')
<main class="page-content">
      <!--breadcrumb-->
      <h6 class="mb-0 text-uppercase">Dashboard</h6>
      <hr>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-4">
          <div class="col">
              <div class="card radius-10 bg-primary">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div class="">
                              <p class="mb-1 text-white">Today Orders</p>
                              <h4 class="mb-0 text-white">248</h4>
                          </div>
                          <div class="ms-auto widget-icon bg-white-1 text-white">
                              <i class="bi bi-bag-check-fill"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card radius-10 bg-primary">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div class="">
                              <p class="mb-1 text-white">Today Earning</p>
                              <h4 class="mb-0 text-white">$1,245</h4>
                          </div>
                          <div class="ms-auto widget-icon bg-white-1 text-white">
                              <i class="bi bi-currency-dollar"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card radius-10 bg-primary">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div class="">
                              <p class="mb-1 text-white">This Month Orders</p>
                              <h4 class="mb-0 text-white">248</h4>
                          </div>
                          <div class="ms-auto widget-icon bg-white-1 text-white">
                              <i class="bi bi-bag-check-fill"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card radius-10 bg-primary">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div class="">
                              <p class="mb-1 text-white">This Month Earning</p>
                              <h4 class="mb-0 text-white">$1,245</h4>
                          </div>
                          <div class="ms-auto widget-icon bg-white-1 text-white">
                              <i class="bi bi-currency-dollar"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card radius-10 bg-success">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div class="">
                              <p class="mb-1 text-white">This Year Orders</p>
                              <h4 class="mb-0 text-white">248</h4>
                          </div>
                          <div class="ms-auto widget-icon bg-white-1 text-white">
                              <i class="bi bi-bag-check-fill"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card radius-10 bg-success">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div class="">
                              <p class="mb-1 text-white">This Year Earning</p>
                              <h4 class="mb-0 text-white">$1,245</h4>
                          </div>
                          <div class="ms-auto widget-icon bg-white-1 text-white">
                              <i class="bi bi-currency-dollar"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card radius-10 bg-orange">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div class="">
                              <p class="mb-1 text-white">Total Users</p>
                              <h4 class="mb-0 text-white">214</h4>
                          </div>
                          <div class="ms-auto widget-icon bg-white-1 text-white">
                              <i class="bi bi-person-plus-fill"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card radius-10 bg-orange">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div class="">
                              <p class="mb-1 text-white">Total Admins</p>
                              <h4 class="mb-0 text-white">214</h4>
                          </div>
                          <div class="ms-auto widget-icon bg-white-1 text-white">
                              <i class="bi bi-person-badge-fill"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card radius-10 bg-purple">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div class="">
                              <p class="mb-1 text-white">Total Product</p>
                              <h4 class="mb-0 text-white">542</h4>
                          </div>
                          <div class="ms-auto fs-2 text-white">
                              <i class="bi bi-shop-window"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card radius-10 bg-dark">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div class="">
                              <p class="mb-1 text-white">Total Catageries</p>
                              <h4 class="mb-0 text-white">$875</h4>
                          </div>
                          <div class="ms-auto fs-2 text-white">
                              <i class="bi bi-card-checklist"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card radius-10 bg-secondary">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div class="">
                              <p class="mb-1 text-white">Total Post</p>
                              <h4 class="mb-0 text-white">59</h4>
                          </div>
                          <div class="ms-auto fs-2 text-white">
                              <i class="bi bi-pencil"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card radius-10 bg-info">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div class="">
                              <p class="mb-1 text-white">Notifications</p>
                              <h4 class="mb-0 text-white">8</h4>
                          </div>
                          <div class="ms-auto fs-2 text-white">
                              <i class="bi bi-bell"></i>
                          </div>
                      </div>
                      
                  </div>
              </div>
          </div>
         
      </div><!--end row-->

  </main>
  <!--end page main-->
      
@endsection