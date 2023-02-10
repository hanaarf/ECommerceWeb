@extends('layout.lp')



@section('content')
@if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
  @endif


  <div class="home">
    <h1>HAVE A BREAK</h1>
    <img src="img/kk.png" alt="" width="380px">
    <h2>HAVE A <em>KITKAT</em></h2>
    @auth
    <h5>hi, {{ auth()->user()->name}}</h5>
    
    @else
    <h4>hi, user</h4>
    @endauth
    <a href="#about"><span class="material-symbols-outlined" id="arrow">expand_more</span></a>
  </div>

  <div id="about" class="about">
    <img src="img/glombang1.png" alt="" width="1354px" class="yy">
    <div class="kotak">
      <div class="kiri">
        <h2> <em>Kitkat</em> Story</h2>

      <div class="slider">
      <div class="slides">

        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
       
        <div class="slide first">
          <img
          src="img/1935.png"
          alt="" width="290px">
          <center>
            <p style="width: 500px;text-align: left;margin-top: -250px; margin-left: -650px">
              <em>1935</em> <br> <br> KitKa was first launched in the <abbr title="United Kingdom">UK</abbr> with the name 'Chocolate Crisp' - even back then it had the famous four fingers. The iconic brand is an international symbol for hitting the pause button on life - to enjoy a
              well-earned break.KitKat is the first global chocolate brand to use 100% sustainably sourced cocoa through the
              Nestlé Cocoa Plan and Rainforest Alliance certified.</p>
          </center>
        </div>
        <div class="slide">
          <img
          src="img/1937.png"
          alt="" width="290px">
          <center>
            <p style="width: 500px;text-align: left;margin-top: -250px; margin-left: -650px"> 
              <em>1937</em> <br><br> The now iconic name and brand logo of <em>KitKat</em> first graced our packaging.KitKat is the first global chocolate brand to use 100% sustainably sourced cocoa through the
              Nestlé Cocoa Plan and Rainforest Alliance certified. Meaning there's no reason not to enjoy a
              break.</p>
          </center>
        </div>
        <div class="slide">
          <img
          src="img/2007.png"
          alt="" width="290px">
          <center>
            <p style="width: 500px;text-align: left;margin-top: -250px; margin-left: -650px">
              <em>2007</em> <br><br>
              The first <em>KitKat</em> ice cream is launched, providing a perfect break for a sunny day. KitKat is the first global chocolate brand to use 100% sustainably sourced cocoa through the
              Nestlé Cocoa Plan and Rainforest Alliance certified. Meaning there's no reason not to enjoy</p>
          </center>
        </div>
        <div class="slide">
          <img
          src="img/2016.png"
          alt="" width="290px">
          <center>
            <p style="width: 500px;text-align: left;margin-top: -250px; margin-left: -650px">
              <em>2016</em><br><br><em>KitKat </em>becomes the first global chocolate brand to use 100% sustainably sourced cocoa. The iconic brand is an international symbol for hitting the pause button on life - to enjoy a
              well-earned break.KitKat is the first global chocolate brand to use 100% sustainably sourced cocoa through the
              Nestlé Cocoa Plan .</p>
          </center>
        </div>

        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>

      </div>

      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>

    </div> 
      </div>
    </div>
  </div>


  <div class="product">
    <h1 style="color: #ffffff; margin-left: 470px; font-size: 30px;">FIND YOUR PERFECT BREAK</h1>
    <h3 style="color: #FDE5A6; margin-left: 552px;margin-top: 20px; margin-bottom: 40px; font-weight: 500 ">Explore the Kitkat  range</h3 style="">
   

    <div class="container swiper">
      <div class="slide-container">
        <div class="card-wrapper swiper-wrapper">
          <div class="card swiper-slide">
            <div class="image-box">
              <img src="https://www.kitkat.co.uk/sites/default/files/2022-07/KK_40034_BITES_BANNER_450x450_1.png" alt="" />
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-box">
              <img src="https://www.kitkat.co.uk/sites/default/files/styles/thumbnail_300x300/public/2022-07/KitKat-4-Finger-Orange.png?itok=EpEVLq94" alt="" />
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-box">
              <img src="https://www.nestle.com/sites/default/files/styles/product_showcase_image/public/kitkat-pops-milk-462.png?itok=xGkaHjKZ" alt="" />
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-box">
              <img src="https://www.kitkat.co.uk/sites/default/files/styles/thumbnail_300x300/public/2022-09/Kit%20Kat%204F%20Dark%2070%25_0.png?itok=7D4pn9zO" alt="" />
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-box">
              <img src="https://www.nestle.com/sites/default/files/styles/product_showcase_image/public/kitkat-santa-462.png?itok=6ZGp7ifu" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
    </div> 
    <div class="bisa"><a href="/product">all product</a></div>
  </div>
  
  <!-- <h1 style="color: white; margin-left: 580px;">Order Here</h1>
  <div class="beli">
    <div class="kanan">
     <img src="file:///home/hana/Downloads/web-image-size-16-9-1.webp" alt="">
    </div>
    <div class="kiri">
     <form>
         <div>
             <div class="name-email">
                 <div>
                     <div>
                         <input type="text" class="form-control" id="name" placeholder="Your Name">
                     </div>
                 </div>
                 <div>
                     <div>
                         <input type="email" class="form-control" id="email" placeholder="Your Email">
                     </div>
                 </div>
             </div><br>
             <div class="y">
                 <div>
                     <input type="text" class="form-control" id="subject" placeholder="Subject">
                 </div>
             </div><br>
             <div class="g">
                 <div>
                     <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                 </div>
             </div><br>

             <div class="btn">
                <button type="submit">Send</button>
             </div>
         </div>
     </form>
    </div>
 </div> -->

  <div class="kitkatvidio">
    <div class="layout-1-wrapper">
        <div class="ppp">
            <div class="rows">
                <div class="col-md-12">
                    <div
                        class="field field--name-field-column-first field--type-entity-reference-revisions field--label-hidden field__items">
                        <div class="field__item">
                            <div class="paragraph paragraph--type--c-spacer paragraph--view-mode--default">
                                <div class="spacer" style="margin-bottom:55px;">
                                </div>
                            </div>
                        </div>
                        <div class="field__item">
                            <div class="horizontal-position-">
                                <h1>
                                    <div class="name-field-c-title" style="color: #ffffff;margin-top: -55px;margin-bottom: 60px;margin-left: 520px;">
                                      HAVE AN AD BREAK</div>
                                </h1>
                            </div>
                        </div>
                        <div class="field__item" style="margin-left: 55px;">
                            <div class="layout-2-wrapper">
                                <div class="paragraph">
                                    <div class="row" style="display: flex;">
                                        <div class="col-md-6">
                                            <div class="field">
                                                <div class="field__item">
                                                    <div class="white-">
                                                        <div class="field" style="width: 200px;">
                                                            <div data-video-embed-field-lazy="<div class=&quot;video-embed-field-provider-youtube video-embed-field-responsive-video&quot;><iframe width=&quot;854&quot; height=&quot;480&quot; frameborder=&quot;0&quot; allowfullscreen=&quot;allowfullscreen&quot; allow=&quot;autoplay; encrypted-media&quot; src=&quot;https://www.youtube.com/embed/lYgHiqi_tMc?autoplay=1&amp;amp;start=0&amp;amp;rel=0&quot;></iframe></div> " class="video-embed-field-lazy">
                                                                <div class="video-embed">
                                                                    <iframe allowfullscreen="allowfullscreen"
                                                                        allow="autoplay; encrypted-media"
                                                                        src="https://www.youtube.com/embed/lYgHiqi_tMc?autoplay=1&amp;start=0&amp;rel=0"
                                                                        width="550px" height="300px"
                                                                        frameborder="0" style="width: 550px; height: 300px;" >
                                                                    </iframe>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="field__item">
                                                    <div class="horizontal-position-">
                                                        <h4>
                                                            <div class="fieldnm">
                                                                <!-- KIT KAT| Delicious Break -->
                                                            </div>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div  class="field">
                                                <div class="field__item">
                                                    <div  class="white-font">
                                                        <div class="field">
                                                            <div data-video-embed-field-lazy="<div class=&quot;video-embed-field-provider-youtube video-embed-field-responsive-video&quot;><iframe width=&quot;854&quot; height=&quot;480&quot; frameborder=&quot;0&quot; allowfullscreen=&quot;allowfullscreen&quot; allow=&quot;autoplay; encrypted-media&quot; src=&quot;https://www.youtube.com/embed/rR5EiVTIliw?autoplay=1&amp;amp;start=0&amp;amp;rel=0&quot;></iframe></div> " class="video-embed-field-lazy">
                                                                <div
                                                                    class="video-embed-field-provider-youtube video-embed-field-responsive-video">
                                                                    <iframe
                                                                        allowfullscreen="allowfullscreen"
                                                                        allow="autoplay; encrypted-media"
                                                                        src="https://www.youtube.com/embed/rR5EiVTIliw?autoplay=1&amp;start=0&amp;rel=0"
                                                                        width="854" height="480"
                                                                        frameborder="0"  style="width: 550px; height: 300px; margin-left: 500px;"></iframe>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field__item">
                                                </div>
                                            </div>
                                        </div>
                                
                                        <div class="horizontal-position-">
                                            <h4>
                                                <div
                                                    class="field field--name-field-c-title field--type-string field--label-hidden field__item">
                                                </div>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="teks" style="display: flex;column-gap: 460px;margin-left: 190px;color: white;margin-top: 27px;font-weight: 300;">
      <h3>KIT KAT| Delicious Break</h3>
      <h3>However you break, Have a KitKat</h3>
    </div>
    
