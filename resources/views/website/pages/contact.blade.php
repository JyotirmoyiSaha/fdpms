@extends('website.master')


@section('content')

<style>
   body{
     
     background: linear-gradient(to left, #ccccff 45%, #ccffff 95%);
 
  }
  h1,
        h2,
        h3,
        h4,
        h5,
        h6 {}
        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }

        
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        img {
    max-width: 100%;
    height: auto;
}


.sec-title-style1 {
    position: relative;
    display: block;
    margin-top: -9px;
    padding-bottom: 50px;
}
.sec-title-style1.max-width{
    position: relative;
    display: block;
    max-width: 770px;
    margin: -9px auto 0;
    padding-bottom: 52px;    
}
.sec-title-style1.pabottom50 {
    padding-bottom: 42px;
}
.sec-title-style1 .title {
    position: relative;
    display: block;
    color: #131313;
    font-size: 36px;
    line-height: 46px;
    font-weight: 700;
    text-transform: uppercase;
}

.sec-title-style1 .decor span {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 50px;
    height: 1px;
    background: #FFA500;
    margin: 2px 0;
}


.sec-title-style1 .text{
    position: relative;
    display: block;
    margin: 7px 0 0;
}
.sec-title-style1 .text p{
    position: relative;
    display: inline-block;
    padding: 0 15px;
    color: #131313;
    font-size: 14px;
    line-height: 16px;
    font-weight: 700;
    text-transform: uppercase;
    margin: 0;
}
.sec-title-style1 .text.clr-yellow p{
    color: #FFA500;
}
.sec-title-style1 .text .decor-left{
    position: relative;
    top: -2px;
    display: inline-block;
    width: 70px;
    height: 5px;
    background: transparent;
}
.sec-title-style1 .text .decor-left span {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 50px;
    height: 1px;
    background: #FFA500;
    content: "";
    margin: 2px 0;
}
.sec-title-style1 .text .decor-left:before{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #FFA500;
    border-radius: 50%;
    content: "";
}
.sec-title-style1 .text .decor-left:after{
    position: absolute;
    top: 0;
    right: 10px;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #FFA500;
    border-radius: 50%;
    content: "";
}

.sec-title-style1 .text .decor-right{
    position: relative;
    top: -2px;
    display: inline-block;
    width: 70px;
    height: 5px;
    background: transparent;
}
.sec-title-style1 .text .decor-right span {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 50px;
    height: 1px;
    background: #FFA500;
    content: "";
    margin: 2px 0;
}
.sec-title-style1 .text .decor-right:before{
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #FFA500;
    border-radius: 50%;
    content: "";
}
.sec-title-style1 .text .decor-right:after{
    position: absolute;
    top: 0;
    left: 10px;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #FFA500;
    border-radius: 50%;
    content: "";
}

.sec-title-style1 .bottom-text{
    position: relative;
    display: block;
    padding-top: 16px;
}
.sec-title-style1 .bottom-text p{
    color: #848484;
    font-size: 16px;
    line-height: 26px;
    font-weight: 400;
    margin: 0;
}
.sec-title-style1 .bottom-text.clr-gray p{
    color: #cdcdcd;    
}
.contact-address-area{
    position: relative;
    display: block;
    background: #ffffff;
    padding: 100px 0 120px;
}
.contact-address-area .sec-title-style1.max-width {
    padding-bottom: 72px;
}
.contact-address-box{
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;    
}
.single-contact-address-box {
    position: relative;
    display: block;
    background: #131313;
    padding: 85px 30px 77px;
}
.single-contact-address-box .icon-holder{
    position: relative;
    display: block;
    padding-bottom: 24px;
}
.single-contact-address-box .icon-holder span:before{
    font-size: 75px;
}
.single-contact-address-box h3{
    color: #ffffff;
    margin: 0px 0 9px;
}
.single-contact-address-box h2{
    color: #FFA500;
    font-size: 24px;
    font-weight: 600;
    margin: 0 0 19px;
}
.single-contact-address-box a{
    color: #ffffff;
}

