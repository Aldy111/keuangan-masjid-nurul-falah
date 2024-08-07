<main>
<section id="hero">
    <div class="hero-container">
      <h1>Nurul Falah</h1>
      <h2>Masjid kita semua warga sungai bulan</h2>
      <a href="#about" class="btn-get-started">Kunjungi</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Tentang</h2>
            <p>
            Masjid Nurul Falah adalah tempat di mana cahaya iman bersinar. Kami menjunjung tinggi nilai-nilai Islam yang damai, toleran, dan peduli terhadap sesama. Melalui kegiatan kami, kami berusaha untuk memperkuat ukhuwah Islamiyah dan berkontribusi positif bagi masyarakat sekitar.
            </p>
          </div>
          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
    </section><!-- #about -->
    <!--==========================
    kata-kata mutiara
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-12 text-center text-lg-left">
            <h3 class="cta-title">QS. Al-Baqarah: 43</h3>
            <h4 class="cta-text">"Dan dirikanlah shalat, tunaikanlah zakat, dan rukuklah bersama orang-orang yang rukuk."</h4>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Facts Section
    ============================-->
    <!-- <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Facts</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row counters">

  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>Clients</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p>Projects</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Hours Of Support</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Hard Workers</p>
  				</div>

  			</div>

      </div>
    </section>#facts -->

    <!--==========================
      Kegiatan Section
    ============================-->
    <section id="kegiatan">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Kegiatan</h3>
          <p class="section-description">Kegiatan yang dilaksanan oleh para jamaah masjid nurul falah</p>
        </div>
        <div class="row">
          @if ($activity->isNotEmpty())
          @foreach ($activity as $kegiatan) 
          <div class="col-lg-4 col-md-8">
            <div class="member">
              @if ($kegiatan->image != '')
              <div class="pic"><img src="{{ asset('storage/'.$kegiatan->image) }}" alt="no photo"></div>
              @endif
              <h4>{{ $kegiatan->name}}</h4>
              <span>{{ $kegiatan->note}}</span>
            </div>
          </div>
          @endforeach
          @endif
        </div>
      </div>
    </section>

    <!--==========================
    kata-kata mutiara
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-12 text-center text-lg-left">
            <h3 class="cta-title">QS. Al-Jinn: 18</h3>
            <h4 class="cta-text"> "Sesungguhnya masjid-masjid itu milik Allah. Maka janganlah kamu menyembah seseorang pun di dalamnya di samping (menyembah) Allah." </h4>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Pengurus Section
    ============================-->
    <section id="pengurus">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Pengurus</h3>
          <p class="section-description">Pengurus-pengurus masjid nurul falah</p>
        </div>
        <div class="row">
          @if ($officer->isNotEmpty())
          @foreach ($officer as $pengurus)
          <div class="col-lg-4 col-md-8">
            <div class="member">
              @if ($kegiatan->image != '')
              <div class="pic"><img src="{{ asset('storage/'.$pengurus->image) }}" alt="no photo"></div>
              @endif
              <h4>{{ $pengurus->name }}</h4>
              <span>{{ $pengurus->position->name}}</span>
            </div>
          </div>
          @endforeach
          @endif
        </div>
      </div>
    </section><!-- #team -->

    <!--==========================
    kata-kata mutiara
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-12 text-center text-lg-left">
            <h3 class="cta-title">QS. Al-Jinn: 18</h3>
            <h4 class="cta-text"> "Sesungguhnya masjid-masjid itu milik Allah. Maka janganlah kamu menyembah seseorang pun di dalamnya di samping (menyembah) Allah." </h4>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->
    <br>

    <section id="petugas">
      <div class="container wow fadeInUp">
          <div class="section-header">
            <h3 class="section-title">Jadwal Petugas Juma'at</h3>
            <p class="section-description">Berikut Jadwal Petugas Juma'at</p>
          </div>
          <table style="width: 100%; border-collapse: collapse;">
          <thead>
                  <tr style="background-color: #f2f2f2;">
                  <th style="padding: 8px; text-align: left;">No</th>
                  <th style="padding: 8px; text-align: left;">Tanggal</th>
                  <th style="padding: 8px; text-align: left;">Petugas</th>
                  <th style="padding: 8px; text-align: left;">Bagian</th>
                  </tr>
          </thead>
          <tbody>
          @php $no= 1; @endphp
          @foreach($fridayOfficer as $row)
                  <tr style="border-bottom: 1px solid #ddd;">
                          <td style="padding: 8px;">{{ $no++ }}</td>
                          <td style="padding: 8px;">{{ $row->date_fridayOfficer }}</td>
                          <td style="padding: 8px;">{{ $row->officer->name }}</td>
                          <td style="padding: 8px;">{{ $row->part->name }}</td>
                  </tr>
          @endforeach
          </tbody>
          <tfoot>
                  <tr style="background-color: #f2f2f2;">
                    <td  colspan="4" style="padding: 8px; text-align: center; font-weight: bold;" > Daftar Petugas Jumaat</td>
                  </tr>
          </tfoot>
          </table>
        </div>
        <br>
        <!--==========================
    kata-kata mutiara
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-12 text-center text-lg-left">
            <h3 class="cta-title">QS. Al-Jinn: 18</h3>
            <h4 class="cta-text"> "Sesungguhnya masjid-masjid itu milik Allah. Maka janganlah kamu menyembah seseorang pun di dalamnya di samping (menyembah) Allah." </h4>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->
    <br>

    <section id="laporan">
      <div class="container wow fadeInUp">
          <div class="section-header">
            <h3 class="section-title">Laporan Keuangan</h3>
            <p class="section-description">Berikut laporan Keuangan</p>
          </div>
          <h1 align="center">Transaksi Keuangan Masjid Nurul Falah</h1>

          <table style="width: 100%; border-collapse: collapse;">
          <thead>
                  <tr style="background-color: #f2f2f2;">
                  <th style="padding: 8px; text-align: left;">Tanggal</th>
                  <th style="padding: 8px; text-align: left;">Jenis</th>
                  <th style="padding: 8px; text-align: left;">Kategori</th>
                  <th style="padding: 8px; text-align: left;">Keterangan</th>
                  <th style="padding: 8px; text-align: right;">Jumlah</th>
                  </tr>
          </thead>
          <tbody>
                  @php
                  $totalPemasukan = 0;
                  $totalPengeluaran = 0;
                  @endphp

                  @foreach ($transaction as $transaction)
                  @php
                          if ($transaction->category->is_expense) {
                          $totalPengeluaran += $transaction->amount;
                          } else {
                          $totalPemasukan += $transaction->amount;
                          }
                  @endphp

                  <tr style="border-bottom: 1px solid #ddd;">
                          <td style="padding: 8px;">{{ $transaction->date_transaction }}</td>
                          <td style="padding: 8px;">
                          @if ($transaction->category->is_expense)
                                  Pengeluaran
                          @else
                                  Pemasukan
                          @endif
                          </td>
                          <td style="padding: 8px;">{{ $transaction->category->name }}</td>
                          <td style="padding: 8px;">{{ $transaction->note }}</td>
                          <td style="padding: 8px; text-align: right;">Rp{{ number_format($transaction->amount, 2, ',', '.') }}</td>
                  </tr>
                  @endforeach

                  <tr style="background-color: #f2f2f2;">
                  <td colspan="4" style="padding: 8px; text-align: right; font-weight: bold;">Total Pemasukan:</td>
                  <td style="padding: 8px; text-align: right; font-weight: bold;">Rp{{ number_format($totalPemasukan, 2, ',', '.') }}</td>
                  </tr>
                  <tr style="background-color: #f2f2f2;">
                  <td colspan="4" style="padding: 8px; text-align: right; font-weight: bold;">Total Pengeluaran:</td>
                  <td style="padding: 8px; text-align: right; font-weight: bold;">Rp{{ number_format($totalPengeluaran, 2, ',', '.') }}</td>
                  </tr>
          </tbody>
          </table>
        </div>
      
    </section>
    <br>

    <!--==========================
    kata-kata mutiara
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-12 text-center text-lg-left">
            <h3 class="cta-title">QS. Al-Jinn: 18</h3>
            <h4 class="cta-text"> "Sesungguhnya masjid-masjid itu milik Allah. Maka janganlah kamu menyembah seseorang pun di dalamnya di samping (menyembah) Allah." </h4>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->
    <br>
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact</h3>
          <p class="section-description">Hubungi kontak di bawah ini</p>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d395.83374344080204!2d109.43755774074965!3d-0.3276547433039018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d36e558167153%3A0xab4d56f6830b2c14!2sMASJID%20NURUL%20FALAH%20SUNGAI%20BULAN%20BLOK%20A!5e0!3m2!1sid!2sid!4v1721876232377!5m2!1sid!2sid" width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Blok A, Desa sungai bulan<br>Kubu Raya, Sungai Raya</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>aldyprayogo53@gmail.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+62 812 562 501 68</p>
              </div>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>
</main>