</div>

{{-- <div class="apakek">
    <h1 style="color: #ffffff; margin-left: 440px; font-size: 30px; margin-bottom: 80px; margin-top: -40px">RECOMENDATION</h1>
    
  <div class="wheel_box">
   <canvas id="spinWheel" style="width: 10px;"></canvas>
   <button id="spin_btn">Spin</button>
   <i class="fa-solid fa-location-arrow"></i>
  </div> 
 <div id="text" class="teksiya"><p>Let's spin</p></div>
</div> --}}

<script>
  var counter = 1;
  setInterval(function () {
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if (counter > 4) {
          counter = 1;
      }
  }, 3800);


  const spinWheel = document.getElementById("spinWheel");
  const spinBtn = document.getElementById("spin_btn");
  const text = document.getElementById("text");
  const spinValues = [{
          minDegree: 61,
          maxDegree: 90,
          value: ' Dark'
      },
      {
          minDegree: 31,
          maxDegree: 60,
          value: ' vegan'
      },
      {
          minDegree: 0,
          maxDegree: 30,
          value: ' white'
      },
      {
          minDegree: 331,
          maxDegree: 360,
          value: 'popmilks'
      },
      {
          minDegree: 301,
          maxDegree: 330,
          value: ' chunky'
      },
      {
          minDegree: 271,
          maxDegree: 300,
          value: ' bites'
      },
      {
          minDegree: 241,
          maxDegree: 270,
          value: ' honey'
      },
      {
          minDegree: 211,
          maxDegree: 240,
          value: 'finger orange'
      },
      {
          minDegree: 181,
          maxDegree: 210,
          value: 'original'
      },
      {
          minDegree: 151,
          maxDegree: 180,
          value: 'darkmint'
      },
      {
          minDegree: 121,
          maxDegree: 150,
          value: 'lotus'
      },
      {
          minDegree: 91,
          maxDegree: 120,
          value: 'chunky'
      },
  ];
  /* --------------- Size Of Each Piece  --------------------- */
  const size = [10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10];
  /* --------------- Background Colors  --------------------- */
  var spinColors = [
      "#E74C3C",
      "#7D3C98",
      "#2E86C1",
      "#138D75",
      "#F1C40F",
      "#D35400",
      "#138D75",
      "#F1C40F",
      "#b163da",
      "#E74C3C",
      "#7D3C98",
      "#138D75",
  ];

  let spinChart = new Chart(spinWheel, {
      plugins: [ChartDataLabels],
      type: "pie",
      data: {
          labels: ['D', 'V', 'W', 'P', 'C', 'B', 'H', 'F', 'O', 'D', 'L', 'C'],
          datasets: [{
              backgroundColor: spinColors,
              data: size,
          }, ],
      },
      options: {
          responsive: true,
          animation: {
              duration: 0
          },
          plugins: {
              tooltip: false,
              legend: {
                  display: false,
              },
              datalabels: {
                  rotation: 90,
                  color: "#ffffff",
                  formatter: (_, context) => context.chart.data.labels[context.dataIndex],
                  font: {
                      size: 24
                  },
              },
          },
      },
  });
  const generateValue = (angleValue) => {
      for (let i of spinValues) {
          if (angleValue >= i.minDegree && angleValue <= i.maxDegree) {
              text.innerHTML = `<p>You should buy variant ${i.value} ! </p>  </br> <button class="butonjs"><a href="/buy">Buy Now</a></button>`;
              spinBtn.disabled = false;
              break;
          }
      }
  };
  /* --------------- Spinning Code --------------------- */
  let count = 0;
  let resultValue = 101;
  spinBtn.addEventListener("click", () => {
      spinBtn.disabled = true;
      text.innerHTML = `<p>Please wait!</p>`;
      let randomDegree = Math.floor(Math.random() * (355 - 0 + 1) + 0);
      let rotationInterval = window.setInterval(() => {
          spinChart.options.rotation = spinChart.options.rotation + resultValue;
          spinChart.update();
          if (spinChart.options.rotation >= 360) {
              count += 1;
              resultValue -= 5;
              spinChart.options.rotation = 0;
          } else if (count > 15 && spinChart.options.rotation == randomDegree) {
              generateValue(randomDegree);
              clearInterval(rotationInterval);
              count = 0;
              resultValue = 101;
          }
      }, 10);
  });

</script>


@endsection