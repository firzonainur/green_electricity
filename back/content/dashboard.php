<div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Dashboard</h4>
                  <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <ul class="quick-links">
                      <li><a href="#">Aktivitas</a></li>
                      <li><a href="#">Pendapatan</a></li>
                      <li><a href="#">Data Sampah</a></li>
                    </ul>
                    <ul class="quick-links ml-auto">
                      <li><a href="#">Pengaturan</a></li>
                      <li><a href="#">Analitik</a></li>
                      <li><a href="#">Jadwal</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="page-header-toolbar">
                  <div class="btn-group toolbar-item" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-left"></i></button>
                    <button type="button" class="btn btn-secondary">03/02/2019 - 20/08/2019</button>
                    <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-right"></i></button>
                  </div>
                  <div class="filter-wrapper">
                    <div class="dropdown toolbar-item">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownsorting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Semua Hari</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownsorting">
                        <a class="dropdown-item" href="#">Hari Terakhir</a>
                        <a class="dropdown-item" href="#">Bulan Terakhir</a>
                        <a class="dropdown-item" href="#">Tahun Terakhit</a>
                      </div>
                    </div>
                    <!-- <a href="#" class="advanced-link toolbar-item">Advanced Options</a> -->
                  </div>
                  <div class="sort-wrapper">
                    <!-- <button type="button" class="btn btn-primary toolbar-item">New</button> -->
                    <div class="dropdown ml-lg-auto toolbar-item">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export Data</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownexport">
                        <a class="dropdown-item" href="#">Export as PDF</a>
                        <a class="dropdown-item" href="#">Export as DOCX</a>
                        <a class="dropdown-item" href="#">Export as CDR</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Page Title Header Ends-->
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 col-md-6">
                        <div class="d-flex">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold">10.05 KG</h3>
                            <h5 class="mb-0 font-weight-medium text-primary">Sampah Terkumpul</h5>
                            <p class="mb-0 text-muted">+1.5kg(+0.50%)</p>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                            <canvas height="50" width="100" id="stats-line-graph-1"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold">Rp 20.500</h3>
                            <h5 class="mb-0 font-weight-medium text-primary">Pendapatan</h5>
                            <p class="mb-0 text-muted">+1200(+0.54%)</p>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                            <canvas height="50" width="100" id="stats-line-graph-2"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold">Rp 200</h3>
                            <h5 class="mb-0 font-weight-medium text-primary">Pengeluaran</h5>
                            <p class="mb-0 text-muted">+1000(+0.76%)</p>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                            <canvas height="50" width="100" id="stats-line-graph-3"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold">100 kwH</h3>
                            <h5 class="mb-0 font-weight-medium text-primary">Pendapatan Listrik</h5>
                            <p class="mb-0 text-muted">+250(+0.54%)</p>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                            <canvas height="50" width="100" id="stats-line-graph-4"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-0">Statistik Pendapatan Listrik Dalam Jangka Waktu Tertentu</h4>
                    <div class="d-flex flex-column flex-lg-row">
                      <p>Berikut Statistik Pengeluaran Sampah </p>
                      <ul class="nav nav-tabs sales-mini-tabs ml-lg-auto mb-4 mb-md-0" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="sales-statistics_switch_1" data-toggle="tab" role="tab" aria-selected="true">1 Hari</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="sales-statistics_switch_2" data-toggle="tab" role="tab" aria-selected="false">5 Hari</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="sales-statistics_switch_3" data-toggle="tab" role="tab" aria-selected="false">1 Bulan</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="sales-statistics_switch_4" data-toggle="tab" role="tab" aria-selected="false">1 Tahun</a>
                        </li>
                      </ul>
                    </div>
                    <div class="d-flex flex-column flex-lg-row">
                      <div class="data-wrapper d-flex mt-2 mt-lg-0">
                        <div class="wrapper pr-5">
                          <h5 class="mb-0">Total Pengeluaran Sampah</h5>
                          <div class="d-flex align-items-center">
                            <h4 class="font-weight-semibold mb-0">15 Kilogram</h4>
                            <!-- <small class="ml-2 text-gray d-none d-lg-block"><b>89.5%</b> of 20,000 Total</small> -->
                          </div>
                        </div>
                        <div class="wrapper">
                          <h5 class="mb-0">Total Pendapatan Listrik</h5>
                          <div class="d-flex align-items-center">
                            <h4 class="font-weight-semibold mb-0">1000 Kwh</h4>
                            <!-- <small class="ml-2 text-gray d-none d-lg-block"><b>10.5%</b> of 20,000 Total</small> -->
                          </div>
                        </div>
                      </div>
                      <div class="ml-lg-auto" id="sales-statistics-legend"></div>
                    </div>
                    <canvas class="mt-5" height="120" id="sales-statistics-overview"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body d-flex flex-column">
                    <div class="wrapper">
                      <h4 class="card-title mb-0">Pendapatan</h4>
                      <p>Statistic dalam tahun 2019</p>
                      <div class="mb-4" id="net-profit-legend"></div>
                    </div>
                    <canvas class="my-auto mx-auto" height="250" id="net-profit"></canvas>
                  </div>
                </div>
              </div>
            </div>
            
           
          </div>