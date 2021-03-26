<!DOCTYPE html>
<html>
<?php 
session_start();
?>  
<head>
    <meta charset="UTF-8">
    <title>Inaikkum Karangal Matrimony</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendors/Stroke-Gap-Icons-Webfont/style.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="vendors/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="vendors/imagelightbox/imagelightbox.min.css">
    <link rel="stylesheet" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/all-ie-only.css">
    <style>
 /*   select::-ms-expand {
    display: none;
}*/
    option {
  background-color: #fff !important;
  color: #000 !important;
  padding: 5px 20px !important;
  font-family: 'PT Serif', sans-serif !important;
  font-style: italic !important;
  border-bottom: 1px solid #E1E1E1 !important;
  text-transform: capitalize !important;
  font-size: 16px !important;
}


 .colorss{width: 96% !important;
    border-radius: 0;
    padding: 0px 2px;
    border: 2px solid #ffffff;
    height: 40px;
    background: #f50b3cba;
    outline: none;
    color: #ffffff;
    font: 400 1.039em/1em 'PT Serif', serif;
    font-style: italic;
  }

.ui-selectmenu-menu .ui-menu {
    height: 167px;
}
</style>
  </head>
  <body>
    <?php include('header.php');?>
    <div id="minimal-bootstrap-carousel" data-ride="carousel" class="carousel default-home-slider slide carousel-fade shop-slider">
      <div role="listbox" class="carousel-inner">
        <div  class="item active slide-1 carousel1">
          <div class="carousel-caption nhs-caption nhs-caption6">
            <div class="thm-container">
              <div class="box valign-middle">
                <div class="content text-center">
                  <h2 data-animation="animated fadeInUp" class="this-title">Find Your Life Partner</h2>
                  <p data-animation="animated fadeInDown">Finding the Soul Mate may not be easy.We made it simple through.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      <div style="background-image: url(images/slide3.jpg);background-position: center right;" class="item slide-2">
          <div class="carousel-caption nhs-caption nhs-caption7">
            <div class="thm-container">
              <div class="box valign-middle">
                <div class="content text-left pull-left">
                  <h2 data-animation="animated fadeInUp" class="this-title" style="color:red;">Marriages are made in heaven</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="background-image: url(images/slide4.jpg);background-position: center right;" class="item slide-2">
          <div class="carousel-caption nhs-caption nhs-caption7">
            <div class="thm-container">
              <div class="box valign-middle">
                <div class="content text-left pull-left">
                  <h2 data-animation="animated fadeInUp" class="this-title" style="color:black;">Our life start begins this day</h2>
                  <p data-animation="animated fadeInDown"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="#minimal-bootstrap-carousel" role="button" data-slide="prev" class="left carousel-control"><i class="fa fa-angle-left"></i><span class="sr-only">Previous</span></a><a href="#minimal-bootstrap-carousel" role="button" data-slide="next" class="right carousel-control"><i class="fa fa-angle-right"></i><span class="sr-only">Next</span></a>
    </div>
    <div class="search-wrapper">
      <section class="container clearfix">
        <div class="search-sec search-sec-homet">
          <div class="overlay">
            <div class="border">