.single-contact-address-box.main-branch {
    background: rgb(118, 168, 234);
    padding: 53px 30px 51px;
    margin-top: -20px;
    margin-bottom: -20px;
}
.single-contact-address-box.main-branch h3{
    color: #131313;
    font-size: 18px;
    font-weight: 700;
    margin: 0 0 38px;
    text-transform: uppercase;
    text-align: center;
}
.single-contact-address-box.main-branch .inner{
    position: relative;
    display: block;
    
}
.single-contact-address-box.main-branch .inner ul{
    position: relative;
    display: block;
    overflow: hidden;
}
.single-contact-address-box.main-branch .inner ul li{
    position: relative;
    display: block;
    padding-left: 110px;
    border-bottom: 1px solid #737373;
    padding-bottom: 23px;
    margin-bottom: 24px;
}
.single-contact-address-box.main-branch .inner ul li:last-child{
    border: none;
    margin-bottom: 0;
    padding-bottom: 0;
}
.single-contact-address-box.main-branch .inner ul li .title{
    position: absolute;
    top: 2px;
    left: 0;
    display: inline-block;
}
.single-contact-address-box.main-branch .inner ul li .title h4{
    color: #131313;
    font-size: 18px;
    font-weight: 600;
    line-height: 24px;
    text-transform: capitalize;
    border-bottom: 2px solid #a5821e;
}

.single-contact-address-box.main-branch .inner ul li .text{
    position: relative;
    display: block;
}
.single-contact-address-box.main-branch .inner ul li .text p{
    color: #131313;
    font-size: 16px;
    line-height: 24px;
    font-weight: 600;
    margin: 0;
}

.contact-info-area {
    position: relative;
    display: block;
    background: #ffffff;
}
.contact-form {
    position: relative;
    display: block;
    background: #ffffff;
    padding: 100px 60px 80px;
    -webkit-box-shadow: 0px 3px 8px 2px #ededed; 
    box-shadow: 0px 3px 8px 2px #ededed;
    z-index: 3;
}
.contact-form .sec-title-style1{
    position: relative;
    display: block;
    padding-bottom: 51px;
    width: 50%;
}
.contact-form .text-box{
    position: relative;
    display: block;
    margin-top: 19px;
    width: 50%;    
}
.contact-form .text p{
    color: #848484;
    line-height: 26px;
    margin: 0;
}

.contact-form .inner-box{
    position: relative;
    display: block;
    background: #ffffff;
}
.contact-form form{
    position: relative;
    display: block;
}
.contact-form form .input-box{
    position: relative;
    display: block;
}
</style>

<section class="contact-address-area">
  <div class="container">
      <div class="sec-title-style1 text-center max-width">
          <div class="title">Contact Us</div>
          <div class="text"><div class="decor-left"><span></span></div><p>Quick Contact</p><div class="decor-right"><span></span></div></div>
      </div>
              <div class="contact-address-box row">
                  <!--Start Single Contact Address Box-->
                  <div class="col-sm-4 single-contact-address-box text-center" style="background:#296b6b">
                   <div class="icon-holder">
                        <span class="icon-question-2">
                            <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                        </span>
                    </div>
                </div>
                <!--End Single Contact Address Box-->
                  <!--Start Single Contact Address Box-->
                  <div class="col-sm-4 single-contact-address-box main-branch">
                      <div class="inner">
                          <ul>
                              <li>
                                  <div class="title">
                                      <h4>Address:</h4>
                                  </div>
                                  <div class="text">
                                      <p>Lalmatia, Dhaka, Bangladesh</p>
                                  </div>
                              </li>
                              <li>
                                  <div class="title">
                                      <h4>Ph & Email:</h4>
                                  </div>
                                  <div class="text">
                                      <p>+8801705424613 <br>gbagrovet@gmail.com</p>
                                  </div>
                              </li>
                              <li>
                                  <div class="title">
                                      <h4>Office Hrs:</h4>
                                  </div>
                                  <div class="text">
                                      <p>Mon-Fri: 9:30am - 6:30pm<br> Sat-Sun: Closed</p>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <!--End Single Contact Address Box-->
                      <!--Start Single Contact Address Box-->
                      <div class="col-sm-4 single-contact-address-box text-center" style="background:#296b6b">
                        <div class="icon-holder">
                             <span class="icon-question-2">
                                 <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                             </span>
                         </div>
                     </div>
                     <!--End Single Contact Address Box-->
      </div>
  </div>
</section>  
<!--End Contact Address Area-->  


@endsection