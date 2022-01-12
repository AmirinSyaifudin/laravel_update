<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                    <li><a href="{{ route('admin.dashboard.index') }}"><i class="fa fa-user"></i> <span>DASHBOARD</span></a></li>
                    <li><a href="{{ route('admin.provinsi.index') }}"><i class="fa fa-user"></i> <span>PROVINSI</span></a></li>
                    <li><a href="{{ route('admin.kota.index') }}"><i class="fa fa-user"></i> <span>KOTA</span></a></li>
                    <li><a href="{{ route('admin.kabupaten.index') }}"><i class="fa fa-user"></i> <span>KABUPATEN</span></a></li>
                    
                    <li><a href="{{ route('admin.karyawan.index') }}"><i class="fa fa-user"></i> <span>KARYAWAN</span></a></li>
                    <li><a href="{{ route('admin.cuti.index') }}"><i class="fa fa-user"></i> <span>CUTI</span></a></li>
                    {{-- <li><a href="{{ route('admin.tablekaryawan.index') }}"><i class="fa fa-user"></i> <span>TABLE KARYAWAN</span></a></li>
                    <li><a href="{{ route('admin.tablecuti.index') }}"><i class="fa fa-user"></i> <span>TABLE CUTI</span></a></li> --}}
                     <li class="treeview">
                        <a href="#">
                          <i class="fa fa-pie-chart"></i>
                          <span>LAPORAN</span>
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{ route('admin.laporan.tigakrw') }}"><i class="fa fa-circle-o"></i>3 KARYAWAN BERGABUNG</a></li>
                          <li><a href="{{ route('admin.laporan.cutikrw') }}"><i class="fa fa-circle-o"></i>CUTI KARYAWAN</a></li>
                          <li><a href="{{ route('admin.laporan.cutilebihkrw') }}"><i class="fa fa-circle-o"></i>CUTI LEBIH 1 KALI</a></li>
                          <li><a href="{{ route('admin.laporan.sisacuti') }}"><i class="fa fa-circle-o"></i>SISA CUTI KARYAWAN</a></li>
                          <li><a href="{{ route('admin.laporan.pengajuancuti') }}"><i class="fa fa-circle-o"></i>PENGAJUAN CUTI</a></li>
                          <li><a href="/"><i class="fa fa-circle-o"></i>HITUNG GAJI</a></li>
                          <li><a href="/"><i class="fa fa-circle-o"></i>JABATAN / POSISI</a></li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                          <i class="fa fa-pie-chart"></i>
                          <span>PELANGI INDO DATA</span>
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{ route('admin.ganjilgenap.index') }}"><i class="fa fa-circle-o"></i>GANJIL GENAP</a></li>
                          <li><a href="{{ route('admin.parkir.index') }}"><i class="fa fa-circle-o"></i>PARKIR</a></li>
                          <li><a href="{{ route('admin.bis.index') }}"><i class="fa fa-circle-o"></i>BIS</a></li>
                          <li><a href="{{ route('admin.terbilang.index') }}"><i class="fa fa-circle-o"></i>FUNGSI TERBILANG</a></li>
                          <li><a href="{{ route('admin.jarakwaktu.index') }}"><i class="fa fa-circle-o"></i>JARAK & WAKTU</a></li>
                          <li><a href="{{ route('admin.jqform.index') }}"><i class="fa fa-circle-o"></i>JQ FORM</a></li>
                        </ul>
                    </li>


                    <li class="treeview" style="background: red; height: auto;">
                      <a href="#">
                        <i class="fa fa-share"></i> <span>Soal Hitungan</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu" style="display: none;">
                        {{-- <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li> --}}
                        <li class="treeview" style="background: red; height: auto;">
                          <a href="#"><i class="fa fa-circle-o"></i> KALKULATOR
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                          </a>
                          <ul class="treeview-menu" style="display: none;">
                            <li><a href="{{ route('admin.penjumlahan.index') }}"><i class="fa fa-circle-o"></i> PENJUMLAHAN </a></li>
                            <li><a href="{{ route('admin.pengurangan.index') }}"><i class="fa fa-circle-o"></i> PENGURANGAN </a></li>
                            <li><a href="{{ route('admin.perkalian.index') }}"><i class="fa fa-circle-o"></i> PERKALIAN </a></li>
                            <li><a href="{{ route('admin.pembagian.index') }}"><i class="fa fa-circle-o"></i> PEMBAGIAN </a></li>
                            <li class="treeview" style="background: red; height: auto;">
                              <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                                </span>
                              </a>
                              <ul class="treeview-menu" style="display: none;">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="treeview" style="background: red; height: auto;">
                          <a href="#"><i class="fa fa-circle-o"></i> KONDISI HITUNGAN
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                          </a>
                          <ul class="treeview-menu" style="display: none;">
                            <li><a href="{{ route('admin.tahunkabisat.index') }}"><i class="fa fa-circle-o"></i> TAHUN KABISAT </a></li>
                            <li><a href="{{ route('admin.jamkerja.index') }}"><i class="fa fa-circle-o"></i> JAM KERJA</a></li>
                            <li><a href="{{ route('admin.hitungbb.index') }}"><i class="fa fa-circle-o"></i>HITUNG BB % TB </a></li>
                            <li><a href="{{ route('admin.usia.index') }}"><i class="fa fa-circle-o"></i> USIAN </a></li>
                            <li><a href="{{ route('admin.goljamkerja.index') }}"><i class="fa fa-circle-o"></i> GOL & JAM KERJA </a></li>
                            <li><a href="{{ route('admin.hari.index') }}"><i class="fa fa-circle-o"></i> HARI  </a></li>
                            <li><a href="{{ route('admin.zodiak.index') }}"><i class="fa fa-circle-o"></i> ZODIAK </a></li>
                            <li><a href="{{ route('admin.nilaimhs.index') }}"><i class="fa fa-circle-o"></i> NILAI AKHIR MHS </a></li>
                            <li><a href="{{ route('admin.nilailulus.index') }}"><i class="fa fa-circle-o"></i> CEK NILAI KELULUSAN </a></li>
                            <li><a href="{{ route('admin.hitungparkir.index') }}"><i class="fa fa-circle-o"></i> HITUNG PARKIR</a></li>
                            <li><a href="{{ route('admin.jamswitch.index') }}"><i class="fa fa-circle-o"></i> JAM KERJA SWITCH</a></li>
                            <li class="treeview" style="background: red; height: auto;">
                              <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                                </span>
                              </a>
                              <ul class="treeview-menu" style="display: none;">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        {{-- <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li> --}}
                      </ul>
                    </li>
                    <li class="treeview" style="background: red; height: auto;">
                      <a href="#">
                        <i class="fa fa-share"></i> <span>PENDAFTARAN PASIEN MORBIS</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu" style="display: none;">
                        <li><a href="{{ route('admin.pasien.create') }}"><i class="fa fa-circle-o"></i>PENDAFTARAN PASIEN RS</a></li>
                        {{-- <li><a href="{{ route('admin.pasien.data') }}"><i class="fa fa-circle-o"></i>DATA PASIEN RS</a></li> --}}
                        <li><a href="{{ route('admin.pasien.index') }}"><i class="fa fa-circle-o"></i>DATA PASIEN RS</a></li>
                        <li class="treeview" style="background: red; height: auto;">
                          <a href="#"><i class="fa fa-circle-o"></i> DATA RS
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                          </a>
                          <ul class="treeview-menu" style="display: none;">
                            <li><a href="{{ route('admin.jenispasien.index') }}"><i class="fa fa-circle-o"></i> JENIS PASIEN</a></li>
                            <li><a href="{{ route('admin.poliklinik.index') }}"><i class="fa fa-circle-o"></i> POLIKLINIK</a></li>
                            <li><a href="{{ route('admin.golongandarah.index') }}"><i class="fa fa-circle-o"></i> GOL DARAH</a></li>
                            <li><a href="{{ route('admin.statusperkawinan.index') }}"><i class="fa fa-circle-o"></i> STATUS PERKAWINAN</a></li>
                            <li><a href="{{ route('admin.pendidikan.index') }}"><i class="fa fa-circle-o"></i> PENDIDIKAN TERAKHIR</a></li>
                            <li><a href="{{ route('admin.pekerjaan.index') }}"><i class="fa fa-circle-o"></i> PEKERJAAN</a></li>
                            <li><a href="{{ route('admin.agama.index') }}"><i class="fa fa-circle-o"></i> AGAMA </a></li>
                            <li><a href="{{ route('admin.suku.index') }}"><i class="fa fa-circle-o"></i> SUKU </a></li>
                            <li class="treeview" style="background: red; height: auto;">
                              <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                                </span>
                              </a>
                              <ul class="treeview-menu" style="display: none;">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                      </ul>
                    </li>
                    {{-- <li class="treeview">
                      <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>PELANGI JAVA SCRIPT</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href=""><i class="fa fa-circle-o"></i>GANJIL GENAP</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i>PARKIR</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i>BIS</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i>FUNGSI TERBILANG</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i>JARAK & WAKTU</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i>JQ FORM</a></li>
                      </ul>
                    </li> --}}


                  {{-- <li class="treeview">
                    <a href="#">
                      <i class="fa fa-pie-chart"></i>
                      <span>RELASI QRUERY</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href=""><i class="fa fa-circle-o"></i>PROVINSI</a></li>
                      <li><a href=""><i class="fa fa-circle-o"></i>KABUPATEN</a></li>
                      <li><a href=""><i class="fa fa-circle-o"></i>KOTA</a></li>
                      <li><a href=""><i class="fa fa-circle-o"></i>LAPORAN DATA</a></li>
            
                    </ul>
                </li> --}}

                  {{-- <li class="treeview" style="background: red; height: auto;">
                    <a href="#">
                      <i class="fa fa-share"></i> <span>HITUNGAN JAVA SCRIPT </span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                   
                      <li class="treeview" style="background: red; height: auto;">
                        <a href="#"><i class="fa fa-circle-o"></i> KALKULATOR
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                          <li><a href=""><i class="fa fa-circle-o"></i> PENJUMLAHAN </a></li>
                          <li><a href=""><i class="fa fa-circle-o"></i> PENGURANGAN </a></li>
                          <li><a href=""><i class="fa fa-circle-o"></i> PERKALIAN </a></li>
                          <li><a href=""><i class="fa fa-circle-o"></i> PEMBAGIAN </a></li>
                          <li class="treeview" style="background: red; height: auto;">
                            <a href="#"><i class="fa fa-circle-o"></i> Level Two
                              <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                              </span>
                            </a>
                            <ul class="treeview-menu" style="display: none;">
                              <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                              <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="treeview" style="background: red; height: auto;">
                        <a href="#"><i class="fa fa-circle-o"></i> KONDISI HITUNGAN
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                          <li><a href=""><i class="fa fa-circle-o"></i> TAHUN KABISAT </a></li>
                          <li><a href=""><i class="fa fa-circle-o"></i> JAM KERJA</a></li>
                          <li><a href=""><i class="fa fa-circle-o"></i>HITUNG BB % TB </a></li>
                          <li><a href=""><i class="fa fa-circle-o"></i> USIAN </a></li>
                          <li><a href=""><i class="fa fa-circle-o"></i> GOL & JAM KERJA </a></li>
                          <li><a href=""><i class="fa fa-circle-o"></i> HARI  </a></li>
                          <li><a href=""><i class="fa fa-circle-o"></i> ZODIAK </a></li>
                          <li><a href=""><i class="fa fa-circle-o"></i> NILAI AKHIR MHS </a></li>
                          <li><a href=""><i class="fa fa-circle-o"></i> CEK NILAI KELULUSAN </a></li>
                          <li><a href=""><i class="fa fa-circle-o"></i> HITUNG PARKIR</a></li>
                          <li><a href=""><i class="fa fa-circle-o"></i> JAM KERJA SWITCH</a></li>
                          <li class="treeview" style="background: red; height: auto;">
                            <a href="#"><i class="fa fa-circle-o"></i> Level Two
                              <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                              </span>
                            </a>
                            <ul class="treeview-menu" style="display: none;">
                              <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                              <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                
                    </ul>
                  </li> --}}

                <li class="header">LABELS</li>
            </ul>
    </section>
    <!-- /.sidebar -->
  </aside>