<form action="freesearch.php" method="post">
              <div class="ser-in-box">
                <div class="select-box">
                  <select name="age1" class="select-menu" style="width: 162px;">
                    <option value="">Age (From)</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>  
                                <option value="29">29</option>      
                                <option value="30">30</option>      
                                <option value="31">31</option>  
                                <option value="32">32</option>      
                                <option value="33">33</option>  
                                <option value="34">34</option>      
                                <option value="35">35</option>      
                                <option value="36">36</option>      
                                <option value="37">37</option>      
                                <option value="38">38</option>      
                                <option value="39">39</option>      
                                <option value="40">40</option>
                                <option value="41">41</option>  
                                <option value="42">42</option>      
                                <option value="43">43</option>  
                                <option value="44">44</option>      
                                <option value="45">45</option>      
                                <option value="46">46</option>      
                                <option value="47">47</option>      
                                <option value="48">48</option>      
                                <option value="49">49</option>      
                                <option value="50">50</option>  
                                <option value="51">51</option>  
                                <option value="52">52</option>      
                                <option value="53">53</option>  
                                <option value="54">54</option>      
                                <option value="55">55</option>      
                                <option value="56">56</option>      
                                <option value="57">57</option>      
                                <option value="58">58</option>      
                                <option value="59">59</option>      
                                <option value="60">60</option>      
                  </select>
                </div>
              </div>

               <div class="ser-in-box">
                <div class="select-box">
                  <select name="age2" class="select-menu">
                  <option value="">Age (To)</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>  
                                <option value="29">29</option>      
                                <option value="30">30</option>      
                                <option value="31">31</option>  
                                <option value="32">32</option>      
                                <option value="33">33</option>  
                                <option value="34">34</option>      
                                <option value="35">35</option>      
                                <option value="36">36</option>      
                                <option value="37">37</option>      
                                <option value="38">38</option>      
                                <option value="39">39</option>      
                                <option value="40">40</option>
                                <option value="41">41</option>  
                                <option value="42">42</option>      
                                <option value="43">43</option>  
                                <option value="44">44</option>      
                                <option value="45">45</option>      
                                <option value="46">46</option>      
                                <option value="47">47</option>      
                                <option value="48">48</option>      
                                <option value="49">49</option>      
                                <option value="50">50</option>  
                                <option value="51">51</option>  
                                <option value="52">52</option>      
                                <option value="53">53</option>  
                                <option value="54">54</option>      
                                <option value="55">55</option>      
                                <option value="56">56</option>      
                                <option value="57">57</option>      
                                <option value="58">58</option>      
                                <option value="59">59</option>      
                                <option value="60">60</option> 
                  </select>
                </div>
              </div>

              <div class="ser-in-box">
                <div class="select-box">
                  <!-- <select onchange="showhidediv()" class="select-menu"> -->
                  <select name="religion" class="select-menu">

                    <option value="">Religion</option>
                    <option value="Hindu">Hindu</option>
                     <option value="Muslim">Muslim</option>
                      <option value="Christian">Christian</option>
                    <option value="Buddhist">Buddhist</option>
                    <option value="Jain">Jain</option>
                    <option value="Parsi">Parsi</option>
                    <option value="Sikh">Sikh</option>
                  <option value="">Inter religion</option>
                    
                  </select>
                </div>
              </div>

                <div class="ser-in-box">
                <div class="select-box" title="Select Caste">
                  <select name="caste"  id="caste" class="select-menu">
                    <option value="">Select Caste</option>
                     <option value="Nadar">Nadar</option>
            <option value="Yadhavar">Yadhavar</option>
            <option value="Telugu Yadhavar">Telugu Yadhavar</option>
            <option value="Tamil Viswakarma">Tamil Viswakarma</option>
            <option value="Telugu Viswakarma">Telugu Viswakarma</option>
            <option value="Agamudiyar Mudhaliyar">Agamudiyar Mudhaliyar</option>
            <option value="Mudhaliyar">Mudhaliyar</option>
            <option value="Devar">Devar</option>
            <option value="Kallar">Kallar</option>
            <option value="Maravar">Maravar</option>
             <option value="Agamudaiya Devar">Agamudaiya Devar</option>
            <option value="Chettiyar">Chettiyar</option>
            <option value="RC Christian">RC Christian</option>
            <option value="CSI Christian">CSI Christian</option><option value="Bondili">Bondili</option>
            <option value="AC Christian">AC Christian</option>
            <option value="Pillaimar">Pillaimar</option>
            <option value="Saiva Pillai">Saiva Pillai</option>
            <option value="Rettiyar">Rettiyar</option>
            <option value="Adhi Drividar - Paraiyar">Adhi Drividar - Paraiyar</option>
            <option value="Thevaendhira Kulam - Pallar">Thevaendhira Kulam - Pallar</option>
            <option value="Brahmin">Brahmin</option>
            <option value="Gounder">Gounder</option>
            <option value="Muslim - Tamil">Muslim - Tamil</option>
            <option value="Naidu">Naidu</option>
            <option value="Kavura Naidu">Kavura Naidu</option>
            <option value="Kammaavar Naidu">Kammaavar Naidu</option>
            <option value="Balija Naidu">Balija Naidu</option>
            <option value="Nayar">Nayar</option>
            <option value="Arunthathiyar">Arunthathiyar</option>
            <option value="Muppanar">Muppanar</option>
            <option value="Maruthuvar">Maruthuvar</option>
            <option value="Veera Saivam">Veera Saivam</option>
            <option value="Vannaar">Vannaar</option>
            <option value="Sourastra">Sourastra</option>
            <option value="Nayakkar">Nayakkar</option>
            <option value="Vellar">Vellar</option>
            <option value="Udaiyaar">Udaiyaar</option>
            <option value="Saaliyar">Saaliyar</option>
           
            <option value="Jangam">Jangam</option>
            <option value="Pandaaram">Pandaaram</option>
            <option value="Pandiya vellalar">Pandiya vellalar</option>
            <option value="Bhoyar">Bhoyar</option>
            <option value="Okkalikka Gaudar">Okkalikka Gaudar</option>
            <option value="Muththaraiyar">Muththaraiyar</option>
            <option value="Muthu Raja">Muthu Raja</option>
            <option value="Valluvan">Valluvan</option>
            <option value="Ambalakkarar">Ambalakkarar</option>
            <option value="Meenavar Parvatha Rajakulam">Meenavar Parvatha Rajakulam</option>
            <option value="Kulaalar">Kulaalar</option>
            <option value="kuravar">kuravar</option>
            <option value="Vanniyar">Vanniyar</option>
             <option value="Inter Caste Marriage">Inter Caste Marriage</option>
            <option value="Caste No Bar">Caste No Bar</option>
            <option value="Others">Others</option>
                  </select>
                </div>
              </div>

               <div class="ser-in-box">
                <div class="select-box" title="Marital Status" >
                  <select name="martial_s" class="colorss" style="width: 150px;" title="Marital Status">
                    <option value="" title="Marital Status">Marital Status</option>
                    <option value="unmarried">Unmarried</option>
                    <option value="divorce">Divorce</option>
                     <option value="widow">Widow</option>
                  </select>
                </div>
              </div>
              <div class="ser-in-box">
                <div class="select-box">
                  <select name="gender" class="colorss">
                    <option value="">Looking For</option>
                    <option value="Female">Bride</option>
                    <option value="Male">Groom</option>
                  </select>
                </div>
              </div>
            
              <div class="ser-in-box chk-button">
                <button type="submit" name="submit" class="res-btn">Quick Search</button>
              </div>
            </form> 
            </div>
          </div>
        </div>
      </section>
    </div>
   
    <section>
    <div class="fluid-know-area">
      <div class="work-image-ser hidden-xs"><img src="images/main.jpg" alt="" class="img-responsive"></div>
      <div class="service-promo">
        <div class="promo-content">
          <div class="know-top">
            <h2>Welcome to Inaikkum Karangal</h2>
            <h3>Prospective brides and grooms to find their match.</h3>
           <p style="text-align:justify;">Welcome to Inaikkum Karangal . We created this online matchmaking service to use the power of the web to bring people together. We are commiited to providing the most up to date and accurate profiles for our members to help them to find the right partner. By registering with us you get access to our extensive database of members from all over india and your profile is also listed on our site for others to view. With our easy to use interface, we enable people to meet, establish connections and find their partners. So, register today and take the next big step in your life.
</p> <a href="about.php" class="res-btn">Read More<i class="fa fa-arrow-right"></i></a>
          </div>
          <div class="know-bot">
            <ul>
              <li>
                <div class="about-img"><img src="images/icon1.png" alt="" class="img-responsive"></div>
                <div class="about-cont">
                  <p>Best<br>Service</p>
                </div>
              </li>
              <li>
                <div class="about-img"><img src="images/icon2.png" alt="" class="img-responsive"></div>
                <div class="about-cont">
                  <p>Dedicated<br>Team</p>
                </div>
              </li>
              <li>
                <div class="about-img"><img src="images/icon3.png" alt="" class="img-responsive"></div>
                <div class="about-cont">
                  <p>24/7<br>Support</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    </section>
   
    <section class="our-galler-htwo clearfix common-pad">
      <div class="container clearfix">
        <div class="sec-header sec-w-header">
          <h2>Highlighted Profiles</h2>
          <h3>Prospective brides and grooms to find their match.</h3>
        </div>
      </div>
      <div class="fullwidth-silder">
        <div class="fullwidth-slider">
          <?php
          include('conn.php'); 
 //$gn=mysql_query("select * from registerfree where up_profile<>'photos/' order by id desc");
 $gn=mysql_query("select * from tbl_loadimage order by id");
 
// $dirname = "images/";
// $images = glob($dirname."*.jpg");

// foreach($images as $image) {
//     echo '<img src="'.$image.'" class="responsive"/><br />';
// }

while($tp=mysql_fetch_array($gn))
{
  $hm=$tp['photos'];
  $tg=explode('/',$hm);
  if (!file_exists($tp['photos'])) continue;
  if($tg[1]!='')
  {
?>
          <div class="item"><img src="<?php echo $tp['photos'];?>" alt="" style="display:block;"> 
            <div class="this-overlay">
              <div class="this-texts"><a href="<?php echo $tp['photos'];?>" rel="help" class="fancybox"><i class="icon icon-Search"></i></a>
                <h4 class="this-title"><?php echo $tp['Name'];?><br>Age: <?php echo $tp['Age'];?><br>Caste:<?php echo $tp['Caste'];?></h4>
              </div>
            </div>
          </div>
          <?php  } 
        } ?>-->

        </div>
      </div>
    </section>
    

  <?php include('footer.php'); ?>
    <!-- footer  style-->

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.js"></script>
    <!-- owl carousel-->
    <script src="vendors/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/zebra_datepicker.js"></script>
    <!-- jQuery appear-->
    <script src="vendors/jquery-appear/jquery.appear.js"></script>
    <!-- jQuery countTo-->
    <script src="vendors/jquery-countTo/jquery.countTo.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>
    <script src="js/custom.js"></script>
    



<script type="text/javascript">
  // function showhidediv()

  // {
  //   alert(2);
  // }<script type="text/javascript">

        $(document).ready(function()
{
$(".image1").append('<img src="assets/images/download.gif" height="50px" width="50px">');

$("#showhidediv").change(function()
{
var id=$(this).val();
var dataString = 'id='+ id;

//alert(dataString);
  
  $.ajax
({
type: "POST",
url: "caste.php",
data: dataString,
cache: false,
success: function(html)
{
$("#caste").html(html);
}
});

});
});
</script>



  </body>

</html>
